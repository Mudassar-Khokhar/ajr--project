<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AGR Registration Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    .modal-wrapper {
      width: 80%;
      height: 80vh;
      margin: 10vh auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .modal-card {
      width: 100%;
      height: 100%;
      overflow: auto;
    }

    .modal-inner {
      padding: 0;
      height: 100%;
    }

    .layout-grid {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      height: 100%;
    }

    .feature-panel {
      background-color: #1a1d3a;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 0;
      height: 100% auto;
    }

    .access-panel {
      background-color: #161730;
      padding: 30px;
      display: flex;
      flex-direction: column;
      color: white;
      justify-content: space-between;
      height: 100% auto;
    }

    .auth-form {
      padding: 15px;
    }

    .greeting-title,
    .promo-caption,
    .action-button,
    .feature-visual {
      margin-bottom: 20px;
    }

    .company-mark {
      margin: 20px auto;
    }

    .greeting-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: #D4c780;
      text-align: center;
    }

    .feature-visual {
      width: 100%;
      height: auto;
      max-height: 280px;
      object-fit: contain;
      margin: 10px 0;
      display: block;
    }

    .company-mark {
      max-width: 120px;
      color: #D4c780;
      font-weight: 400;
      font-size: 3rem;
      text-align: center;
    }

    .promo-caption {
      text-align: center;
      color: gray;
    }

    .action-button {
      background-color: #D4c780;
      color: black;
      border: none;
      padding: 8px 20px;
      border-radius: 10px;
      margin: 20px auto;
      display: block;
    }

    .signup-link {
      text-align: left;
      font-size: 0.9rem;
      color: #D4c780;
      padding: 15px;
    }

    .form-title {
      text-align: left;
      margin-bottom: 25px;
      font-weight: 600;
      color: white;
    }

    .form-field {
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid gray;
      color: white;
      padding: 8px 0;
      width: 100%;
    }

    .form-field:focus {
      outline: none;
      border-bottom: 2px solid white;
    }

    .form-field::placeholder {
      color: gray;
    }

    .form-field:focus::placeholder {
      color: transparent;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      color: white;
    }

    .primary-action {
      background-color: #f0e68c;
      color: #333;
      width: 100%;
      padding: 12px;
      border-radius: 20px;
      border: none;
      margin: 20px 0;
      font-weight: bold;
    }

    .remember-me {
      display: flex;
      align-items: center;
      margin: 15px 0;
      color: white;
    }

    .remember-me input {
      margin-right: 8px;
    }

    .password-help {
      text-align: right;
      margin: 15px 0;
      font-size: 0.9rem;
      color: white;
    }

    .alt-login {
      text-align: left;
      margin-top: auto;
      padding-bottom: 20px;
    }

    .social-buttons {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .social-btn {
      background-color: #1a1d3a;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      display: flex;
      align-items: center;
      text-decoration: none;
      font-size: 14px;
      flex: 1;
      min-width: 100px;
      justify-content: center;
    }

    .social-btn i {
      margin-right: 8px;
      font-size: 16px;
      color: white;
    }

    .password-input-container {
      position: relative;
      margin-bottom: 20px;
    }

    .password-toggle {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: gray;
      cursor: pointer;
    }

    .password-row {
      display: flex;
      gap: 15px;
    }

    .password-col {
      flex: 1;
    }

    .forgot-password-text {
      color: white;
      margin-bottom: 30px;
      line-height: 1.6;
      white-space: pre-line;
    }

    .back-button {
      background: none;
      border: none;
      color: #D4c780;
      text-decoration: underline;
      padding: 0;
      cursor: pointer;
      margin-top: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    @media (max-width: 991.98px) {
      .access-panel {
        padding: 20px;
      }
      .social-btn {
        min-width: 80px;
        padding: 8px 10px;
        font-size: 12px;
      }
      .password-row {
        flex-direction: column;
        gap: 0;
      }
    }

    @media (max-width: 767.98px) {
      .access-panel {
        padding: 15px;
      }
      .company-mark {
        font-size: 2.5rem;
      }
      .social-buttons {
        gap: 8px;
      }
    }

    @media (max-width: 575.98px) {
      .greeting-title {
        font-size: 1.2rem;
      }
      .company-mark {
        font-size: 2rem;
      }
      .social-btn {
        min-width: 70px;
        padding: 6px 8px;
      }
      .social-btn i {
        font-size: 14px;
      }
    }
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