<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    
  </style>
</head>
<body>
  <section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AJR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('category') }}">Categories</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
            <div class="d-flex align-items-center">
              <a href="#" class="icon-btn"><i class="fas fa-search"></i></a>
              <a href="#" class="icon-btn"><i class="fas fa-shopping-basket"></i></a>
              <button class="register-btn auth-btn me-2">Register</button>
              <button class=" login-btn auth-btn">Login</button>
            </div>
          </div>
        </div>
      </nav>
      
      <!-- Hero Text -->
      <div class="hero-text">
        <h1 class="hero-title">Build Your Dream <br>Doors & Windows</h1>
        <p class="hero-subtitle">Get instant quotes, customize in real-time, and order directly from AJR</p>
        <div class="d-flex hero-buttons">
          <button class="primary-btn cta-btn">Start Building</button>
          <button class="secondary-btn cta-btn">Get Instant Quote</button>
        </div>
      </div>
      
      <!-- Bottom Controls -->
      <div class="bottom-controls">
        <div class="nav-controls d-flex">
          <button class="nav-control me-2"><i class="fas fa-chevron-left"></i></button>
          <button class="nav-control"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="social-icons d-flex">
          <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="social-icon ms-3"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Second Container - First Section -->
  <section class="features-section">
    <div class="features-container">
      <div class="row g-4">
        <!-- First Feature Box -->
        <div class="col-lg-6">
          <div class="feature-box h-100">
            <div class="row g-0 h-100">
              <div class="col-md-7 feature-content">
                <h3 class="feature-title">YOUR DREAM DOORS</h3>
                <p class="feature-text">Get instant quotes, customize in real-time, and order directly from AJR</p>
                <button class="feature-btn">View Now</button>
              </div>
              <div class="col-md-5 feature-img-container">
                <img src="images/2.png" alt="Premium Quality" class="feature-img">
              </div>
            </div>
          </div>
        </div>
        
        <!-- Second Feature Box -->
        <div class="col-lg-6">
          <div class="feature-box h-100">
            <div class="row g-0 h-100">
              <div class="col-md-7 feature-content">
                <h3 class="feature-title">YOUR DREAM WINDOWS</h3>
                <p class="feature-text">Get instant quotes, customize in real-time, and order directly from AJR</p>
                <button class="feature-btn">View Now</button>
              </div>
              <div class="col-md-5 feature-img-container">
                <img src="images/6.png" alt="Custom Designs" class="feature-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Second Container - Second Section -->
  <section class="products-section">
    <div class="container">
      <h2 class="section-title">Our Products</h2>
      <p class="section-subtitle">Get instant quotes, customize in real-time, and order directly from AJR</p>
      
      <!-- Product Tabs -->
      <ul class="nav product-tabs" id="productTabs">
        <li class="nav-item">
          <button class="product-tab" data-bs-toggle="tab" data-bs-target="#toys">ENTRY DOORS</button>
        </li>
        <li class="nav-item">
          <button class="product-tab" data-bs-toggle="tab" data-bs-target="#games">SLIDING DOORS</button>
        </li>
        <li class="nav-item">
          <button class="product-tab" data-bs-toggle="tab" data-bs-target="#accessories">CASEMENT WINDOWs</button>
        </li>
        <li class="nav-item">
          <button class="product-tab" data-bs-toggle="tab" data-bs-target="#gadgets">DOUBLE HUNG WINDOWS</button>
        </li>
        <li class="nav-item">
          <button class="product-tab active" data-bs-toggle="tab" data-bs-target="#all">ALL</button>
        </li>
      </ul>
      
      <!-- Product Tab Content -->
      <div class="tab-content">
        <div class="tab-pane fade" id="toys">...</div>
        <div class="tab-pane fade" id="games">...</div>
        <div class="tab-pane fade" id="accessories">...</div>
        <div class="tab-pane fade" id="gadgets">...</div>

        <div class="tab-pane fade show active" id="all">
          <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
              <div class="product-img-container">
                <img src="images/1.png" alt="Fun Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Super Fun Toy</h4>
                <div>
                  <span class="product-price">$29.99</span>
                  <span class="product-old-price">$39.99</span>
                </div>
              </div>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
              <div class="product-img-container">
                <img src="images/2.png" alt="Creative Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Creative Builder</h4>
                <div>
                  <span class="product-price">$49.99</span>
                  <span class="product-old-price">$59.99</span>
                </div>
              </div>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
              <div class="product-img-container">
                <img src="images/3.png" alt="Educational Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Learning Fun</h4>
                <div>
                  <span class="product-price">$39.99</span>
                  <span class="product-old-price">$49.99</span>
                </div>
              </div>
            </div>
            <div class="product-card">
              <div class="product-img-container">
                <img src="images/4.png" alt="Outdoor Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Outdoor Adventure</h4>
                <div>
                  <span class="product-price">$34.99</span>
                  <span class="product-old-price">$44.99</span>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-img-container">
                <img src="images/5.png" alt="Outdoor Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Outdoor Adventure</h4>
                <div>
                  <span class="product-price">$34.99</span>
                  <span class="product-old-price">$44.99</span>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-img-container">
                <img src="images/6.png" alt="Outdoor Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Outdoor Adventure</h4>
                <div>
                  <span class="product-price">$34.99</span>
                  <span class="product-old-price">$44.99</span>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-img-container">
                <img src="images/7.png" alt="Outdoor Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Outdoor Adventure</h4>
                <div>
                  <span class="product-price">$34.99</span>
                  <span class="product-old-price">$44.99</span>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-img-container">
                <img src="images/8.png" alt="Outdoor Toy" class="product-img">
              </div>
              <div class="product-info">
                <h4 class="product-name">Outdoor Adventure</h4>
                <div>
                  <span class="product-price">$34.99</span>
                  <span class="product-old-price">$44.99</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="shop-btn">Shop Now</button>
    </div>
  </section>
  <!-- ========== EMPTY CONTAINERS SECTION ========== -->
  <section class="design-section">
    <div class="container-fluid design-container">
      <div class="row g-0">
        <!-- Left Column (CL6) -->
        <div class="col-lg-6 left-content">
          <h2 class="section-heading">Design Viewer</h2>
          <p class="section-text">Experience our innovative design viewer that lets you visualize products in your space before making a decision.</p>
          
          <div class="points-row">
            <!-- Point Pair 1 -->
            <div class="point-pair">
              <!-- Point 1 -->
              <div class="point-item">
                <div class="point-number">1</div>
                <div class="point-content">
                  <h3>Upload</h3>
                  <p>Upload your room photo or choose from our template designs.</p>
                </div>
              </div>
              
              <!-- Point 2 -->
              <div class="point-item">
                <div class="point-number">2</div>
                <div class="point-content">
                  <h3>Customize</h3>
                  <p>Select products and customize colors, finishes to match your style.</p>
                </div>
              </div>
            </div>
            
            <!-- Point Pair 2 -->
            <div class="point-pair">
              <!-- Point 3 -->
              <div class="point-item">
                <div class="point-number">3</div>
                <div class="point-content">
                  <h3>Preview</h3>
                  <p>See customized products with realistic 3D rendering effects.</p>
                </div>
              </div>
              
              <!-- Point 4 -->
              <div class="point-item">
                <div class="point-number">4</div>
                <div class="point-content">
                  <h3>Compare</h3>
                  <p>Save different versions and compare them side by side.</p>
                </div>
              </div>
            </div>
            
            <!-- Point 5 (full width on last row) -->
            <div class="point-pair">
              <div class="point-item">
                <div class="point-number">5</div>
                <div class="point-content">
                  <h3>Order</h3>
                  <p>Proceed to checkout with your customized product specifications.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Right Column (CL6) - Video -->
        <div class="col-lg-6 video-column">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/example" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="feat-section">
  <div class="feat-container">
    <h2 class="section-heading">Home Owners and Builders Choose AGI</h2>
    <p class="section-subtitle">Discover why professionals and homeowners trust AGI for their projects</p>
    
    <div class="features-row">
      <!-- Feature Box 1 -->
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-question-circle"></i>
        </div>
        <h3 class="feature-title">Stand Online Quiz</h3>
        <p class="feature-text">Take our quick quiz to find the perfect products for your specific needs and preferences, tailored to your project requirements.</p>
      </div>
      
      <!-- Feature Box 2 -->
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-palette"></i>
        </div>
        <h3 class="feature-title">Custom Build Option</h3>
        <p class="feature-text">Create your dream doors and windows with our custom configuration tool, choosing from materials, finishes, and hardware options.</p>
      </div>
      
      <!-- Feature Box 3 -->
      <div class="feature-box">
        <div class="feature-icon">
          <i class="fas fa-truck"></i>
        </div>
        <h3 class="feature-title">Fast Delivery</h3>
        <p class="feature-text">Enjoy quick turnaround times without compromising quality. Our efficient production and logistics ensure timely delivery.</p>
      </div>
      
      <!-- Feature Box 4 -->
      <div class="feature-box">
  <div class="feature-icon">
    <i class="fas fa-headset"></i>
  </div>
  <h3 class="feature-title">Rare Support</h3>
  <p class="feature-text">Get dedicated support from our team of experts throughout your project, from initial consultation to final installation.</p>
</div>

    </div>
  </div>
</section>

<section class="slider-section">
  <div class="slider-container">
    <div class="slider-track" id="sliderTrack">
      <div class="slider-item">
        <img src="images/1.png" alt="Product 1" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/2.png" alt="Product 2" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/3.png" alt="Product 3" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/4.png" alt="Product 4" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/5.png" alt="Product 5" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/6.png" alt="Product 6" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/7.png" alt="Product 7" class="slider-img">
      </div>
      <div class="slider-item">
        <img src="images/8.png" alt="Product 8" class="slider-img">
      </div>
    </div>

    <div class="slider-nav">
      <button class="slider-btn" id="prevBtn">&#10094;</button>
      <button class="slider-btn" id="nextBtn">&#10095;</button>
    </div>
  </div>
</section>


<section class="review-section-custom">
  <div class="review-container-custom">
      <h2 class="section-heading-custom">What Our Clients Say</h2>
      
      <div class="slider-container-custom">
          <div class="slider-track-custom" id="reviewSliderTrack">
              <!-- Slide 1 -->
              <div class="slider-item-custom active-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "As an architect, I specify AGI products regularly. Their consistent quality, range of options, and technical support make them my go-to for premium fenestration."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">Robert Taylor</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Slide 2 -->
              <div class="slider-item-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "The customer service at AGI is exceptional. They helped me find the perfect solution for my historic home renovation while meeting all modern energy standards."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">Sarah Johnson</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Slide 3 -->
              <div class="slider-item-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "I've been using AGI windows in my commercial projects for years. Their durability and energy efficiency have saved my clients thousands in operating costs."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">Michael Chen</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Slide 4 -->
              <div class="slider-item-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "The installation team was professional and efficient. My new AGI windows have transformed both the look and comfort of my home."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">Emily Wilson</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Slide 5 -->
              <div class="slider-item-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/men/88.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "AGI's custom solutions allowed us to achieve the exact architectural vision we wanted while maintaining excellent thermal performance."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">David Rodriguez</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Slide 6 -->
              <div class="slider-item-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "After comparing several brands, AGI stood out for their quality craftsmanship and attention to detail. Worth every penny for our luxury home project."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">Jennifer Lee</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Slide 7 -->
              <div class="slider-item-custom">
                  <div class="review-card-custom">
                      <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User" class="user-image-custom">
                      <p class="review-text-custom">
                          "The energy savings from AGI's windows paid for themselves in just 3 years. Now I recommend them to all my friends and family."
                      </p>
                      <div class="review-meta-custom">
                          <div>
                              <p class="user-name-custom">Thomas Brown</p>
                          </div>
                          <div class="stars-custom">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="review-controls-custom">
          <button class="review-btn-custom" id="reviewPrevBtn"><i class="fas fa-chevron-left"></i></button>
          <button class="review-btn-custom" id="reviewNextBtn"><i class="fas fa-chevron-right"></i></button>
      </div>
  </div>
</section>
<section class="newsletter-section">
  <div class="newsletter-content">
    <h2 class="newsletter-heading">Subscribe to Our Newsletter</h2>
    <p class="newsletter-text">Stay updated with our latest products, offers, and design inspirations.</p>
    <form class="newsletter-form">
      <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
      <button type="submit" class="newsletter-button">Subscribe</button>
    </form>
  </div>
</section>
@include('layouts.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelector('.login-btn').addEventListener('click', function () {
      var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
      loginModal.show();
    });
  
    document.querySelector('.register-btn').addEventListener('click', function () {
      var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
      registerModal.show();
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const track = document.getElementById('sliderTrack');
      const items = document.querySelectorAll('.slider-item');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
  
      let currentIndex = 0;
      let visibleItems = 6;
      let itemWidth = items[0].offsetWidth;
  
      // Clone first few items for infinite effect
      for (let i = 0; i < visibleItems; i++) {
        const clone = items[i].cloneNode(true);
        track.appendChild(clone);
      }
  
      function updateSlider() {
        track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
      }
  
      nextBtn.addEventListener('click', function () {
        if (currentIndex < items.length) {
          currentIndex++;
          updateSlider();
        } else {
          currentIndex = 0;
          track.style.transition = 'none';
          track.style.transform = 'translateX(0)';
          setTimeout(() => {
            track.style.transition = 'transform 1s ease-in-out';
            currentIndex = 1;
            updateSlider();
          }, 10);
        }
      });
  
      prevBtn.addEventListener('click', function () {
        if (currentIndex > 0) {
          currentIndex--;
          updateSlider();
        } else {
          currentIndex = items.length;
          track.style.transition = 'none';
          track.style.transform = `translateX(-${items.length * itemWidth}px)`;
          setTimeout(() => {
            track.style.transition = 'transform 1s ease-in-out';
            currentIndex = items.length - 1;
            updateSlider();
          }, 10);
        }
      });
  
      // Auto-slide
      let autoSlide = setInterval(() => {
        nextBtn.click();
      }, 3000);
  
      // Pause on hover
      track.addEventListener('mouseenter', () => clearInterval(autoSlide));
      track.addEventListener('mouseleave', () => {
        autoSlide = setInterval(() => {
          nextBtn.click();
        }, 3000);
      });
  
      // Responsive item width update
      window.addEventListener('resize', () => {
        itemWidth = items[0].offsetWidth;
        updateSlider();
      });
    });
  </script>
     <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Review slider elements with unique IDs
          const reviewSliderTrack = document.getElementById('reviewSliderTrack');
          const reviewPrevBtn = document.getElementById('reviewPrevBtn');
          const reviewNextBtn = document.getElementById('reviewNextBtn');
          const reviewSliderItems = document.querySelectorAll('.slider-item-custom');
          
          let reviewCurrentIndex = 0;
          let reviewItemsPerSlide;
          
          function updateReviewItemsPerSlide() {
              if (window.innerWidth < 576) {
                  reviewItemsPerSlide = 1;
              } else if (window.innerWidth < 992) {
                  reviewItemsPerSlide = 2;
              } else {
                  reviewItemsPerSlide = 3;
              }
          }
          
          function updateReviewSlider() {
              updateReviewItemsPerSlide();
              const itemWidth = 100 / reviewItemsPerSlide;
              reviewSliderTrack.style.transform = `translateX(-${reviewCurrentIndex * itemWidth}%)`;
              
              // Update active classes
              reviewSliderItems.forEach((item, index) => {
                  item.classList.remove('active-custom');
                  if (index >= reviewCurrentIndex && index < reviewCurrentIndex + reviewItemsPerSlide) {
                      item.classList.add('active-custom');
                  }
              });
          }
          
          function reviewNextSlide() {
              updateReviewItemsPerSlide();
              if (reviewCurrentIndex < reviewSliderItems.length - reviewItemsPerSlide) {
                  reviewCurrentIndex++;
              } else {
                  reviewCurrentIndex = 0;
              }
              updateReviewSlider();
          }
          
          function reviewPrevSlide() {
              updateReviewItemsPerSlide();
              if (reviewCurrentIndex > 0) {
                  reviewCurrentIndex--;
              } else {
                  reviewCurrentIndex = reviewSliderItems.length - reviewItemsPerSlide;
              }
              updateReviewSlider();
          }
          
          reviewNextBtn.addEventListener('click', reviewNextSlide);
          reviewPrevBtn.addEventListener('click', reviewPrevSlide);
          
          window.addEventListener('resize', updateReviewSlider);
          
          // Initialize
          updateReviewSlider();
      });
  </script>
  
  
  @include('modals.login')
  @include('modals.register')

</body>
</html>

