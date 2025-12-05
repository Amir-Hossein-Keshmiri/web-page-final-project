<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>ShopCar | Login</title>
        
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    </head>
    
    <body>

        <div class="login-container">
    
            <div class="login-box">
            
                <h2>Login to ShopCar</h2>

                @if(session('error'))
                    <div class="error">{{ session('error') }}</div>
                @endif

                <form action="{{ route('login_to_profile') }}" method="POST">
                @csrf
                
                    <div class="input-group">
                        
                        <label for="phone">Phone Number</label>
                        
                        <input type="text" name="phone" placeholder="Enter your phone number" required>
                    
                    </div>
                    
                    <div class="input-group">
                        
                        <label for="password">Password</label>
                        
                        <input type="password" name="password" placeholder="Enter your password" required>
                    
                    </div>
                    
                    <button type="submit" class="login-btn">Login</button>
                
                </form>

                <p class="register-text">
                
                    Don't have an account? 
                    
                    <a href="/register">Create Account</a>
                
                </p>
                
            </div>

            <a href="/" class="back-home">← Back to Home</a>

        </div>

    </body>

</html>
