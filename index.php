<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binny Local Craft Hub</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            margin: 20px 0;
            padding: 60px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .product-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .card {
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid #eaeaea;
        }
        
        .feature-card {
            height: 100%;
            border: none;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .alert-box {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            text-align: center;
        }
        
        .welcome-message {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
        }
        
        .btn-custom {
            background: white;
            color: #6a11cb;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            background: #f8f9fa;
            transform: scale(1.05);
        }
        
        .category-icon {
            font-size: 2.5em;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h3 class="mb-0">🏺 Local Craft Hub</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Logout Message Alert (static version) -->
        <div id="logoutMessage" class="alert-box" style="display: none;">
            <h4>✅ Logout Successful</h4>
            <p>You have been successfully logged out.</p>
        </div>

        <div class="hero-section text-center">
            <h1 class="display-4 fw-bold mb-4">Welcome to Binny Local Craft Hub</h1>
            
            <!-- Welcome message for logged in users (static simulation) -->
            <div id="welcomeMessage" class="welcome-message" style="display: none;">
                <h5 id="userName">Welcome back, User!</h5>
                <p class="mb-0">Ready to explore our beautiful crafts?</p>
            </div>
            
            <p class="lead mb-4">Discover unique handmade crafts created by local artisans</p>
            <a href="products.html" class="btn btn-custom btn-lg">Start Shopping</a>
        </div>

        <!-- Craft Categories -->
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card feature-card text-center h-100">
                    <div class="card-body">
                        <div class="category-icon">🏺</div>
                        <h3>Pottery</h3>
                        <p>Beautiful handmade clay products with traditional designs crafted by skilled artisans.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card feature-card text-center h-100">
                    <div class="card-body">
                        <div class="category-icon">🧵</div>
                        <h3>Textiles</h3>
                        <p>Traditional woven fabrics, clothing items, and textile crafts with unique patterns.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card feature-card text-center h-100">
                    <div class="card-body">
                        <div class="category-icon">🪵</div>
                        <h3>Woodwork</h3>
                        <p>Exquisite wooden carvings, furniture, and decorative items from sustainable wood.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Featured Handmade Products</h2>
                
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="images/pottery-vase.jpg" 
                                 class="card-img-top" 
                                 alt="Traditional Pottery Vase"
                                 onerror="this.src='https://via.placeholder.com/400x300?text=Pottery+Vase'">
                            <div class="card-body">
                                <h5 class="card-title">Traditional Pottery Vase</h5>
                                <p class="card-text">Handcrafted clay vase with traditional patterns, perfect for home decoration.</p>
                                <p class="card-text"><strong>$45.99</strong></p>
                                <button class="btn btn-primary add-to-cart" data-product="Pottery Vase">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="images/woven-scarf.jpg" 
                                 class="card-img-top" 
                                 alt="Handwoven Scarf"
                                 onerror="this.src='https://via.placeholder.com/400x300?text=Woven+Scarf'">
                            <div class="card-body">
                                <h5 class="card-title">Handwoven Cotton Scarf</h5>
                                <p class="card-text">Colorful cotton scarf with traditional weaving techniques.</p>
                                <p class="card-text"><strong>$32.50</strong></p>
                                <button class="btn btn-primary add-to-cart" data-product="Handwoven Scarf">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="images/wooden-bowl.jpg" 
                                 class="card-img-top" 
                                 alt="Carved Wooden Bowl"
                                 onerror="this.src='https://via.placeholder.com/400x300?text=Wooden+Bowl'">
                            <div class="card-body">
                                <h5 class="card-title">Carved Wooden Bowl</h5>
                                <p class="card-text">Eco-friendly wooden bowl hand-carved from sustainable teak wood.</p>
                                <p class="card-text"><strong>$58.75</strong></p>
                                <button class="btn btn-primary add-to-cart" data-product="Wooden Bowl">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="products.html" class="btn btn-outline-primary btn-lg">View All Products →</a>
                </div>
            </div>
        </div>

        <!-- Static Alert for PHP Requirement -->
        <div class="alert alert-info mt-5">
            <h4>💡 Note for PHP Functionality</h4>
            <p>For full functionality including user login, shopping cart, and checkout, this website requires PHP hosting. 
            GitHub Pages supports only static websites. Consider using <strong>000webhost</strong> or <strong>InfinityFree</strong> 
            for free PHP hosting with database support.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container text-center">
            <p>&copy; 2024 Binny Local Craft Hub. All rights reserved.</p>
            <p>Handmade with ❤️ by local artisans</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Check URL for logout message
        if (window.location.search.includes('logout=success')) {
            document.getElementById('logoutMessage').style.display = 'block';
            
            // Remove query parameter after showing
            setTimeout(() => {
                window.history.replaceState({}, document.title, window.location.pathname);
                document.getElementById('logoutMessage').style.display = 'none';
            }, 5000);
        }
        
        // Simulate login state (for demo)
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('user')) {
            const userName = urlParams.get('user');
            document.getElementById('welcomeMessage').style.display = 'block';
            document.getElementById('userName').textContent = `Welcome back, ${userName}! 👋`;
        }
        
        // Add to Cart functionality (static version)
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                alert(`"${productName}" has been added to your cart!\n\nFor full shopping cart functionality, please use PHP hosting.`);
            });
        });
        
        // Page load animation
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>
