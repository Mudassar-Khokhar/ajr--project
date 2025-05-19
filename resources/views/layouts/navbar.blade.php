<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJR Navigation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .nv {
      width: 100%;
      background-color: #1a1d3a;
      margin-bottom: 5rem;
    }

    .ajr-nv-container {
      width: 80%;
      max-width: 1200px;
      margin: 0 auto;
      /* padding: 0 15px; */
      
    }

    .ajr-nv-navbar {
      background-color: #1a1d3a;
      padding: 15px 0;
    }

    .ajr-nv-brand {
        font-size: 4rem !important;
  font-weight: 400 !important;
  color: #D4c780 !important;
  transition: none !important;
    }

    .navbar-nav {
  padding-left: 8rem !important;
}

    .ajr-nv-link {
      color: white !important;
      font-size: 18px;
      font-weight: 400;
      margin: 0 15px;
      /* padding: 10px 15px; */
    }

    .ajr-nv-link:hover {
      color: #D4c780 !important;
      background-color: rgba(255, 255, 255, 0.1);
    }

    .ajr-nv-icon {
      color: white;
      font-size: 1.5rem;
      margin: 0 5px;
      padding: 10px;
    }


    .profile-dropdown {
      position: relative;
    }

    .profile-info {
      display: none;
      position: absolute;
      top: 50px;
      right: 0;
      background-color: #fff;
      color: black;
      border-radius: 5px;
      padding: 10px;
      z-index: 100;
      width: 150px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .profile-info.show {
      display: block;
    }

    .dummy-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      object-fit: cover;
    }

    .logout-btn {
      width: 100%;
    }

    @media (max-width: 992px) {
      .ajr-nv-nav {
        padding-left: 0 !important;
        margin-top: 20px;
      }
    }

    @media (max-width: 768px) {
      .ajr-nv-container {
        padding: 0 10px;
      }

      .ajr-nv-link {
        font-size: 16px;
      }

      .ajr-nv-brand {
        font-size: 2.5rem;
      }

      .ajr-nv-icon {
        font-size: 1.25rem;
        margin: 0 10px;
      }
    }
  </style>
</head>
<body>
  <section class="nv">
    <nav class="navbar navbar-expand-lg ajr-nv-navbar">
      <div class="container-fluid ajr-nv-container">
        <a class="navbar-brand ajr-nv-brand" href="#">AJR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ajr-nv-content">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="ajr-nv-content">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link ajr-nv-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link ajr-nv-link" href="{{ route('products.index') }}">Products</a></li>
            <li class="nav-item"><a class="nav-link ajr-nv-link" href="{{ route('category') }}">Categories</a></li>
            <li class="nav-item"><a class="nav-link ajr-nv-link" href="{{ route('about') }}">About Us</a></li>
            <li class="nav-item"><a class="nav-link ajr-nv-link" href="{{ route('contact') }}">Contact Us</a></li>
          </ul>
          <div class="d-flex align-items-center">
            <a href="#" class="ajr-nv-icon"><i class="fas fa-search"></i></a>
            <a href="{{ route('cart.index') }}" class="ajr-nv-icon position-relative">
              <i class="fas fa-shopping-basket"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cartCount">
                  {{ count(session('cart', [])) }}
              </span>
            </a>

            @auth
    <div class="ms-3 profile-dropdown">
      <img src="images/dummy.jpeg" alt="User" class="dummy-img" id="profileToggle">
      <div class="profile-info" id="profileMenu">
        <p class="mb-1">👤 {{ Auth::user()->username }}</p>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-sm btn-danger logout-btn">Logout</button>
        </form>
      </div>
    </div>
@endauth

          </div>
        </div>
      </div>
    </nav>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle profile menu
    document.getElementById("profileToggle")?.addEventListener("click", function () {
      document.getElementById("profileMenu").classList.toggle("show");
    });
  </script>
</body>
</html>
