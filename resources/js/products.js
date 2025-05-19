// Product tabs functionality
document.querySelectorAll('.product-tabs .nav-link').forEach(tab => {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.product-tabs .nav-link').forEach(t => {
            t.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Customize modal
const customizeModal = document.getElementById('customizeModal');
if (customizeModal) {
    customizeModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        document.getElementById('productId').value = button.dataset.productId;
    });
    
    document.getElementById('confirmCustomize').addEventListener('click', function() {
        // AJAX call to add to cart would go here
        console.log('Adding customized product to cart');
        bootstrap.Modal.getInstance(customizeModal).hide();
    });
}