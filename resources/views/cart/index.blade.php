<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJR Cart</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }
        .text-gold {
            color: #D4AF37;
        }
        .border-gold {
            border-color: #D4AF37 !important;
        }
        .bg-gray-700 {
            background-color: #2c2c2c;
        }
        .bg-gray-800 {
            background-color: #1f1f1f;
        }
        .card {
            border-radius: 10px;
        }
        .btn-warning {
            background-color: #D4AF37;
            border: none;
        }
        .btn-warning:hover {
            background-color: #c5a032;
        }
        .price {
            font-weight: bold;
            color: #D4AF37;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

<div class="container py-5">
    <h1 class="text-center mb-5 text-gold">Your Shopping Cart</h1>

    @if(count($cart) > 0)
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="card shadow bg-gray-800 mb-4">
                    <div class="card-body">
                        @foreach($cart as $id => $details)
                            <div class="row mb-4 align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('storage/'.$details['image']) }}" 
                                         class="img-fluid rounded" alt="{{ $details['name'] }}">
                                </div>
                                <div class="col-md-4">
                                    <h5 class="text-white">{{ $details['name'] }}</h5>
                                    @if($details['size'])
                                        <p class="text-muted">Size: {{ $details['size'] }}</p>
                                    @endif
                                    @if($details['color'])
                                        <p class="text-muted">Color: {{ $details['color'] }}</p>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <button class="btn btn-outline-light update-quantity" 
                                                data-id="{{ $id }}" data-change="-1">-</button>
                                        <input type="text" class="form-control text-center bg-dark text-white quantity-input" 
                                               value="{{ $details['quantity'] }}" readonly>
                                        <button class="btn btn-outline-light update-quantity" 
                                                data-id="{{ $id }}" data-change="1">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p class="price">${{ number_format($details['price'] * $details['quantity'], 2) }}</p>
                                </div>
                                <div class="col-md-1">
                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" title="Remove">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow bg-gray-800">
                    <div class="card-header bg-gray-700 border-bottom border-gold">
                        <h5 class="mb-0 text-gold">Order Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Shipping</span>
                            <span>Free</span>
                        </div>
                        <hr class="bg-gold">
                        <div class="d-flex justify-content-between mb-4">
                            <strong>Total</strong>
                            <strong>${{ number_format($total, 2) }}</strong>
                        </div>
                        <a href="{{ route('cart.checkout') }}" class="btn btn-warning w-100">
                            Proceed to Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center">
            <i class="fas fa-shopping-cart me-2"></i> Your cart is empty
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-warning">
                Continue Shopping
            </a>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.update-quantity').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.dataset.id;
                const change = parseInt(this.dataset.change);
                const quantityInput = this.closest('.input-group').querySelector('.quantity-input');
                let newQuantity = parseInt(quantityInput.value) + change;

                if (newQuantity < 1) newQuantity = 1;

                fetch("{{ route('cart.add') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: newQuantity
                    })
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
