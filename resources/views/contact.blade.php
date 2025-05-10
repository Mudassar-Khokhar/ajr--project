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
    }

    .ajr-con {
      background-color: #161730;
      padding: 20px 0;
    }

    .contact-section {
      background-color: #161730;
    }

    .agr-contact-wrapper {
      width: 80%;
      margin: 30px auto;
      background-color: #161730;
    }

    .agr-contact-section {
      background-color: transparent;
      color: white;
      padding: 10px;
    }

    .agr-form-box {
      background-color: #1a1d3a;
      padding: 30px;
    }

    .agr-icon {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #D4c780;
    }

    .agr-title {
      font-weight: 600;
      margin-bottom: 20px;
      color: white;
    }

    .agr-form-title {
      color: white;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .agr-description {
      color: gray;
    }

    .form-label {
      color: white !important;
    }

    .form-control {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid #D4c780;
      color: white !important;
      border-radius: 0;
      padding: 10px 0;
    }

    .form-control:focus {
      background-color: transparent;
      color: white !important;
      box-shadow: none;
      border-bottom: 2px solid #D4c780;
    }

    .form-control::placeholder {
      color: #ccc !important;
    }

    .form-control:focus::placeholder {
      color: transparent !important;
    }

    .agr-submit-btn {
      background-color: #D4c780;
      color: #161730;
      border: none;
      padding: 12px;
      width: 100%;
      font-weight: 600;
      margin-top: 20px;
    }

    .agr-submit-btn:hover {
      background-color: #f0e68c;
    }

    textarea.form-control {
      min-height: 120px;
      color: white !important;
    }

    .agr-info-box {
      width: fit-content;
      display: flex;
      align-items: center;
      justify-content: center; /* Center horizontally */
      padding: 5px;
      margin-bottom: 20px;
      border: 1px solid #D4c780;
      border-radius: 10px;
      background-color: rgba(26, 29, 58, 0.5);
      text-align: center; /* Optional */
    }

    @media (max-width: 768px) {
      .agr-contact-wrapper {
        width: 95%;
      }

      .agr-contact-info {
        margin-bottom: 30px;
      }

      .agr-name-group .col-md-6 {
        margin-bottom: 15px;
      }
    }
  </style>
</head>
<body>
  <div class="ajr-con">
    <section class="contact-section">
      <div class="container-fluid py-3">
        <div class="agr-contact-wrapper">
          <div class="row">
            <!-- Contact Info Column -->
            <div class="col-lg-6 agr-contact-info">
              <div class="agr-contact-section h-100">
                <h2 class="agr-title">Contact Us</h2>
                <p class="mb-4">
                  Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                </p>

                <div class="agr-info-box mb-3">
                  <i class="fas fa-phone agr-icon"></i>
                  <div>
                    <p>Contact: +1 (123) 456-7890</p>
                  </div>
                </div>

                <div class="agr-info-box mb-4">
                  <i class="fas fa-envelope agr-icon"></i>
                  <div>
                    <p>Email: contact@agr-example.com</p>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6">
                    <h5 class="agr-form-title">Office Hours</h5>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="col-md-6">
                    <h5 class="agr-form-title">Customer Support</h5>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h5 class="agr-form-title">Feedback & Suggestion</h5>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact Form Column -->
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="agr-form-box h-100">
                <h3 class="agr-form-title">Complains</h3>
                <p class="agr-description">
                  Borem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <form>
                  <div class="row agr-name-group">
                    <div class="col-md-6 mb-3">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                  </div>

                  <div class="mb-3">
                    <label for="message" class="form-label">How can we help you?</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                  </div>

                  <button type="submit" class="agr-submit-btn">Submit</button>
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
