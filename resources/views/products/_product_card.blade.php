<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>AGR Products</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .product-card {
      border: none;
      border-radius: 10px;
      overflow: hidden;
      background-color: #1A1D3A;
      color: #FFFFFF;
      height: 100%;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(212, 199, 128, 0.1);
    }

    .card-img-container {
      height: 200px;
      background-color: #161730;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
      position: relative;
    }

    .product-card img {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
      transition: transform 0.3s ease;
    }

    .product-card:hover img {
      transform: scale(1.05);
    }

    .featured-badge {
      background-color: #D4C780;
      color: #161730;
      font-weight: 600;
      padding: 5px 10px;
      font-size: 0.75rem;
      z-index: 2;
    }

    .customize-btn {
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #D4C780;
      color: #161730;
      border: none;
      transition: all 0.2s ease;
    }

    .customize-btn:hover {
      background-color: #c5b873;
      transform: rotate(90deg);
    }

    .card-body {
      padding: 1.25rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .card-title {
      color: #D4C780;
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      text-align: center;
    }

    .card-text {
      color: #CCCCCC;
      font-size: 0.875rem;
      text-align: center;
      margin-bottom: 1rem;
    }

    .price-row {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.75rem;
    }

    .current-price {
      color: #D4C780;
      font-weight: 700;
      font-size: 1.1rem;
    }

    .original-price {
      text-decoration: line-through;
      color: #999999;
      font-size: 0.875rem;
    }

    .action-buttons {
      display: flex;
      justify-content: center;
      gap: 0.75rem;
    }

    .btn-outline-warning {
      color: #D4C780;
      border-color: #D4C780;
      font-size: 0.875rem;
      padding: 0.375rem 0.75rem;
    }

    .btn-outline-warning:hover {
      background-color: #D4C780;
      color: #161730;
    }

    .btn-warning {
      background-color: #D4C780;
      color: #161730;
      font-weight: 600;
      border: none;
      font-size: 0.875rem;
      padding: 0.375rem 0.75rem;
    }

    .btn-warning:hover {
      background-color: #c5b873;
    }

    /* Responsive Grid */
    @media (max-width: 575.98px) {
      .col-md-6 { max-width: 100%; }
      .card-img-container { height: 180px; }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
      .col-md-6 { max-width: 50%; }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
      .col-md-6 { max-width: 50%; }
    }

    @media (min-width: 992px) {
      .col-lg-4 { max-width: 33.33%; }
    }

    @media (min-width: 1200px) {
      .col-xl-3 { max-width: 25%; }
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="product-card card h-100">
          <div class="position-relative card-img-container">
            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            @if($product->is_featured)
              <span class="position-absolute top-0 start-0 m-2 badge featured-badge">Featured</span>
            @endif
            <button class="customize-btn btn btn-sm position-absolute top-0 end-0 m-2 rounded-circle"
                    data-bs-toggle="modal" data-bs-target="#customizeModal"
                    data-product-id="{{ $product->id }}"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Customize">
              <i class="fas fa-cog"></i>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ Str::limit($product->description, 80) }}</p>

            <!-- Prices Row -->
            <div class="price-row">
              <span class="current-price">
                ${{ number_format($product->discount_price ?? $product->price, 2) }}
              </span>
              @if($product->discount_price)
              <span class="original-price">${{ number_format($product->price, 2) }}</span>
              @endif
            </div>

            <!-- Buttons Row -->
            <div class="action-buttons">
              <button class="btn btn-sm btn-outline-warning add-to-cart" data-product-id="{{ $product->id }}">
                <i class="fas fa-shopping-cart me-1"></i> Add
              </button>
              <button class="btn btn-sm btn-warning buy-now" data-product-id="{{ $product->id }}">
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tooltips = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      tooltips.map(function(el) {
        return new bootstrap.Tooltip(el);
      });
    });
  </script>
</body>
</html>
