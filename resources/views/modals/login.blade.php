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
</head>
<body>

<!-- Registration Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
              <a href="#" style="color: #D4c780;">Don't have an account? Register</a>
            </div>
          </div>
          
          <!-- Registration Form Column - CL5 -->
          <div class="col-lg-5 access-panel">
            <div>
              <h3 class="form-title">Log in</h3>
              <form id="loginForm">
                @csrf
                
                <div class="mb-3">
                  <label class="form-label">Email or Username</label>
                  <input type="text" name="email" class="form-control form-field" placeholder="Enter email or username" required>
                  <div class="invalid-feedback email-feedback"></div>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <div class="password-input-container">
                    <input type="password" name="password" class="form-control form-field" placeholder="Enter password" id="loginPassword" required>
                    <i class="fas fa-eye password-toggle" id="toggleLoginPassword"></i>
                  </div>
                  <div class="invalid-feedback password-feedback"></div>
                </div>
                
                <div class="remember-me">
                  <input type="checkbox" id="remember" name="remember">
                  <label for="remember">Remember me</label>
                </div>
                
                <button type="submit" class="primary-action" id="loginButton">
                  <span id="loginButtonText">Log in</span>
                  <div id="loginSpinner" class="spinner-border spinner-border-sm d-none" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </button>
                
                <div class="password-help">
                  <a href="#" class="fgt-btn">Forgot your password?</a>
                </div>
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
  document.addEventListener('DOMContentLoaded', function() {
    // Password toggle functionality
    document.getElementById('toggleLoginPassword')?.addEventListener('click', function() {
        const passwordInput = document.getElementById('loginPassword');
        if (passwordInput) {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        }
    });

    // Login form handler
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('Login form submitted'); // Debug log
            
            const form = e.target;
            const button = document.getElementById('loginButton');
            const buttonText = document.getElementById('loginButtonText');
            const spinner = document.getElementById('loginSpinner');
            
            // Clear previous errors
            document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            document.querySelectorAll('.invalid-feedback').forEach(el => el.textContent = '');
            
            // Show loading state
            button.disabled = true;
            buttonText.textContent = 'Logging in...';
            spinner?.classList.remove('d-none');
            
            try {
                // Prepare form data with proper remember me value
                const formData = {
                    email: form.email.value,
                    password: form.password.value,
                    remember: form.remember.checked, // Convert checkbox to boolean
                    _token: document.querySelector('meta[name="csrf-token"]').content
                };
                
                console.log('Submitting login data:', formData); // Debug log
                
                const response = await fetch('/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': formData._token
                    },
                    body: JSON.stringify(formData)
                });
                
                console.log('Received response, status:', response.status); // Debug log
                const data = await response.json();
                console.log('Response data:', data); // Debug log
                
                if (response.ok) {
                    console.log('Login successful, redirecting to:', data.redirect || '/category');
                    window.location.href = data.redirect || '/category';
                } else {
                    console.log('Login failed with errors:', data.errors || data.message);
                    if (data.errors) {
                        for (const [field, messages] of Object.entries(data.errors)) {
                            const input = form.querySelector(`[name="${field}"]`);
                            const feedback = form.querySelector(`.${field}-feedback`);
                            
                            if (input && feedback) {
                                input.classList.add('is-invalid');
                                feedback.textContent = messages.join(' ');
                            }
                        }
                    }
                    alert(data.message || 'Login failed. Please check your credentials.');
                }
            } catch (error) {
                console.error('Login error:', error);
                alert('An error occurred during login. Please try again.');
            } finally {
                button.disabled = false;
                buttonText.textContent = 'Log in';
                spinner?.classList.add('d-none');
            }
        });
    } else {
        console.error('Login form not found on page');
    }

    // Forgot password handler
    document.querySelector('.fgt-btn')?.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Forgot password clicked');
        
        const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
        const forgotModal = new bootstrap.Modal(document.getElementById('forgotModal'));
        
        loginModal?.hide();
        forgotModal?.show();
    });
});
</script>
  
  
  @include('modals.forgot')
</body>
</html>