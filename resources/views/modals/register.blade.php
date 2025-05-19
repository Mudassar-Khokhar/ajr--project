<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AGR Registration Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
  <style>
  </style>
</head>
<body>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-wrapper">
    <div class="modal-content modal-card">
      <div class="modal-body modal-inner">
        <div class="row g-0 layout-grid">
          <!-- Promotional Content Column - CL7 -->
          <div class="col-lg-7 feature-panel">
            <div class="row g-0 h-100">
              <!-- First Content Block -->
              <div class="col-md-4 d-flex flex-column">
                <div class="greeting-title">Welcome!</div>
                <div class="my-auto">
                  <img src="images/2.png" alt="Welcome Image" class="feature-visual">
                </div>
              </div>

              <!-- Second Content Block -->
              <div class="col-md-4 d-flex flex-column">
                <img src="images/10.jpeg" alt="Top Image" class="feature-visual">
                <div class="company-mark">AJR</div>
                <div class="promo-caption">NEW COLLECTION</div>
                <button class="action-button">Shop Now</button>
                <img src="images/11.jpeg" alt="Bottom Image" class="feature-visual">
              </div>
              
              <!-- Third Content Block -->
              <div class="col-md-4 d-flex flex-column">
                <div class="my-auto">
                  <img src="images/6.png" alt="Center Image" class="feature-visual">
                </div>
              </div>
            </div>
            <!-- Login link -->
            <div class="signup-link">
              <a href="#" style="color: #D4c780;">are you member? Login</a>
            </div>
          </div>
          
          <!-- Registration Form Column - CL5 -->
          <div class="col-lg-5 access-panel">
            <div>
              <h3 class="form-title">Register</h3>
              <form id="registrationForm">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="text" name="username" class="form-field" placeholder="Enter your username" required>
                  <div class="invalid-feedback username-feedback"></div>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-field" placeholder="Enter your email" required>
                  <div class="invalid-feedback email-feedback"></div>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="tel" name="phone" class="form-field" placeholder="Enter your phone number" required>
                  <div class="invalid-feedback phone-feedback"></div>
                </div>
                
                <div class="password-row">
                  <div class="password-col">
                    <label class="form-label">Password</label>
                    <div class="password-input-container">
                      <input type="password" name="password" class="form-field" placeholder="Enter password" id="password" required>
                      <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    <div class="invalid-feedback password-feedback"></div>
                  </div>
                  
                  <div class="password-col">
                    <label class="form-label">Repeat Password</label>
                    <div class="password-input-container">
                      <input type="password" name="password_confirmation" class="form-field" placeholder="Confirm password" id="confirmPassword" required>
                      <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                    </div>
                  </div>
                </div>
                
                <button type="submit" class="primary-action" id="registerButton">
                  <span id="registerButtonText">Create account</span>
                  <div id="registerSpinner" class="spinner-border spinner-border-sm d-none" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </button>
              </form>
            </div>
            
            <div class="alt-login">
              <p>or sign in with</p>
              <div class="social-buttons">
                <a href="#" class="social-btn">
                  <i class="fab fa-facebook-f"></i>
                  <span>Facebook</span>
                </a>
                <a href="#" class="social-btn">
                  <i class="fab fa-google"></i>
                  <span>Google</span>
                </a>
                <a href="#" class="social-btn">
                  <i class="fab fa-x-twitter"></i>
                  <span>Twitter</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Password toggle
  document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
  });
  
  document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPasswordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
  });

  // Registration form handler
  document.getElementById('registrationForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const form = e.target;
    const button = document.getElementById('registerButton');
    const buttonText = document.getElementById('registerButtonText');
    const spinner = document.getElementById('registerSpinner');
    
    // Clear previous errors
    document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    document.querySelectorAll('.invalid-feedback').forEach(el => el.textContent = '');
    
    // Show loading state
    button.disabled = true;
    buttonText.textContent = 'Processing...';
    spinner.classList.remove('d-none');
    
    try {
      const formData = new FormData(form);
      const response = await fetch('/register', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
          'Accept': 'application/json'
        },
        body: formData
      });
      
      const data = await response.json();
      
      if (response.ok) {
        // Success case
        alert(data.message);
        
        // Close registration modal and open login modal
        const registerModal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
        registerModal.hide();
        
        const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
        
        // Reset form
        form.reset();
      } else {
        // Handle validation errors
        if (data.errors) {
          for (const [field, messages] of Object.entries(data.errors)) {
            const input = form.querySelector(`[name="${field}"]`);
            const feedback = form.querySelector(`.${field}-feedback`);
            
            if (input && feedback) {
              input.classList.add('is-invalid');
              feedback.textContent = messages.join(' ');
            }
          }
        } else {
          alert(data.message || 'Registration failed');
        }
      }
    } catch (error) {
      console.error('Error:', error);
      alert('An error occurred during registration');
    } finally {
      // Reset button state
      button.disabled = false;
      buttonText.textContent = 'Create account';
      spinner.classList.add('d-none');
    }
  });
  
  // Switch to login modal
  document.querySelector('.signup-link a').addEventListener('click', function(e) {
    e.preventDefault();
    const registerModal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
    registerModal.hide();
    
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
    loginModal.show();
  });
</script>

</body>
</html>