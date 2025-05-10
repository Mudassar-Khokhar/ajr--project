<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - AGR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* ========== MAIN STYLES ========== */
    body {
      background-color: #161730;
      color: white;
      font-family: 'Arial', sans-serif;
      overflow-x: hidden;
    }
    
    /* ========== GOLDEN HEADER SECTION ========== */
    .header-section {
      background-color: #D4c780;
      width: 100%;
      padding: 80px 0;
      text-align: center;
    }
    
    .header-title {
      color: #161730;
      font-weight: 700;
      font-size: 3rem;
      margin: 0;
    }
    
    .container-80 {
        width: 80%;
  /* margin: 0 auto; This centers it */
  /* display: flex; */
  text-align: center;
  max-width: 1200px;
    }
    
    /* Image + Text Sections */
    .content-wrapper {
      display: flex;
      position: relative;
      /* min-height: 500px; */
      /* margin-bottom: 80px; */
    }
    
    .image-part {
      width: 60%;
      height: 100%;
      position: relative;
      overflow: hidden;
    }
    
    .image-part img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .text-part {
      width: 60%;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(22, 23, 48, 0.92);
      padding: 40px;
      z-index: 2;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    
    /* First Container - Image Left, Text Right */
    .image-left .image-part {
      left: 0;
    }
    
    .image-left .text-part {
      right: 0;
      margin-right: -10%;
    }
    
    /* Second Container - Text Left, Image Right */
    .text-left .text-part {
      /* left: 0; */
      margin-right: -10%;
    }
    
    .text-left .image-part {
      right: 0 !important;
    }
    
    .text-part h3 {
      color: #D4c780;
      font-size: 2rem;
      margin-bottom: 20px;
      font-weight: 600;
    }
    
    .text-part p {
      font-size: 1.1rem;
      line-height: 1.8;
    }    
    /* ========== TEAM SLIDER SECTION ========== */
    .team-section {
      background-color: #1a1d3a;
      padding: 80px 0;
    }
    
    .slider-container {
      position: relative;
      width: 100%;
      overflow: hidden;
    }
    
    .slider-track {
      display: flex;
      transition: transform 0.5s ease;
      padding: 40px 0;
      align-items: center;
    }
    
    .team-member-card {
      background: white;
      color: #161730;
      border-radius: 10px;
      width: 320px;
      margin: 0 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      flex: 0 0 auto;
      position: relative;
    }
    
    .team-member-card.left-side {
      transform: translateX(40%) scale(0.85);
      opacity: 0.7;
      z-index: 1;
    }
    
    .team-member-card.right-side {
      transform: translateX(-40%) scale(0.85);
      opacity: 0.7;
      z-index: 1;
    }
    
    .team-member-card.center-card {
      transform: scale(1);
      opacity: 1;
      z-index: 2;
      border: 3px solid #D4c780;
    }
    
    .member-header {
      display: flex;
      padding: 20px;
      border-bottom: 1px solid #eee;
    }
    
    .member-image {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
    }
    
    .member-info {
      flex: 1;
    }
    
    .member-name {
      font-weight: 700;
      font-size: 1.4rem;
      color: #161730;
      margin-bottom: 5px;
      text-align: right;
    }
    
    .team-member-card.center-card .member-name {
      color: #D4c780;
    }
    
    .member-position {
      font-weight: 600;
      color: #666;
      text-align: right;
      font-size: 0.9rem;
    }
    
    .member-bio {
      padding: 20px;
      font-size: 0.95rem;
      line-height: 1.6;
      color: #444;
    }
    
    /* Social Icons */
    .social-divider {
      border-top: 1px solid #eee;
      margin: 0 20px;
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      padding: 15px 0;
    }
    
    .social-link {
      display: inline-flex;
      width: 36px;
      height: 36px;
      background-color: #161730;
      color: #D4c780;
      border-radius: 50%;
      align-items: center;
      justify-content: center;
      margin: 0 5px;
      transition: all 0.3s;
    }
    
    .team-member-card.center-card .social-link {
      background-color: #D4c780;
      color: #161730;
    }
    
    .social-link:hover {
      background-color: #f0e68c;
      color: #161730;
      transform: translateY(-3px);
    }
    
    /* Slider Navigation */
    .slider-navigation {
      text-align: center;
      margin-top: 30px;
    }
    
    .slider-button {
      background-color: #D4c780;
      color: #161730;
      border: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 1.2rem;
      margin: 0 10px;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .slider-button:hover {
      background-color: #f0e68c;
      transform: scale(1.1);
    }
    
    /* ========== RESPONSIVE ADJUSTMENTS ========== */
    @media (max-width: 1200px) {
      .team-member-card {
        width: 280px;
      }
    }
    
    @media (max-width: 992px) {
      .image-text-section {
        flex-direction: column;
        min-height: auto;
      }
      
      .image-wrapper, 
      .text-overlay {
        width: 100%;
        position: static;
        transform: none;
        margin: 0 !important;
      }
      
      .text-overlay {
        margin-top: -50px !important;
        margin-left: 20px !important;
        margin-right: 20px !important;
        padding: 30px;
      }
    }
    
    @media (max-width: 768px) {
      .content-container {
        width: 90%;
      }
      
      .header-title {
        font-size: 2.5rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }
    
    @media (max-width: 576px) {
      .content-container {
        width: 95%;
      }
      
      .text-overlay {
        padding: 20px;
        margin-top: -30px !important;
      }
      
      .section-title {
        font-size: 1.6rem;
      }
      
      .section-description {
        font-size: 1rem;
      }
      
      .team-member-card {
        width: 200px;
      }
      
      .member-header {
        flex-direction: column;
        align-items: center;
      }
      
      .member-name, 
      .member-position {
        text-align: center;
      }
    }
  </style>
</head>
<body>

<!-- ========== HEADER SECTION ========== -->
<section class="header-section">
  <h1 class="header-title">About Us</h1>
</section>

<div class="container-80">
    <div class="content-wrapper image-left">
      <div class="image-part">
        <img src="images/1.png" alt="AGR Office">
      </div>
      <div class="text-part">
        <h3>Our Story</h3>
        <p>Founded in 2010, AGR began as a small team with big dreams to revolutionize the industry. We've grown to become a leader in our field through innovation and dedication. Our journey continues as we expand our services globally.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Container - Text Left, Image Right (20% overlap) -->
  <div class="container-80">
    <div class="content-wrapper text-left">
      <div class="text-part">
        <h3>Our Vision</h3>
        <p>To be the most trusted and innovative partner in our industry, transforming businesses through cutting-edge solutions and unparalleled service. We envision a future where our expertise helps clients achieve sustainable growth.</p>
      </div>
      <div class="image-part">
        <img src="images/2.png" alt="AGR Team">
      </div>
    </div>
  </div> 
  
  
<!-- ========== TEAM SLIDER SECTION ========== -->
<section class="team-section">
  <div class="content-container text-center">
    <h2 class="mb-5">Meet Our Leadership</h2>
    
    <div class="slider-container">
      <div class="slider-track" id="slider">
        <!-- Team Member 1 -->
        <div class="team-member-card left-side">
          <div class="member-header">
            <img src="images/2.png" alt="Executive" class="member-image">
            <div class="member-info">
              <h4 class="member-name">Sarah Johnson</h4>
              <p class="member-position">CEO</p>
            </div>
          </div>
          <div class="member-bio">
            <p>Leading AGR with vision and determination since 2015, driving company growth and innovation.</p>
          </div>
          <div class="social-divider"></div>
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="team-member-card left-side">
          <div class="member-header">
            <img src="https://source.unsplash.com/random/300x300?executive2" alt="Executive" class="member-image">
            <div class="member-info">
              <h4 class="member-name">Michael Chen</h4>
              <p class="member-position">CTO</p>
            </div>
          </div>
          <div class="member-bio">
            <p>Technology innovator with 15+ years experience building cutting-edge solutions.</p>
          </div>
          <div class="social-divider"></div>
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
          </div>
        </div>
        
        <!-- Team Member 3 (Center) -->
        <div class="team-member-card center-card">
          <div class="member-header">
            <img src="https://source.unsplash.com/random/300x300?executive3" alt="Executive" class="member-image">
            <div class="member-info">
              <h4 class="member-name">David Wilson</h4>
              <p class="member-position">CFO</p>
            </div>
          </div>
          <div class="member-bio">
            <p>Financial strategist ensuring AGR's sustainable growth across all markets.</p>
          </div>
          <div class="social-divider"></div>
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        
        <!-- Team Member 4 -->
        <div class="team-member-card right-side">
          <div class="member-header">
            <img src="https://source.unsplash.com/random/300x300?executive4" alt="Executive" class="member-image">
            <div class="member-info">
              <h4 class="member-name">Emily Rodriguez</h4>
              <p class="member-position">CMO</p>
            </div>
          </div>
          <div class="member-bio">
            <p>Marketing expert who has elevated AGR's brand presence globally.</p>
          </div>
          <div class="social-divider"></div>
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        
        <!-- Team Member 5 -->
        <div class="team-member-card right-side">
          <div class="member-header">
            <img src="https://source.unsplash.com/random/300x300?executive5" alt="Executive" class="member-image">
            <div class="member-info">
              <h4 class="member-name">James Peterson</h4>
              <p class="member-position">VP Operations</p>
            </div>
          </div>
          <div class="member-bio">
            <p>Operations leader ensuring seamless delivery of all AGR services.</p>
          </div>
          <div class="social-divider"></div>
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="slider-navigation">
      <button class="slider-button" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
      <button class="slider-button" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ========== TEAM SLIDER FUNCTIONALITY ==========
  const sliderTrack = document.getElementById('slider');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const cards = Array.from(document.querySelectorAll('.team-member-card'));
  
  // Initialize cards in circular array
  let cardArray = [...cards];
  
  function updateSlider() {
    // Position cards based on their index
    cardArray.forEach((card, index) => {
      card.classList.remove('left-side', 'center-card', 'right-side');
      
      if (index === 2) {
        card.classList.add('center-card');
      } else if (index < 2) {
        card.classList.add('left-side');
      } else {
        card.classList.add('right-side');
      }
    });
    
    // Rebuild the DOM order
    sliderTrack.innerHTML = '';
    cardArray.forEach(card => {
      sliderTrack.appendChild(card);
    });
  }
  
  function rotateLeft() {
    // Move first element to end
    cardArray.push(cardArray.shift());
    updateSlider();
  }
  
  function rotateRight() {
    // Move last element to beginning
    cardArray.unshift(cardArray.pop());
    updateSlider();
  }
  
  // Event listeners for navigation
  prevBtn.addEventListener('click', rotateRight);
  nextBtn.addEventListener('click', rotateLeft);
  
  // Initialize slider
  updateSlider();
  
  // Make slider responsive to window resize
  window.addEventListener('resize', updateSlider);
</script>
@include('layouts.footer')
</body>
</html>