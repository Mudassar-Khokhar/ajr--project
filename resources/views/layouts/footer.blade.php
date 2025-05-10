<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .site-footer {
      background-color: #1a1d3a;
      width: 100%;
      padding: 40px 0 40px 40px; /* padding-right set to 0 */
      color: #ecf0f1;
    }

    .site-footer-container {
      width: 80%;
      margin: 0 auto !important; /* centers the container horizontally */
    }

    .custom-footer-title {
      color: #ffffff;
      font-size: 18px;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .custom-social-icon {
      width: 40px;
      height: 40px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-right: 10px;
      transition: all 0.3s;
    }

    .custom-social-icon:hover {
      background-color: #1abc9c;
      transform: translateY(-3px);
    }

    .site-footer a {
      color: #bdc3c7;
      text-decoration: none;
      transition: color 0.3s;
    }

    .site-footer a:hover {
      color: #ffffff;
    }

    .custom-payment-logos img {
      height: 30px;
      margin-bottom: 10px;
      margin-right: 10px;
      filter: grayscale(100%) brightness(150%);
      transition: filter 0.3s;
    }

    .custom-payment-logos img:hover {
      filter: grayscale(0%) brightness(100%);
    }

    .custom-logo {
      font-size: 4rem !important;
      font-weight: 400 !important;
      color: #D4c780 !important;
      margin-bottom: 15px;
    }

    .custom-bottom-bar {
      border-top: 1px solid #34495e;
      padding-top: 20px;
      padding-bottom: 20px;
      margin-top: 30px;
      text-align: center;
    }

    .custom-verification-logo img {
      height: 40px;
      filter: brightness(0) invert(1);
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
      .custom-payment-logos,
      .custom-verification-logo {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
      }
    }

    @media (max-width: 768px) {
      .site-footer-container {
        width: 90%;
      }

      .custom-logo {
        font-size: 26px;
      }

      .custom-payment-logos img,
      .custom-verification-logo img {
        height: 25px;
      }

      .custom-footer-title {
        font-size: 16px;
      }

      .custom-bottom-bar {
        padding: 15px 0;
      }
    }

    @media (max-width: 576px) {
      .site-footer-container {
        width: 95%;
      }

      .custom-payment-logos img,
      .custom-verification-logo img {
        height: 20px;
      }

      .custom-social-icon {
        width: 35px;
        height: 35px;
      }

      .custom-logo {
        font-size: 22px;
      }

      .site-footer {
        padding-top: 30px;
      }
    }
  </style>
</head>
<body>

  <footer class="site-footer">
    <div class="site-footer-container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="custom-logo">AJR</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum aliquet accumsan porta lectus ridiculus in mattis.</p>
          <div class="mt-3">
            <a href="#" class="custom-social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="custom-social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="custom-social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="custom-social-icon"><i class="fab fa-github"></i></a>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 col-12 mb-4">
          <h5 class="custom-footer-title">Services</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#">Home</a></li>
            <li class="mb-2"><a href="#">FAQs</a></li>
            <li class="mb-2"><a href="#">Contact Us</a></li>
            <li class="mb-2"><a href="#">Help Center</a></li>
            <li class="mb-2"><a href="#">Complain</a></li>
          </ul>
        </div>

        <div class="col-md-2 col-sm-6 col-12 mb-4">
          <h5 class="custom-footer-title">Policies</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#">Terms & Conditions</a></li>
            <li class="mb-2"><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <h5 class="custom-footer-title">Secure Payments</h5>
          <div class="custom-payment-logos">
            <img src="https://via.placeholder.com/60x30?text=Visa" alt="Visa">
            <img src="https://via.placeholder.com/60x30?text=Mastercard" alt="Mastercard">
            <img src="https://via.placeholder.com/60x30?text=PayPal" alt="PayPal">
            <img src="https://via.placeholder.com/60x30?text=Stripe" alt="Stripe">
            <img src="https://via.placeholder.com/60x30?text=SSL" alt="SSL Secure">
          </div>
        </div>

        <div class="col-md-2 col-sm-6 col-12 mb-4">
          <h5 class="custom-footer-title">Verified By</h5>
          <div class="custom-verification-logo">
            <img src="https://via.placeholder.com/100x50?text=FBR" alt="FBR">
          </div>
        </div>
      </div>

      <div class="custom-bottom-bar">
        <p class="mb-0">&copy; All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
