<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories - ATR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    :root {
      --atr-dark-bg: #161730;
      --atr-light-bg: #1a1d3a;
      --atr-gold: #D4AF37;
      --atr-gold-light: #f0e68c;
      --atr-gold-dark: #b8860b;
      --atr-product-bg: #f8f9fa;
      --hero-dark-blue: #0a0e2e;
      --hero-light-blue: #1a2a4a;
    }

    body {
      background-color: #161730 !important;
      color: white;
      margin: 0;
      padding: 0;
    }

    /* New Hero Section Styles */
    .ajr-hero-section {
      padding: 60px 0;
      margin-bottom: 50px;
      background-color: #161730 !important;
    }
    
    .ajr-hero-container {
      max-width: 1200px;
      margin: 0 auto;
      border-radius: 5px;
      overflow: hidden;
      background-color: #161730 !important;
    }
    
    .ajr-hero-row {
      display: flex;
      margin-left: 0;
      margin-right: 0;
    }
    
    .ajr-hero-content-col {
      background-color: #1a1d3a;
      padding: 60px;
      padding-left: 50px !important;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .ajr-hero-image-col {
      background-color: #212349;
      padding: 40px 0 40px 40px;

      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    
    .ajr-hero-tag {
      color: #D4c780;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 15px;
    }
    
    .ajr-hero-heading {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: white;
    }
    
    .ajr-hero-text {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 30px;
      color: #a0a0a0;
    }
    
    .ajr-hero-btn {
      background-color: #D4c780;
      color: black;
      border: none;
      padding: 12px 30px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 4px;
      cursor: pointer;
      transition: all 0.3s;
      align-self: flex-start;
    }
    
    .ajr-hero-btn:hover {
      background-color: #c5b56e;
      transform: translateY(-2px);
    }
    
    .ajr-hero-image-box {
      width: 100%;
      max-width: 350px;
      height: 450px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      position: relative;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .ajr-hero-image-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 15px;
      background: linear-gradient(90deg, #D4c780, #f0e68c, #D4c780);
    }
    
    .ajr-hero-image-box::after {
      content: 'ATR PREMIUM COLLECTION';
      position: absolute;
      top: 30px;
      left: 0;
      right: 0;
      text-align: center;
      color: var(--hero-dark-blue);
      font-weight: bold;
      font-size: 1.1rem;
    }
    
    .ajr-hero-image-container {
      width: 100%;
      height: 100%;
      padding: 70px 30px 30px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .ajr-hero-image-container img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }
    
    /* Existing styles */
    .category-section {
      background-color: #161730;
      width: 100% !important;
      height: 100% !important;
    }

    .ajr-container {
      max-width: 1200px;
      margin: 0 auto;
      background-color: #161730;
    }

    .ajr-filter-nav {
      background-color: #212349;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 40px;
      position: relative;
      border: 1px solid #D4c780;
      overflow: hidden;
    }

    .ajr-filter-links {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
      padding: 10px 0;
    }

    .ajr-filter-links::-webkit-scrollbar {
      display: none;
    }

    .ajr-filter-link {
      padding: 8px 20px;
      margin: 0 10px;
      color: white;
      text-decoration: none;
      font-weight: 500;
      white-space: nowrap;
      border-radius: 4px;
      transition: all 0.3s;
      flex: 0 0 auto;
      border: 1px solid transparent;
    }

    .ajr-filter-link:hover, .ajr-filter-link.active {
      background-color: #D4c780;
      color: black;
    }

    .ajr-nav-control {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background-color: var(--atr-gold);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 2;
      border: none;
      color: var(--atr-dark-bg);
      font-weight: bold;
    }

    .ajr-nav-control:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .ajr-nav-prev {
      left: 10px;
    }

    .ajr-nav-next {
      right: 10px;
    }

    .ajr-products-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .ajr-section-title {
      font-size: 1.8rem;
      font-weight: 700;
      color: white;
    }

    .ajr-sort-dropdown {
      position: relative;
    }

    .ajr-sort-btn {
      background-color: var(--atr-light-bg);
      border: 1px solid var(--atr-gold);
      padding: 8px 15px;
      border-radius: 4px;
      cursor: pointer;
      display: flex;
      align-items: center;
      color: white;
    }

    .ajr-sort-btn i {
      margin-left: 10px;
      color: var(--atr-gold);
    }

    .ajr-sort-options {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: var(--atr-light-bg);
      border: 1px solid var(--atr-gold);
      border-radius: 4px;
      padding: 10px 0;
      min-width: 180px;
      display: none;
      z-index: 10;
    }

    .ajr-sort-options.show {
      display: block;
    }

    .ajr-sort-option {
      padding: 8px 15px;
      cursor: pointer;
      color: white;
    }

    .ajr-sort-option:hover {
      background-color: rgba(212, 175, 55, 0.2);
    }

    .ajr-products-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      padding-bottom: 5rem;
    }

    .ajr-product-card {
      background: var(--atr-dark-bg);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .ajr-product-image {
      height: 250px;
      background-color: var(--atr-light-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      border-radius: 10px;
    }

    .ajr-product-image img {
      max-width: 70%;
      max-height: 70%;
      object-fit: contain;
    }

    .ajr-product-info {
      padding: 20px;
      text-align: center;
    }

    .ajr-product-title {
      color: white;
      margin-bottom: 10px;
      font-size: 1.1rem;
      font-weight: 600;
    }

    .ajr-product-price {
      font-size: 1.3rem;
      font-weight: 700;
      color: #D4c780;
    }

    .ajr-product-original-price {
      font-size: 1rem;
      color: #6c757d;
      text-decoration: line-through;
      margin-left: 10px;
    }

    @media (max-width: 1200px) {
      .ajr-products-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 992px) {
      .ajr-hero-row {
        flex-direction: column;
      }
      
      .ajr-hero-content-col, 
      .ajr-hero-image-col {
        width: 100%;
        padding: 40px;
      }
      
      .ajr-hero-image-box {
        max-width: 300px;
        height: 400px;
        margin: 0 auto;
      }
      
      .ajr-hero-btn {
        align-self: center;
      }
      
      .ajr-products-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .ajr-hero-heading {
        font-size: 2rem;
      }
      
      .ajr-section-title {
        font-size: 1.5rem;
      }
      
      .ajr-filter-link {
        padding: 8px 15px;
        margin: 0 5px;
        font-size: 0.9rem;
      }

      .ajr-nav-control {
        width: 35px;
        height: 35px;
      }
    }

    @media (max-width: 576px) {
      .ajr-products-grid {
        grid-template-columns: 1fr;
      }
      
      .ajr-products-header {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .ajr-sort-dropdown {
        margin-top: 15px;
        width: 100%;
      }
      
      .ajr-sort-btn {
        width: 100%;
        justify-content: space-between;
      }
      
      .ajr-sort-options {
        width: 100%;
      }
      
      .ajr-hero-tag {
        font-size: 0.9rem;
      }
      
      .ajr-hero-heading {
        font-size: 1.8rem;
      }
      
      .ajr-hero-text {
        font-size: 1rem;
      }

      .ajr-nav-control {
        width: 30px;
        height: 30px;
      }
      
      .ajr-hero-content-col,
      .ajr-hero-image-col {
        padding: 30px 20px;
      }
      
      .ajr-hero-image-box {
        height: 350px;
      }
    }
  </style>
</head>
<body>
  @include('layouts.navbar')
  <section class="category-section">
    <!-- New Hero Section -->
    <section class="ajr-hero-section">
      <div class="ajr-hero-container">
        <div class="ajr-hero-row">
          <div class="col-md-7 ajr-hero-content-col">
            <p class="ajr-hero-tag">Premium Collection</p>
            <h1 class="ajr-hero-heading">ATR Exclusive Products</h1>
            <p class="ajr-hero-text">Discover our premium collection of high-quality products designed to meet your needs with exceptional craftsmanship and innovative design. Each item is carefully curated for excellence.</p>
            <button class="ajr-hero-btn">Explore Collection</button>
          </div>
          <div class="col-md-5 ajr-hero-image-col">
            <div class="ajr-hero-image-box">
              <div class="ajr-hero-image-container">
                <img src="https://via.placeholder.com/300x400?text=ATR+Premium" alt="ATR Premium Product">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="ajr-container">
      <div class="ajr-filter-nav">
        <button class="ajr-nav-control ajr-nav-prev" id="ajrNavPrev" disabled>
          <i class="fas fa-chevron-left"></i>
        </button>
        <div class="ajr-filter-links" id="ajrFilterLinks">
          <a href="#" class="ajr-filter-link active" data-category="all">All Products</a>
          <a href="#" class="ajr-filter-link" data-category="category1">Category 1</a>
          <a href="#" class="ajr-filter-link" data-category="category2">Category 2</a>
          <a href="#" class="ajr-filter-link" data-category="category3">Category 3</a>
          <a href="#" class="ajr-filter-link" data-category="category4">Category 4</a>
          <a href="#" class="ajr-filter-link" data-category="category5">Category 5</a>
          <a href="#" class="ajr-filter-link" data-category="category6">Category 6</a>
          <a href="#" class="ajr-filter-link" data-category="category7">Category 7</a>
          <a href="#" class="ajr-filter-link" data-category="category8">Category 8</a>
        </div>
        <button class="ajr-nav-control ajr-nav-next" id="ajrNavNext">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      <section class="ajr-products-section">
        <div class="ajr-products-header">
          <h2 class="ajr-section-title">Featured Products</h2>
          <div class="ajr-sort-dropdown">
            <button class="ajr-sort-btn" id="ajrSortBtn">
              Price: High to Low <i class="fas fa-chevron-down"></i>
            </button>
            <div class="ajr-sort-options" id="ajrSortOptions">
              <div class="ajr-sort-option" data-sort="price-desc">Price: High to Low</div>
              <div class="ajr-sort-option" data-sort="price-asc">Price: Low to High</div>
              <div class="ajr-sort-option" data-sort="newest">Newest First</div>
              <div class="ajr-sort-option" data-sort="rating">Best Rated</div>
              <div class="ajr-sort-option" data-sort="popular">Most Popular</div>
            </div>
          </div>
        </div>

        <div class="ajr-products-grid" id="ajrProductsGrid">
          <div class="ajr-product-card" data-category="category1" data-price="29.99" data-date="2023-01-15" data-rating="4.5" data-popular="150">
            <div class="ajr-product-image">
              <img src="images/1.png" alt="Fun Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Super Fun Toy</h3>
              <div>
                <span class="ajr-product-price">$29.99</span>
                <span class="ajr-product-original-price">$39.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category2" data-price="49.99" data-date="2023-02-20" data-rating="4.2" data-popular="120">
            <div class="ajr-product-image">
              <img src="images/2.png" alt="Creative Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Creative Builder</h3>
              <div>
                <span class="ajr-product-price">$49.99</span>
                <span class="ajr-product-original-price">$59.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category3" data-price="39.99" data-date="2023-03-10" data-rating="4.7" data-popular="180">
            <div class="ajr-product-image">
              <img src="images/3.png" alt="Educational Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Learning Fun</h3>
              <div>
                <span class="ajr-product-price">$39.99</span>
                <span class="ajr-product-original-price">$49.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category4" data-price="34.99" data-date="2023-01-05" data-rating="4.0" data-popular="90">
            <div class="ajr-product-image">
              <img src="images/4.png" alt="Outdoor Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Outdoor Adventure</h3>
              <div>
                <span class="ajr-product-price">$34.99</span>
                <span class="ajr-product-original-price">$44.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category5" data-price="59.99" data-date="2023-04-12" data-rating="4.8" data-popular="200">
            <div class="ajr-product-image">
              <img src="images/5.png" alt="Electronic Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Electronic Wonder</h3>
              <div>
                <span class="ajr-product-price">$59.99</span>
                <span class="ajr-product-original-price">$69.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category6" data-price="24.99" data-date="2023-02-28" data-rating="3.9" data-popular="80">
            <div class="ajr-product-image">
              <img src="images/6.png" alt="Puzzle Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Brain Teaser</h3>
              <div>
                <span class="ajr-product-price">$24.99</span>
                <span class="ajr-product-original-price">$34.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category7" data-price="44.99" data-date="2023-03-22" data-rating="4.3" data-popular="110">
            <div class="ajr-product-image">
              <img src="images/7.png" alt="Art Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Artistic Creation</h3>
              <div>
                <span class="ajr-product-price">$44.99</span>
                <span class="ajr-product-original-price">$54.99</span>
              </div>
            </div>
          </div>

          <div class="ajr-product-card" data-category="category8" data-price="19.99" data-date="2023-01-30" data-rating="3.7" data-popular="70">
            <div class="ajr-product-image">
              <img src="images/8.png" alt="Simple Toy">
            </div>
            <div class="ajr-product-info">
              <h3 class="ajr-product-title">Classic Fun</h3>
              <div>
                <span class="ajr-product-price">$19.99</span>
                <span class="ajr-product-original-price">$29.99</span>
              </div>
            </div>
          </div>
        </div>

        <div class="ajr-load-more">
          <button class="ajr-load-btn" id="ajrLoadMore">Load More Products</button>
        </div>
      </section>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const ajrFilterLinks = document.getElementById('ajrFilterLinks');
      const ajrPrevBtn = document.getElementById('ajrNavPrev');
      const ajrNextBtn = document.getElementById('ajrNavNext');
      const ajrProductsGrid = document.getElementById('ajrProductsGrid');
      const ajrLoadMoreBtn = document.getElementById('ajrLoadMore');
      const scrollAmount = 200;
      
      let currentCategory = 'all';
      let currentSort = 'price-desc';
      let visibleProducts = 8;
      const allProducts = Array.from(document.querySelectorAll('.ajr-product-card'));

      filterProducts(currentCategory);
      updateAjrNavButtons();

      function updateAjrNavButtons() {
        ajrPrevBtn.disabled = ajrFilterLinks.scrollLeft <= 10;
        ajrNextBtn.disabled = ajrFilterLinks.scrollLeft >= 
          (ajrFilterLinks.scrollWidth - ajrFilterLinks.clientWidth - 10);
      }

      ajrNextBtn.addEventListener('click', () => {
        ajrFilterLinks.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        setTimeout(updateAjrNavButtons, 300);
      });

      ajrPrevBtn.addEventListener('click', () => {
        ajrFilterLinks.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        setTimeout(updateAjrNavButtons, 300);
      });

      ajrFilterLinks.addEventListener('scroll', updateAjrNavButtons);

      const ajrSortBtn = document.getElementById('ajrSortBtn');
      const ajrSortOptions = document.getElementById('ajrSortOptions');

      ajrSortBtn.addEventListener('click', () => {
        ajrSortOptions.classList.toggle('show');
      });

      window.addEventListener('click', (e) => {
        if (!e.target.matches('#ajrSortBtn') && !e.target.closest('.ajr-sort-dropdown')) {
          ajrSortOptions.classList.remove('show');
        }
      });

      document.querySelectorAll('.ajr-filter-link').forEach(link => {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          document.querySelectorAll('.ajr-filter-link').forEach(l => {
            l.classList.remove('active');
          });
          link.classList.add('active');
          
          currentCategory = link.getAttribute('data-category');
          filterProducts(currentCategory);
        });
      });

      document.querySelectorAll('.ajr-sort-option').forEach(option => {
        option.addEventListener('click', () => {
          currentSort = option.getAttribute('data-sort');
          ajrSortBtn.innerHTML = option.textContent + ' <i class="fas fa-chevron-down"></i>';
          ajrSortOptions.classList.remove('show');
          
          sortProducts(currentSort);
        });
      });

      ajrLoadMoreBtn.addEventListener('click', () => {
        visibleProducts += 4;
        filterProducts(currentCategory);
      });

      function filterProducts(category) {
        let filteredProducts = allProducts;
        
        if (category !== 'all') {
          filteredProducts = allProducts.filter(product => 
            product.getAttribute('data-category') === category
          );
        }
        
        filteredProducts = sortProducts(currentSort, filteredProducts);
        
        allProducts.forEach(product => product.style.display = 'none');
        filteredProducts.slice(0, visibleProducts).forEach(product => {
          product.style.display = 'block';
        });
        
        ajrLoadMoreBtn.style.display = 
          filteredProducts.length > visibleProducts ? 'block' : 'none';
      }

      function sortProducts(sortBy, products = allProducts) {
        const sortedProducts = [...products];
        
        sortedProducts.sort((a, b) => {
          switch(sortBy) {
            case 'price-desc':
              return parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price'));
            case 'price-asc':
              return parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price'));
            case 'newest':
              return new Date(b.getAttribute('data-date')) - new Date(a.getAttribute('data-date'));
            case 'rating':
              return parseFloat(b.getAttribute('data-rating')) - parseFloat(a.getAttribute('data-rating'));
            case 'popular':
              return parseInt(b.getAttribute('data-popular')) - parseInt(a.getAttribute('data-popular'));
            default:
              return 0;
          }
        });
        
        sortedProducts.forEach(product => {
          ajrProductsGrid.appendChild(product);
        });
        
        return sortedProducts;
      }
    });
  </script>
  @include('layouts.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>