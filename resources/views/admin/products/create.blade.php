<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add New Product</title>

  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- FontAwesome CDN for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <style>
    /* Custom colors and styling */
    body {
      background-color: #1f2937; /* dark gray-800 */
      color: #fbbf24; /* gold */
      min-height: 100vh;
      padding: 1rem;
    }

    .card {
      background-color: #374151; /* bg-gray-700 */
      border: none;
      border-radius: 0.5rem;
    }

    .card-header {
      background-color: #4b5563; /* bg-gray-700 but lighter */
      border-bottom: 2px solid #fbbf24; /* gold border */
      color: #fbbf24;
      font-weight: 600;
    }

    label.form-label {
      color: #fbbf24;
      font-weight: 500;
    }

    .form-control,
    .form-select {
      background-color: #374151; /* bg-gray-700 */
      color: #fbbf24;
      border: 1px solid #6b7280;
      transition: border-color 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
      background-color: #4b5563;
      color: #fbbf24;
      border-color: #fbbf24;
      box-shadow: none;
    }

    .form-text {
      color: #d1d5db; /* text-white-50 */
    }

    .text-danger {
      font-size: 0.875rem;
    }

    /* Switch styling */
    .form-check-label {
      color: #fbbf24;
      font-weight: 500;
    }

    /* Buttons */
    .btn-warning {
      background-color: #fbbf24;
      border-color: #fbbf24;
      color: #1f2937;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-warning:hover,
    .btn-warning:focus {
      background-color: #d4af37;
      border-color: #d4af37;
      color: #1f2937;
    }

    .btn-secondary {
      background-color: #6b7280;
      border-color: #6b7280;
      color: #fbbf24;
      font-weight: 600;
    }

    .btn-secondary:hover,
    .btn-secondary:focus {
      background-color: #4b5563;
      border-color: #4b5563;
      color: #fbbf24;
    }

    /* Responsive */
    @media (max-width: 575.98px) {
      .card {
        margin: 0 -1rem;
        border-radius: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="card shadow">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Add New Product</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" id="productForm" novalidate>
          @csrf

          <div class="row g-3">
            <div class="col-md-6">
              <div>
                <label for="name" class="form-label">Product Name *</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required />
                @error('name')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
              </div>

              <div>
                <label for="category" class="form-label mt-3">Category *</label>
                <select class="form-select" id="category" name="category" required>
                  <option value="" disabled selected>Select Category</option>
                  <option value="windows" {{ old('category') == 'windows' ? 'selected' : '' }}>Windows</option>
                  <option value="doors" {{ old('category') == 'doors' ? 'selected' : '' }}>Doors</option>
                </select>
                @error('category')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
              </div>

              <div class="row mt-3 g-3">
                <div class="col-md-6">
                  <label for="price" class="form-label">Price ($) *</label>
                  <input
                    type="number"
                    step="0.01"
                    min="0"
                    class="form-control"
                    id="price"
                    name="price"
                    value="{{ old('price') }}"
                    required
                  />
                  @error('price')
                  <div class="text-danger small">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6">
                  <label for="discount_price" class="form-label">Discount Price ($)</label>
                  <input
                    type="number"
                    step="0.01"
                    min="0"
                    class="form-control"
                    id="discount_price"
                    name="discount_price"
                    value="{{ old('discount_price') }}"
                  />
                  @error('discount_price')
                  <div class="text-danger small">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div>
                <label for="image" class="form-label">Product Image *</label>
                <input
                  type="file"
                  class="form-control"
                  id="image"
                  name="image"
                  accept="image/*"
                  required
                />
                <div class="form-text">Recommended size: 800x800px, max 2MB</div>
                @error('image')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-check form-switch mt-4">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="is_featured"
                  name="is_featured"
                  value="1"
                  {{ old('is_featured') ? 'checked' : '' }}
                />
                <label class="form-check-label" for="is_featured">
                  Mark as Featured Product
                </label>
              </div>

              <div class="mt-4">
                <label for="description" class="form-label">Description *</label>
                <textarea
                  class="form-control"
                  id="description"
                  name="description"
                  rows="5"
                  required
                >{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger small">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary px-4">
              <i class="fas fa-times me-1"></i> Cancel
            </a>
            <button type="submit" class="btn btn-warning px-4">
              <i class="fas fa-save me-1"></i> Save Product
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Client-side validation for discount price < price
    document.getElementById('productForm').addEventListener('submit', function (e) {
      const price = parseFloat(document.getElementById('price').value);
      const discountPrice = parseFloat(document.getElementById('discount_price').value) || 0;

      if (discountPrice >= price) {
        e.preventDefault();
        alert('Discount price must be less than regular price');
      }
    });
  </script>
</body>
</html>
