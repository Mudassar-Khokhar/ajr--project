<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AGR - Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #161730 !important;
    }

    .contact-container {
      background-color: #161730;
      max-width: 1200px;
      margin: 0 auto;
      margin-bottom:8rem;
    }

    .contact-wrapper {
      background-color: #161730;
    }

    .contact-section {
      background-color: transparent;
      color: white;
      padding: 10px 10px 10px 0;
    }

    .contact-form-box {
      background-color: #1a1d3a;
      padding: 30px;
    }

    .contact-icon {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #D4c780;
    }

    .contact-title {
      font-weight: 600;
      margin-bottom: 20px;
      color: white;
    }

    .contact-form-title {
      color: white;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .contact-description {
      color: gray;
    }

    .form-label {
      color: white !important;
    }

    .form-control {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid #D4c780;
      color: black !important;
      border-radius: 0;
      padding: 10px 0;
    }

    .form-control:focus {
      background-color: transparent;
      color: black !important;
      box-shadow: none;
      border-bottom: 2px solid #D4c780;
    }

    .form-control::placeholder {
      color: gray !important;
    }

    .form-control:focus::placeholder {
      color: transparent !important;
    }

    .contact-submit-btn {
      background-color: #D4c780;
      color: #161730;
      border: none;
      padding: 12px;
      width: 100%;
      font-weight: 600;
      margin-top: 20px;
    }

    .contact-submit-btn:hover {
      background-color: #f0e68c;
    }

    textarea.form-control {
      min-height: 120px;
      color: black !important;
    }

    .contact-info-box {
      display: flex;
      align-items: left; 
      padding: 20px;
      margin: 0 auto 20px auto;
      border: 1px solid #D4c780;
      border-radius: 10px;
      width: 50%;
    }

    .contact-info-box:hover {
      background-color: rgba(26, 29, 58, 0.8);
    }

    .contact-info-box a {
      color: white;
      text-decoration: none;
    }

    .alert {
      margin-bottom: 20px;
    }

    @media (max-width: 768px) {
      .contact-wrapper {
        width: 95%;
      }

      .contact-info {
        margin-bottom: 30px;
      }

      .contact-name-group .col-md-6 {
        margin-bottom: 15px;
      }

      .contact-info-box {
        width: 100%;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
@include('layouts.navbar')
  <div class="contact-container">
    <section class="contact-section">
      <div class="container-fluid py-3">
        <div class="contact-wrapper">
          <div class="row">
            <!-- Contact Info Column -->
            <div class="col-lg-6 contact-info">
              <div class="contact-section h-100">
                <h2 class="contact-title">Contact Us</h2>
                <p class="mb-4">
                  Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                </p>

                <div class="contact-info-box mb-3">
                  <i class="fas fa-phone contact-icon"></i>
                  <div>
                    <a href="tel:+11234567890">+1 (123) 456-7890</a>
                  </div>
                </div>

                <div class="contact-info-box mb-4">
                  <i class="fas fa-envelope contact-icon"></i>
                  <div>
                    <a href="mailto:contact@agr-example.com">contact@agr-example.com</a>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6">
                    <h5 class="contact-form-title">Office Hours</h5>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="col-md-6">
                    <h5 class="contact-form-title">Customer Support</h5>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h5 class="contact-form-title">Feedback & Suggestion</h5>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact Form Column -->
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="contact-form-box h-100">
                <h3 class="contact-form-title">Complains</h3>
                <p class="contact-description">
                  Borem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                  @csrf
                  <div class="row contact-name-group">
                    <div class="col-md-6 mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                  </div>

                  <div class="mb-3">
                    <label for="message" class="form-label">How can we help you?</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                  </div>

                  <button type="submit" class="contact-submit-btn">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
