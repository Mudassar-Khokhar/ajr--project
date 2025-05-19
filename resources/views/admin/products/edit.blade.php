<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- Bootstrap CSS (v5) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
    background-color: #1e1e2f;
    font-family: 'Segoe UI', sans-serif;
}

.bg-gray-800 {
    background-color: #2d2d3f !important;
}

.bg-gray-700 {
    background-color: #3a3a4f !important;
}

.border-gold {
    border-color: #ffcc00 !important;
}

.text-gold {
    color: #ffcc00 !important;
}

.input-dark {
    background-color: #3a3a4f !important;
    color: #fff !important;
    border: 1px solid #4a4a5a;
}

.input-dark:focus {
    background-color: #454562 !important;
    color: #fff !important;
    border-color: #ffcc00;
    box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, 0.25);
}

.card {
    border-radius: 10px;
    border: 1px solid #444;
}

.card-header {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.btn-warning {
    background-color: #ffcc00;
    color: #000;
    border: none;
}

.btn-warning:hover {
    background-color: #e6b800;
    color: #000;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

    </style>
</head>
<body class="bg-dark text-white">

<div class="container-fluid py-4">
    <div class="card shadow bg-gray-800 border-gold">
        <div class="card-header bg-gray-700 border-bottom border-gold py-3">
            <h5 class="mb-0 text-gold"><i class="fas fa-edit me-2"></i>Edit Product: {{ $product->name }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" id="productForm">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label text-gold">Product Name *</label>
                            <input type="text" class="form-control input-dark" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                            @error('name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label text-gold">Category *</label>
                            <select class="form-select input-dark" id="category" name="category" required>
                                <option value="windows" {{ old('category', $product->category) == 'windows' ? 'selected' : '' }}>Windows</option>
                                <option value="doors" {{ old('category', $product->category) == 'doors' ? 'selected' : '' }}>Doors</option>
                            </select>
                            @error('category')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Price and Discount -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label text-gold">Price ($) *</label>
                                    <input type="number" step="0.01" min="0" class="form-control input-dark" id="price" name="price" value="{{ old('price', $product->price) }}" required>
                                    @error('price')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="discount_price" class="form-label text-gold">Discount Price ($)</label>
                                    <input type="number" step="0.01" min="0" class="form-control input-dark" id="discount_price" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}">
                                    @error('discount_price')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label text-gold">Product Image</label>
                            <input type="file" class="form-control input-dark" id="image" name="image" accept="image/*">
                            <div class="form-text text-white-50">Leave blank to keep current image. Recommended size: 800x800px, max 2MB</div>
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$product->image) }}" width="150" class="img-thumbnail" alt="Current Image">
                            </div>
                            @error('image')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Featured -->
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
                                <label class="form-check-label text-gold" for="is_featured">Mark as Featured Product</label>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label text-gold">Description *</label>
                            <textarea class="form-control input-dark" id="description" name="description" rows="5" required>{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end mt-4 gap-2">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary px-4">
                        <i class="fas fa-times me-1"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-warning px-4">
                        <i class="fas fa-save me-1"></i> Update Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('productForm').addEventListener('submit', function(e) {
        const price = parseFloat(document.getElementById('price').value);
        const discountPrice = parseFloat(document.getElementById('discount_price').value) || 0;
        
        if (discountPrice >= price) {
            e.preventDefault();
            alert('Discount price must be less than regular price');
            return false;
        }
    });
});
</script>

</body>
</html>
