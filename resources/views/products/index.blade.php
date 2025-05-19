<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Our Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #161730;
            color: #ffffff;
        }

        .text-gold {
            color: #D4C780;
        }

        .container.product {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1rem;
        }

        .product-tabs .nav-link {
            color: #CCCCCC;
            background-color: #1A1D3A;
            border: 1px solid #1A1D3A;
            margin: 0 5px;
            border-radius: 20px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .product-tabs .nav-link.active {
            background-color: #0d0f1f;
            color: #D4C780;
            border: 1px solid #D4C780;
            font-weight: 600;
        }

        .product-tabs .nav-link:hover:not(.active) {
            color: #D4C780;
            border-color: #D4C780;
        }

        .alert-info {
            background-color: #1A1D3A;
            border-color: #D4C780;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .product-tabs {
                flex-wrap: nowrap;
                overflow-x: auto;
                justify-content: flex-start;
                padding-bottom: 10px;
            }

            .product-tabs .nav-item {
                flex: 0 0 auto;
            }

            .container.product {
                width: 95%;
                padding: 2rem 1rem;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 24px;
            }

            .product-tabs .nav-link {
                padding: 6px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <div class="container product">
        <h1 class="text-center mb-5 text-gold">Our Products</h1>

        <ul class="nav product-tabs nav-pills mb-4 justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#windows">Windows</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#doors">Doors</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="windows">
                @if($windows->isEmpty())
                    <div class="alert alert-info text-center">No windows products available.</div>
                @else
                    <div class="row g-4">
                        @foreach($windows as $product)
                            @include('products._product_card', ['product' => $product])
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="tab-pane fade" id="doors">
                @if($doors->isEmpty())
                    <div class="alert alert-info text-center">No doors products available.</div>
                @else
                    <div class="row g-4">
                        @foreach($doors as $product)
                            @include('products._product_card', ['product' => $product])
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('products._customize_modal')
    @include('layouts.footer')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="cartToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastMessage"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.dataset.productId;

                    fetch("{{ route('cart.add') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            product_id: productId,
                            quantity: 1
                        })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                const toast = new bootstrap.Toast(document.getElementById('cartToast'));
                                document.getElementById('toastMessage').textContent = data.message;
                                toast.show();
                                document.getElementById('cartCount').textContent = data.cart_count;
                            } else {
                                alert('Error: ' + (data.message || 'Could not add to cart'));
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred while adding to cart');
                        });
                });
            });

            document.querySelectorAll('.buy-now').forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.dataset.productId;

                    fetch("{{ route('cart.buy-now') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            product_id: productId,
                            quantity: 1
                        })
                    })
                        .then(response => {
                            if (response.redirected) {
                                window.location.href = response.url;
                            }
                            return response.json();
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred while processing your request');
                        });
                });
            });
        });
    </script>
</body>
</html>
