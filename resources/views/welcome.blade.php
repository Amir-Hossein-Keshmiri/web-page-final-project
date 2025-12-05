<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>ShopCar | Online Store</title>
        
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    </head>

    <body>

        <header class="navbar">
            
            <div class="logo">ShopCar</div>
            
            <nav class="nav-links">
                <a href="#" class="active">Home</a>
                <a href="#">Shop</a>
                <a href="#">Categories</a>
                <a href="#">Best Sellers</a>
            </nav>
            
            <a href="/login" class="login-btn">Login</a>

        </header>

        <section class="hero">
            
            <div class="hero-content">
            
            <h1>Find Your Dream Car</h1>
            
            <p>Discover the best cars for your lifestyle</p>
            
            <button class="shop-btn">Explore Now</button>
            
            </div>

        </section>

        <section class="products">
            
            <h2>⚡ Featured Products</h2>

            <div class="product-grid">

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>

                    <img src="{{ asset('img/cars/audi/audi_1.jpg') }}" alt="Audi R8">
                
                    <h3>Audi R8</h3>
                
                    <div class="rating">⭐ 4.9</div>
                
                    <p class="price">$150,000 <span class="old-price">$170,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/audi/audi_2.jpg') }}" alt="Audi Q7">
                
                    <h3>Audi Q7</h3>
                
                    <div class="rating">⭐ 4.7</div>
                
                    <p class="price">$70,000 <span class="old-price">$85,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/audi/audi_3.jpg') }}" alt="Audi Q7">
                
                    <h3>Audi Q7</h3>
                
                    <div class="rating">⭐ 4.7</div>
                
                    <p class="price">$70,000 <span class="old-price">$85,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/bmw/bmw_1.jpg') }}" alt="BMW i8">
                
                    <h3>BMW i8</h3>
                
                    <div class="rating">⭐ 4.8</div>
                
                    <p class="price">$140,000 <span class="old-price">$160,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/bmw/bmw_2.jpg') }}" alt="BMW X5">
                
                    <h3>BMW X5</h3>
                
                    <div class="rating">⭐ 4.6</div>
                
                    <p class="price">$65,000 <span class="old-price">$78,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/bmw/bmw_3.jpg') }}" alt="BMW X5">
                
                    <h3>BMW X5</h3>
                
                    <div class="rating">⭐ 4.6</div>
                
                    <p class="price">$65,000 <span class="old-price">$78,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/ferrari/ferarri_1.jpg') }}" alt="Ferrari F8">
                
                    <h3>Ferrari F8</h3>
                
                    <div class="rating">⭐ 5.0</div>
                
                    <p class="price">$280,000 <span class="old-price">$300,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/ferrari/ferarri_2.jpg') }}" alt="Ferrari SF90">
                
                    <h3>Ferrari SF90</h3>
                
                    <div class="rating">⭐ 4.9</div>
                
                    <p class="price">$350,000 <span class="old-price">$380,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/ferrari/ferarri_3.jpg') }}" alt="Ferrari F8">
                
                    <h3>Ferrari F8</h3>
                
                    <div class="rating">⭐ 5.0</div>
                
                    <p class="price">$280,000 <span class="old-price">$300,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/lamborghini/lamborghini_1.jpg') }}" alt="Lamborghini Huracan">
                
                    <h3>Lamborghini Huracan</h3>
                
                    <div class="rating">⭐ 4.8</div>
                
                    <p class="price">$250,000 <span class="old-price">$270,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/lamborghini/lamborghini_2.jpg') }}" alt="Lamborghini Huracan">
                
                    <h3>Lamborghini Huracan</h3>
                
                    <div class="rating">⭐ 4.8</div>
                
                    <p class="price">$250,000 <span class="old-price">$270,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/lamborghini/lamborghini_3.jpg') }}" alt="Lamborghini Huracan">
                
                    <h3>Lamborghini Huracan</h3>
                
                    <div class="rating">⭐ 4.8</div>
                
                    <p class="price">$250,000 <span class="old-price">$270,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/mercedes/mercedes_1.jpg') }}" alt="Mercedes S-Class">
                
                    <h3>Mercedes S-Class</h3>
                
                    <div class="rating">⭐ 4.7</div>
                
                    <p class="price">$110,000 <span class="old-price">$130,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/mercedes/mercedes_2.jpg') }}" alt="Mercedes S-Class">
                
                    <h3>Mercedes S-Class</h3>
                
                    <div class="rating">⭐ 4.7</div>
                
                    <p class="price">$110,000 <span class="old-price">$130,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

                <div class="product-card">
                
                    <span class="badge-sale">SALE</span>
                
                    <img src="{{ asset('img/cars/mercedes/mercedes_3.jpg') }}" alt="Mercedes S-Class">
                
                    <h3>Mercedes S-Class</h3>
                
                    <div class="rating">⭐ 4.7</div>
                
                    <p class="price">$110,000 <span class="old-price">$130,000</span></p>
                
                    <button class="add-cart">Add to Cart</button>
            
                </div>

            </div>
        
        </section>

        <section class="newsletter">
            
            <h3>Join ShopCar Community 🔥</h3>
            
            <p>Exclusive offers — directly to your inbox</p>
            
            <input type="email" placeholder="Enter your email">
            
            <button>Subscribe</button>
        
        </section>

        <footer class="footer">
            
            <p>© 2025 ShopCar. All rights reserved.</p>
        
        </footer>

    </body>

</html>
