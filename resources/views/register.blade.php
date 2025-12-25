<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>ShopCar | Register</title>
        
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    
    </head>
    
    <body>

        <div class="register-container">
        
            <div class="register-box">
        
                <h2>Register to ShopCar</h2>

                @if(session('error'))
                    <div class="error">{{ session('error') }}</div>
                @endif

                <form action="{{ route('register_to_profile') }}" method="POST">
                @csrf
            
                    <div class="input-group">

                        <label for="email">Email Address</label>
                        
                        <input type="email" name="email" placeholder="Enter your email" required>
                    
                    </div>
            
                    <div class="input-group">
                        
                        <label for="password">Password</label>
                        
                        <input type="password" name="password" placeholder="Enter your password" required>
                    
                    </div>
            
                    <button type="submit" class="register-btn">Register</button>
            
                    <p class="register-text">
                    
                        Already have an account?
                        
                        <a href="/login">Login</a>
                    
                    </p>
            
                </form>
        
            </div>

            <a href="/" class="back-home">← Back to Home</a>

        </div>

    </body>

</html>
