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

            @if(auth()->check())
                @if(auth()->user()->email === 'admin@gmail.com')
                    <a href="/admin" class="login-btn">Profile</a>
                @else
                    <a href="/profile" class="login-btn">Profile</a>
                @endif
            @else
                <a href="/login" class="login-btn">Login</a>
            @endif

        </header>

        <section class="hero">
            
            <div class="hero-content">
            
            <h1>Find Your Dream Car</h1>
            
            <p>Discover the best cars for your lifestyle</p>
            
            <button class="shop-btn">Explore Now</button>
            
            </div>

        </section>

        <section class="products">
            
            <h2>⚡ Car Brands</h2>

            <div class="product-grid">

                <div class="product-card">

                    <img src="{{ asset('img/logo/mercedes.jpeg') }}" alt="mercedes logo">
                
                    <h3>Mercedes</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/bmw.jpeg') }}" alt="bmw logo">
                
                    <h3>BMW</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/audi.jpeg') }}" alt="audi logo">
                
                    <h3>Audi</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/lamborghini.jpeg') }}" alt="lamborghini logo">
                
                    <h3>Lamborgini</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/ferrari.jpeg') }}" alt="ferrari logo">
                
                    <h3>Ferrari</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/porsche.jpeg') }}" alt="porsche logo">
                
                    <h3>Porsche</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/volkswagen.jpeg') }}" alt="volkswagen logo">
                
                    <h3>Volkswagen</h3>
            
                </div>

                <div class="product-card">

                    <img src="{{ asset('img/logo/bentley.jpeg') }}" alt="bentley logo">
                
                    <h3>Bentley</h3>
            
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
            
            <p>© 2026 ShopCar. All rights reserved.</p>
        
        </footer>

    </body>

</html>
