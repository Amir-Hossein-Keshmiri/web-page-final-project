<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>ShopCar | Profile</title>
        
        <link rel="stylesheet" href="/css/profile.css">
    
    </head>
    
    <body>

        <div class="profile-wrapper">

            <div class="profile-header">
                
                <h2>Your Account</h2>
                
                <p>Manage your personal information, orders and balance.</p>
            
                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                    <button class="logout-btn">Logout</button>
                </form>

            </div>

            <div class="profile-grid">

                <!-- Left Column -->
                <div class="profile-info">

                    <div class="card">
                    
                        <h3>Account Details</h3>
                        
                        <div class="info-row">
                        
                            <label>Email</label>

                            <input type="text" value="{{ $user->email }}" disabled>
                        
                        </div>
                        
                        <div class="info-row">
                            
                            <label>Password</label>
                            
                            <input type="password" value="********" disabled>
                            
                            <a href="/change-password" class="link">Change Password</a>
                        
                        </div>
                        
                    </div>

                    <div class="card">
                        
                        <h3>Wallet Balance</h3>
                        
                        <div class="balance-display">
                        
                            <span class="amount">$125.00</span>
                            
                            <a href="{{ url('/profile/add_balance') }}" class="primary-btn">Add Balance</a>
                        
                        </div>
                    
                    </div>

                </div>

                <!-- Right Column -->
                <div class="profile-orders">

                    <div class="card">
                        
                        <h3>Your Orders</h3>

                        <!-- Empty Orders Message -->
                        <!-- 
                        <div class="no-orders">
                            
                            <p>No orders found.</p>
                            
                            <span>Start exploring and place your first order!</span>
                        
                        </div>
                        -->

                        <!-- Orders List -->
                        <div class="orders-list">
                        
                            <div class="order-item">
                            
                                <div>
                                
                                    <p class="model">Mercedes-Benz C200</p>
                                    
                                    <p class="order-date">Dec 21, 2024</p>
                                
                                </div>
                                
                                <span class="price">$220,000</span>
                                
                                <span class="status delivered">Delivered</span>
                            
                            </div>

                            <div class="order-item">
                                
                                <div>
                                    
                                    <p class="model">BMW M4 Competition</p>
                                    
                                    <p class="order-date">Dec 18, 2024</p>
                                
                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                                
                            </div>

                            <div class="order-item">
                                
                                <div>
                                    
                                    <p class="model">BMW M4 Competition</p>
                                    
                                    <p class="order-date">Dec 18, 2024</p>
                                
                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                            
                            </div>

                            <div class="order-item">
                                
                                <div>
                                
                                    <p class="model">BMW M4 Competition</p>
                                    
                                    <p class="order-date">Dec 18, 2024</p>

                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                            
                            </div>

                            <div class="order-item">
                                
                                <div>
                                
                                    <p class="model">BMW M4 Competition</p>
                                
                                    <p class="order-date">Dec 18, 2024</p>

                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                            
                            </div>

                            <div class="order-item">
                                
                                <div>
                                
                                    <p class="model">BMW M4 Competition</p>
                                    
                                    <p class="order-date">Dec 18, 2024</p>
                                
                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                            
                            </div>

                            <div class="order-item">
                                
                                <div>
                                
                                    <p class="model">BMW M4 Competition</p>
                                    
                                    <p class="order-date">Dec 18, 2024</p>
                                
                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                            
                            </div>

                            <div class="order-item">
                                
                                <div>
                                
                                    <p class="model">BMW M4 Competition</p>
                                    
                                    <p class="order-date">Dec 18, 2024</p>
                                
                                </div>
                                
                                <span class="price">$310,000</span>
                                
                                <span class="status pending">Pending</span>
                            
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <a href="/" class="back-home">← Back to Home</a>

        </div>

    </body>

</html>
