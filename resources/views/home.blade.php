<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGR - Build Your Own</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --agr-dark-blue: #161730;
            --agr-light-bg: #1a1d3a;
            --agr-gold: #D4AF37;
            --agr-gold-light: #f0e68c;
            --agr-gold-dark: #b8860b;
            --agr-product-bg: #f8f9fa;
        }
        
        body {
            background-color: #161730 !important;
            color: white;
            font-family: 'Arial', sans-serif;
        }
        
        .agr-container {
            background-color: #161730 !important;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Navigation */
        .agr-breadcrumb {
            font-size: 0.9rem;
            color: #D4C780;
            margin-bottom: 10px;
        }
        
        .agr-breadcrumb a {
            color: var(--agr-gold-light);
            text-decoration: none;
        }
        
        /* Main Heading */
        .agr-main-heading {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: #D4C780;
            text-align: center;
        }
        
        /* Button Group */
        .agr-btn-group {
            width: 100%;
            margin-bottom: 40px;
            display: flex;
        }
        
        .agr-btn-group .btn {
            flex: 1;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 0;
            border: 2px solid #D4C780;
        }
        
        .agr-btn-windows {
            background-color: var(--agr-light-bg);
            color: white;
        }
        
        .agr-btn-doors {
            background-color: var(--agr-light-bg);
            color: white;
        }
        
        .agr-btn-group .btn.active {
            background-color: #D4C780;
            color: var(--agr-dark-blue);
            font-weight: 700;
        }
        
        /* Product Containers */
        .agr-product-container {
            display: none;
        }
        
        .agr-product-container.active {
            display: block;
        }
        
        /* Product Cards */
        .agr-product-card {
            background-color: var(--agr-light-bg);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
            border: 2px solid #D4C780;
            transition: all 0.3s;
        }
        
        .agr-product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }
        
        .agr-product-image {
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: transparent;
        }
        
        /* Golden SVG styling */
        .agr-product-image svg {
            width: 80%;
            height: 80%;
        }
        
        .agr-product-image svg path,
        .agr-product-image svg rect,
        .agr-product-image svg circle,
        .agr-product-image svg line {
            stroke: #D4C780;
            fill: none;
        }
        
        .agr-product-image svg [fill] {
            fill: #D4C780;
        }
        
        .agr-product-info {
            padding: 20px;
            text-align: center;
            border-top: 1px solid #D4C780;
        }
        
        .agr-product-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: white;
        }
        
        .agr-product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: #D4C780;
            margin: 15px 0;
        }
        
        .agr-btn-customize {
            width: 100%;
            padding: 10px;
            background-color: #D4C780;
            color: var(--agr-dark-blue);
            border: none;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .agr-btn-customize:hover {
            background-color: var(--agr-gold-dark);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .agr-product-image {
                height: 220px;
            }
        }
        
        @media (max-width: 992px) {
            .agr-main-heading {
                font-size: 2rem;
            }
            
            .agr-btn-group .btn {
                font-size: 1rem;
                padding: 12px;
            }
            
            .agr-product-image {
                height: 200px;
            }
        }
        
        @media (max-width: 768px) {
            .agr-main-heading {
                font-size: 1.8rem;
            }
            
            .agr-product-image {
                height: 180px;
            }
        }
        
        @media (max-width: 576px) {
            .agr-btn-group {
                flex-direction: column;
            }
            
            .agr-btn-group .btn {
                width: 100%;
            }
            
            .agr-product-image {
                height: 160px;
            }
        }
    </style>
</head>
<body>
    <div class="agr-container">
        <!-- Breadcrumb Navigation -->
        <div class="agr-breadcrumb">
            <a href="#">Home</a> / <span>Build Your Own</span>
        </div>
        
        <!-- Main Heading -->
        <h1 class="agr-main-heading">Build Your Own</h1>
        
        <!-- Product Type Buttons -->
        <div class="agr-btn-group" role="group">
            <button type="button" class="btn agr-btn-windows active" id="agrBtnWindows">Windows</button>
            <button type="button" class="btn agr-btn-doors" id="agrBtnDoors">Doors</button>
        </div>
        
        <!-- Windows Products -->
        <div class="agr-product-container active" id="agrWindowsContainer">
            <div class="row">
                <!-- Window 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <line x1="10" y1="50" x2="90" y2="50" stroke-width="2"/>
                                <line x1="50" y1="10" x2="50" y2="90" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Classic Casement</h3>
                            <div class="agr-product-price">$899.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <line x1="10" y1="30" x2="90" y2="30" stroke-width="2"/>
                                <line x1="10" y1="70" x2="90" y2="70" stroke-width="2"/>
                                <rect x="20" y="40" width="20" height="20" stroke-width="1"/>
                                <rect x="60" y="40" width="20" height="20" stroke-width="1"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Double Hung</h3>
                            <div class="agr-product-price">$1,099.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,50 L50,10 L90,50 L50,90 Z" stroke-width="2"/>
                                <line x1="50" y1="10" x2="50" y2="90" stroke-width="2"/>
                                <line x1="10" y1="50" x2="90" y2="50" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Bay Window</h3>
                            <div class="agr-product-price">$1,499.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <circle cx="50" cy="50" r="30" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Round Picture</h3>
                            <div class="agr-product-price">$799.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <rect x="20" y="20" width="60" height="60" stroke-width="1"/>
                                <line x1="10" y1="50" x2="90" y2="50" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Sliding Panel</h3>
                            <div class="agr-product-price">$1,199.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <line x1="10" y1="30" x2="90" y2="30" stroke-width="2"/>
                                <rect x="30" y="40" width="40" height="40" stroke-width="1"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Awning Style</h3>
                            <div class="agr-product-price">$949.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 7 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,50 Q50,10 90,50 Q50,90 10,50 Z" stroke-width="2"/>
                                <line x1="10" y1="50" x2="90" y2="50" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Arch Top</h3>
                            <div class="agr-product-price">$1,299.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 8 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <rect x="20" y="20" width="20" height="60" stroke-width="1"/>
                                <rect x="60" y="20" width="20" height="60" stroke-width="1"/>
                                <line x1="50" y1="20" x2="50" y2="80" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">French Casement</h3>
                            <div class="agr-product-price">$1,599.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Window 9 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <rect x="25" y="25" width="50" height="50" stroke-width="1"/>
                                <line x1="10" y1="50" x2="90" y2="50" stroke-width="2"/>
                                <line x1="50" y1="10" x2="50" y2="90" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Quad Pane</h3>
                            <div class="agr-product-price">$1,099.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Doors Products -->
        <div class="agr-product-container" id="agrDoorsContainer">
            <div class="row">
                <!-- Door 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="70" height="80" stroke-width="2"/>
                                <circle cx="25" cy="50" r="3" fill="currentColor"/>
                                <rect x="40" y="20" width="30" height="20" stroke-width="1"/>
                                <rect x="40" y="50" width="30" height="20" stroke-width="1"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Classic Entry</h3>
                            <div class="agr-product-price">$1,499.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                                <circle cx="80" cy="50" r="3" fill="currentColor"/>
                                <rect x="30" y="20" width="20" height="60" stroke-width="1"/>
                                <rect x="60" y="20" width="20" height="60" stroke-width="1"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">French Double</h3>
                            <div class="agr-product-price">$2,199.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                                <rect x="30" y="20" width="60" height="60" stroke-width="1"/>
                                <line x1="60" y1="20" x2="60" y2="80" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Sliding Panel</h3>
                            <div class="agr-product-price">$1,899.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                                <rect x="40" y="20" width="40" height="60" stroke-width="1"/>
                                <rect x="50" y="30" width="20" height="40" stroke-width="1"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Patio Glass</h3>
                            <div class="agr-product-price">$2,499.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                                <rect x="30" y="20" width="60" height="60" stroke-width="1"/>
                                <line x1="45" y1="20" x2="45" y2="80" stroke-width="2"/>
                                <line x1="60" y1="20" x2="60" y2="80" stroke-width="2"/>
                                <line x1="75" y1="20" x2="75" y2="80" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Bi-Fold System</h3>
                            <div class="agr-product-price">$2,799.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="60" y="10" width="30" height="80" stroke-width="2"/>
                                <circle cx="75" cy="50" r="3" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Pocket Hidden</h3>
                            <div class="agr-product-price">$1,599.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 7 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="80" height="80" stroke-width="2"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                                <rect x="30" y="20" width="60" height="60" stroke-width="1"/>
                                <rect x="40" y="30" width="40" height="40" stroke-width="1"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Modern Steel</h3>
                            <div class="agr-product-price">$2,299.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 8 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,10 L90,10 L90,90 L10,90 Z" stroke-width="2"/>
                                <path d="M30,10 L30,90 M50,10 L50,90 M70,10 L70,90" stroke-width="2"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                                <circle cx="40" cy="50" r="3" fill="currentColor"/>
                                <circle cx="60" cy="50" r="3" fill="currentColor"/>
                                <circle cx="80" cy="50" r="3" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Barn Style</h3>
                            <div class="agr-product-price">$1,899.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
                
                <!-- Door 9 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="agr-product-card">
                        <div class="agr-product-image">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,10 L90,10 L90,90 L10,90 Z" stroke-width="2"/>
                                <path d="M30,20 L30,80 M50,20 L50,80 M70,20 L70,80" stroke-width="1"/>
                                <path d="M20,30 L80,30 M20,50 L80,50 M20,70 L80,70" stroke-width="1"/>
                                <circle cx="20" cy="50" r="3" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="agr-product-info">
                            <h3 class="agr-product-title">Custom Carved</h3>
                            <div class="agr-product-price">$3,499.00</div>
                            <button class="agr-btn-customize">Customize</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const btnWindows = document.getElementById('agrBtnWindows');
            const btnDoors = document.getElementById('agrBtnDoors');
            const windowsContainer = document.getElementById('agrWindowsContainer');
            const doorsContainer = document.getElementById('agrDoorsContainer');
            
            // Windows button click handler
            btnWindows.addEventListener('click', function() {
                // Update button states
                btnWindows.classList.add('active');
                btnDoors.classList.remove('active');
                
                // Update containers
                windowsContainer.classList.add('active');
                doorsContainer.classList.remove('active');
            });
            
            // Doors button click handler
            btnDoors.addEventListener('click', function() {
                // Update button states
                btnDoors.classList.add('active');
                btnWindows.classList.remove('active');
                
                // Update containers
                doorsContainer.classList.add('active');
                windowsContainer.classList.remove('active');
            });
        });
    </script>
    @include('layouts.footer')
</body>
</html>