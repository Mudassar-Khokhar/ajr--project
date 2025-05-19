<div class="modal fade" id="customizeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-gray-800 border border-gold">
            <div class="modal-header border-bottom border-gold">
                <h5 class="modal-title text-gold">Customize Product</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="customizeForm">
                    <input type="hidden" id="productId" name="product_id">
                    <div class="mb-3">
                        <label class="form-label text-white">Size</label>
                        <select class="form-select bg-gray-700 text-white" name="size" required>
                            <option value="" selected disabled>Select Size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="custom">Custom Size</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Color</label>
                        <select class="form-select bg-gray-700 text-white" name="color" required>
                            <option value="" selected disabled>Select Color</option>
                            <option value="white">White</option>
                            <option value="black">Black</option>
                            <option value="gold">Gold</option>
                            <option value="custom">Custom Color</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Quantity</label>
                        <input type="number" class="form-control bg-gray-700 text-white" 
                               name="quantity" value="1" min="1" max="10" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Special Instructions</label>
                        <textarea class="form-control bg-gray-700 text-white" 
                                  name="instructions" rows="2" placeholder="Any special requirements..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top border-gold">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" id="confirmCustomize">
                    <i class="fas fa-shopping-cart me-1"></i> Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const customizeModal = document.getElementById('customizeModal');
    
    if (customizeModal) {
        customizeModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            document.getElementById('productId').value = button.dataset.productId;
        });
        
        document.getElementById('confirmCustomize').addEventListener('click', function() {
            const form = document.getElementById('customizeForm');
            const formData = new FormData(form);
            
            fetch("{{ route('cart.add') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(Object.fromEntries(formData))
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const toast = new bootstrap.Toast(document.getElementById('cartToast'));
                    document.getElementById('toastMessage').textContent = data.message;
                    toast.show();
                    
                    // Update cart count
                    document.getElementById('cartCount').textContent = data.cart_count;
                    
                    // Close modal
                    bootstrap.Modal.getInstance(customizeModal).hide();
                } else {
                    alert('Error: ' + (data.message || 'Could not add to cart'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while adding to cart');
            });
        });
    }
    
    // Add to cart buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
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
                    // Show success message
                    const toast = new bootstrap.Toast(document.getElementById('cartToast'));
                    document.getElementById('toastMessage').textContent = data.message;
                    toast.show();
                    
                    // Update cart count
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
    
    // Buy now buttons
    document.querySelectorAll('.buy-now').forEach(button => {
        button.addEventListener('click', function() {
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
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "{{ route('cart.index') }}";
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
});
</script>