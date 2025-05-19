<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - AGR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* ========== GLOBAL STYLES ========== */
    body {
      background-color: #161730;
      color: white;
      font-family: 'Arial', sans-serif;
      overflow-x: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .main-content {
      width: 100% !important;
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: #161730;
    }
    
    /* ========== HEADER SECTION ========== */
    .about-header {
      background-color: #D4c780;
      width: 100%;
      padding: 80px 0;
      text-align: center;
    }
    
    .about-header h1 {
      color: #161730;
      font-weight: 700;
      font-size: 3rem;
      margin: 0;
    }
    
    /* ========== STORY SECTION ========== */
    .story-section {
      padding: 80px 0 40px;
      position: relative;
      width: 80% !important;
    }
    
    .story-content {
      display: flex;
      align-items: center;
      min-height: 400px;
      position: relative;
    }
    
    .story-image-container {
      width: 60%;
      position: absolute;
      left: 0;
      height: 100%;
      overflow: hidden;
      border-radius: 8px;
    }
    
    .story-image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .story-text-container {
      width: 70%;
      margin-left: 50%;
      padding-left: 40px;
      z-index: 2;
    }
    
    .story-text-box {
      background-color: rgba(22, 23, 48, 0.92);
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    
    /* ========== VISION SECTION ========== */
    .vision-section {
      padding: 40px 0 80px;
      position: relative;
      width: 80% !important;
    }
    
    .vision-content {
      display: flex;
      align-items: center;
      min-height: 400px;
      position: relative;
    }
    
    .vision-text-container {
      width: 50%;
      padding-right: 40px;
      z-index: 2;
    }
    
    .vision-image-container {
      width: 60%;
      position: absolute;
      right: 0;
      height: 100%;
      overflow: hidden;
      border-radius: 8px;
    }
    
    .vision-image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    /* Shared text box styles */
    .about-text-box {
      background-color: rgba(22, 23, 48, 0.92);
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    
    .about-text-box h3 {
      color: #D4c780;
      font-size: 2rem;
      margin-bottom: 20px;
      font-weight: 600;
    }
    
    .about-text-box p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: white;
    }
    
    /* ========== TEAM SECTION ========== */
    .team-slider-section {
      /* background-color: #1a1d3a; */
      padding: 80px 0;
      width: 80%;
      overflow: hidden;
    }
    
    .slider-title {
      text-align: center;
      margin-bottom: 50px;
      color: white;
    }
    
    .slider-container {
      position: relative;
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 100px;
    }
    
    .slider-track {
      display: flex;
      align-items: center;
      padding: 40px 0;
      transition: transform 0.5s ease;
    }
    
    .team-card {
      background: #161730;
      color: white;
      border-radius: 10px;
      width: 18%;
      min-width: 18%;
      margin: 0 1%;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      transition: all 0.3s ease;
      flex: 0 0 auto;
      position: relative;
      height: 300px;
      overflow: hidden;
    }
    
    /* Left partial visible cards (2 cards) */
    .team-card.slider-left {
      transform: translateX(-40%);
      opacity: 0.8;
      z-index: 1;
    }
    
    /* Right partial visible cards (2 cards) */
    .team-card.slider-right {
      transform: translateX(40%);
      opacity: 0.8;
      z-index: 1;
    }
    
    /* Center highlighted card */
    .team-card.slider-center {
      transform: scale(1.05);
      opacity: 1;
      z-index: 2;
      border: 3px solid #D4c780;
      box-shadow: 0 10px 25px rgba(212, 199, 128, 0.3);
      height: 320px;
      margin-top: -10px;
    }
    
    .team-header {
      display: flex;
      padding: 20px;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
    .team-img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
      border: 2px solid rgba(212, 199, 128, 0.5);
    }
    
    .slider-center .team-img {
      border-color: #D4c780;
    }
    
    .team-info {
      flex: 1;
    }
    
    .team-name {
      font-weight: 700;
      font-size: 1.2rem;
      color: white;
      margin-bottom: 5px;
    }
    
    .slider-center .team-name {
      color: #D4c780;
    }
    
    .team-position {
      font-weight: 600;
      color: #D4c780;
      font-size: 0.9rem;
    }
    
    .team-bio {
      padding: 15px 20px;
      font-size: 0.9rem;
      line-height: 1.5;
      color: #aaa;
      height: 80px;
      overflow: hidden;
    }
    
    .team-divider {
      border-top: 1px solid rgba(255,255,255,0.1);
      margin: 0 20px;
    }
    
    .team-links {
      display: flex;
      justify-content: center;
      padding: 15px 0;
    }
    
    .team-link {
      display: inline-flex;
      width: 30px;
      height: 30px;
      background-color: rgba(212, 199, 128, 0.2);
      color: #D4c780;
      border-radius: 50%;
      align-items: center;
      justify-content: center;
      margin: 0 5px;
      transition: all 0.3s;
      font-size: 0.8rem;
    }
    
    .slider-center .team-link {
      background-color: #D4c780;
      color: #161730;
    }
    
    .team-link:hover {
      background-color: #f0e68c;
      color: #161730;
      transform: translateY(-3px);
    }
    
    .slider-nav {
      text-align: center;
      margin-top: 30px;
    }
    
    .slider-btn {
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
    
    .slider-btn:hover {
      background-color: #f0e68c;
      transform: scale(1.1);
    }
    
    @media (max-width: 1200px) {
      .slider-container {
        padding: 0 80px;
      }
      
      .team-card {
        width: 22%;
        min-width: 22%;
      }
    }
    
    @media (max-width: 992px) {
      .slider-container {
        padding: 0 60px;
      }
      
      .team-card {
        width: 28%;
        min-width: 28%;
      }
      
      .team-card.slider-left,
      .team-card.slider-right {
        transform: translateX(-30%);
      }
      
      .team-card.slider-right {
        transform: translateX(30%);
      }
    }
    
    @media (max-width: 768px) {
      .slider-container {
        padding: 0 40px;
      }
      
      .team-card {
        width: 40%;
        min-width: 40%;
      }
      
      .team-card.slider-left,
      .team-card.slider-right {
        display: none;
      }
    }
    
    @media (max-width: 576px) {
      .slider-container {
        padding: 0 20px;
      }
      
      .team-card {
        width: 80%;
        min-width: 80%;
      }
      
      .team-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      
      .team-info {
        text-align: center;
        margin-top: 15px;
      }
    }
    /* ========== RESPONSIVE ADJUSTMENTS ========== */
    @media (max-width: 1600px) {
      .main-content {
        width: 40%;
      }
    }
    
    @media (max-width: 1200px) {
      .main-content {
        width: 50%;
      }
      
      .team-card {
        width: 280px;
      }
    }
    
    @media (max-width: 992px) {
      .main-content {
        width: 70%;
      }
      
      .story-content,
      .vision-content {
        flex-direction: column;
        min-height: auto;
      }
      
      .story-image-container,
      .vision-image-container,
      .story-text-container,
      .vision-text-container {
        width: 100%;
        position: static;
        padding: 0;
        margin: 0;
      }
      
      .story-text-container,
      .vision-text-container {
        margin-top: 30px;
      }
      
      .story-image-container,
      .vision-image-container {
        height: 300px;
      }
      
      .about-text-box {
        margin: 0;
      }
    }
    
    @media (max-width: 768px) {
      .main-content {
        width: 85%;
      }
      
      .about-header h1 {
        font-size: 2.5rem;
      }
      
      .about-text-box h3 {
        font-size: 1.8rem;
      }
      
      
    }
    
    @media (max-width: 576px) {
      .main-content {
        width: 95%;
      }
      
      .about-header {
        padding: 60px 0;
      }
      
      .about-header h1 {
        font-size: 2rem;
      }
      
      .about-text-box {
        padding: 25px;
      }
      
      .about-text-box h3 {
        font-size: 1.6rem;
      }
      
      .about-text-box p {
        font-size: 1rem;
      }
      
      
    }
  </style>
</head>
<body>
  @include('layouts.navbar')

<!-- Main Content Container -->
<div class="main-content">

  <!-- ========== HEADER SECTION ========== -->
  <section class="about-header">
    <h1>About Us</h1>
  </section>

  <!-- ========== STORY SECTION ========== -->
  <section class="story-section">
    <div class="story-content">
      <div class="story-image-container">
        <img src="images/13.jpg" alt="AGR Office" class="img-fluid">
      </div>
      <div class="story-text-container">
        <div class="about-text-box story-text-box">
          <h3>Our Story</h3>
          <p>Founded in 2010, AGR began as a small team with big dreams to revolutionize the industry. We've grown to become a leader in our field through innovation and dedication. Our journey continues as we expand our services globally.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== VISION SECTION ========== -->
  <section class="vision-section">
    <div class="vision-content">
      <div class="vision-text-container">
        <div class="about-text-box">
          <h3>Our Vision</h3>
          <p>To be the most trusted and innovative partner in our industry, transforming businesses through cutting-edge solutions and unparalleled service. We envision a future where our expertise helps clients achieve sustainable growth.</p>
        </div>
      </div>
      <div class="vision-image-container">
        <img src="images/14.jpg" alt="AGR Team" class="img-fluid">
      </div>
    </div>
  </section>

  <section class="team-slider-section">
    <div class="slider-title">
      <h2>Meet Our Leadership</h2>
    </div>
  
    <div class="slider-container">
      <div class="slider-track" id="sliderTrack">
        <!-- Team Member 1 -->
        <div class="team-card slider-left">
          <div class="team-header">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member" class="team-img">
            <div class="team-info">
              <h4 class="team-name">John Smith</h4>
              <p class="team-position">CEO</p>
            </div>
          </div>
          <div class="team-bio">
            <p>Leading with vision and innovation for 10+ years.</p>
          </div>
          <div class="team-divider"></div>
          <div class="team-links">
            <a href="#" class="team-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="team-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="team-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="team-link"><i class="fas fa-globe"></i></a>
          </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="team-card slider-left">
          <div class="team-header">
            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Team Member" class="team-img">
            <div class="team-info">
              <h4 class="team-name">Sarah Johnson</h4>
              <p class="team-position">CTO</p>
            </div>
          </div>
          <div class="team-bio">
            <p>Technology expert with 15 years experience.</p>
          </div>
          <div class="team-divider"></div>
          <div class="team-links">
            <a href="#" class="team-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="team-link"><i class="fab fa-github"></i></a>
            <a href="#" class="team-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="team-link"><i class="fas fa-globe"></i></a>
          </div>
        </div>
        
        <!-- Team Member 3 -->
        <div class="team-card slider-center">
          <div class="team-header">
            <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Team Member" class="team-img">
            <div class="team-info">
              <h4 class="team-name">Michael Chen</h4>
              <p class="team-position">CFO</p>
            </div>
          </div>
          <div class="team-bio">
            <p>Financial strategist ensuring sustainable growth.</p>
          </div>
          <div class="team-divider"></div>
          <div class="team-links">
            <a href="#" class="team-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="team-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="team-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="team-link"><i class="fas fa-globe"></i></a>
          </div>
        </div>
        
        <!-- Team Member 4 -->
        <div class="team-card slider-right">
          <div class="team-header">
            <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Team Member" class="team-img">
            <div class="team-info">
              <h4 class="team-name">Emily Rodriguez</h4>
              <p class="team-position">CMO</p>
            </div>
          </div>
          <div class="team-bio">
            <p>Marketing expert elevating brand presence.</p>
          </div>
          <div class="team-divider"></div>
          <div class="team-links">
            <a href="#" class="team-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="team-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="team-link"><i class="fab fa-pinterest"></i></a>
            <a href="#" class="team-link"><i class="fas fa-globe"></i></a>
          </div>
        </div>
        
        <!-- Team Member 5 -->
        <div class="team-card slider-right">
          <div class="team-header">
            <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Team Member" class="team-img">
            <div class="team-info">
              <h4 class="team-name">David Wilson</h4>
              <p class="team-position">VP Operations</p>
            </div>
          </div>
          <div class="team-bio">
            <p>Operations leader ensuring seamless delivery.</p>
          </div>
          <div class="team-divider"></div>
          <div class="team-links">
            <a href="#" class="team-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="team-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="team-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="team-link"><i class="fas fa-globe"></i></a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="slider-nav">
      <button class="slider-btn" id="sliderPrevBtn"><i class="fas fa-chevron-left"></i></button>
      <button class="slider-btn" id="sliderNextBtn"><i class="fas fa-chevron-right"></i></button>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Enhanced Slider functionality with smooth 360-degree rotation
    const sliderTrack = document.getElementById('sliderTrack');
    const sliderPrevBtn = document.getElementById('sliderPrevBtn');
    const sliderNextBtn = document.getElementById('sliderNextBtn');
    const teamCards = Array.from(document.querySelectorAll('.team-card'));
    
    // Original card data for reference
    const cardData = teamCards.map(card => ({
      name: card.querySelector('.team-name').textContent,
      position: card.querySelector('.team-position').textContent,
      bio: card.querySelector('.team-bio p').textContent,
      imgSrc: card.querySelector('.team-img').src,
      links: Array.from(card.querySelectorAll('.team-link')).map(link => ({
        icon: link.querySelector('i').className,
        href: link.href
      }))
    }));
  
    // Initialize with first card centered
    let currentIndex = 2; // Index of center card (0-4)
    
    function updateSlider() {
      teamCards.forEach((card, index) => {
        // Calculate which card data to show (circular logic)
        const dataIndex = (currentIndex + index - 2 + cardData.length) % cardData.length;
        const data = cardData[dataIndex];
        
        // Update card content without innerHTML
        card.querySelector('.team-name').textContent = data.name;
        card.querySelector('.team-position').textContent = data.position;
        card.querySelector('.team-bio p').textContent = data.bio;
        card.querySelector('.team-img').src = data.imgSrc;
        
        // Update social links
        const links = card.querySelectorAll('.team-link');
        data.links.forEach((linkData, i) => {
          if (links[i]) {
            links[i].href = linkData.href;
            links[i].innerHTML = `<i class="${linkData.icon}"></i>`;
          }
        });
  
        // Update position classes (fixed positions)
        card.classList.remove('slider-left', 'slider-center', 'slider-right');
        if (index < 2) {
          card.classList.add('slider-left');
        } else if (index === 2) {
          card.classList.add('slider-center');
        } else {
          card.classList.add('slider-right');
        }
      });
    }
  
    function slide(direction) {
      currentIndex = (currentIndex + direction + cardData.length) % cardData.length;
      updateSlider();
      
      // Smooth transition effect
      sliderTrack.style.transition = 'transform 0.5s ease';
      setTimeout(() => {
        sliderTrack.style.transition = '';
      }, 500);
    }
  
    // Event listeners
    sliderPrevBtn.addEventListener('click', () => slide(-1));
    sliderNextBtn.addEventListener('click', () => slide(1));
    
    // Initialize slider
    updateSlider();
  
    // Touch support
    let touchStartX = 0;
    sliderTrack.addEventListener('touchstart', e => {
      touchStartX = e.touches[0].clientX;
      sliderTrack.style.transition = 'none'; // Disable transition during swipe
    });
    
    sliderTrack.addEventListener('touchend', e => {
      const touchEndX = e.changedTouches[0].clientX;
      const diff = touchStartX - touchEndX;
      if (Math.abs(diff) > 50) {
        slide(diff > 0 ? 1 : -1);
      }
    });
   
  </script>
  @include('layouts.footer')
  </body>
  </html>