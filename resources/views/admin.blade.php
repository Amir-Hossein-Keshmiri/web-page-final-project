<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>ShopCar | Admin Dashboard</title>
        
        <link rel="stylesheet" href="/css/admin.css">
    
    </head>

    <body>

        <div class="admin-wrapper">

            <div class="admin-header">
                
                <h2>Admin Dashboard</h2>
                
                <p>Manage users, products and your account.</p>

                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                
                    <button class="logout-btn">Logout</button>
                
                </form>
                
            </div>

            <div class="admin-grid">

                <div class="admin-info">
                    
                    <div class="card">
                    
                        <h3>Admin Details</h3>
                    
                        <div class="info-row">
                        
                            <label>Email</label>
                        
                            <input type="text" value="admin@gmail.com" disabled> 

                        </div>
                    
                        <div class="info-row">
                        
                            <label>Password</label>
                                
                            <input type="password" value="********" disabled>
                                
                            <a href="/change-password" class="link">Change Password</a>
                        
                        </div>
                    </div>

                    <div class="card">
                    
                        <h3>Quick Actions</h3>
                    
                        <div class="action-buttons">
                        
                            <a href="/admin/users" class="primary-btn">User List</a>
                            
                            <a href="/admin/products" class="primary-btn">Product List</a>
                    
                        </div>
                
                    </div>
                
                </div>

                <div class="admin-activity">
                
                    <div class="card">
                    
                        <h3>Recent Admin Activity</h3>
                        
                        <div class="activity-list">
                        
                            <div class="activity-item">
                            
                                <p>Logged in to admin panel</p>
                            
                                <span class="activity-date">Jan 2, 2026</span>
                        
                            </div>
                        
                        
                            <div class="activity-item">
                            
                                <p>Viewed user list</p>
                            
                                <span class="activity-date">Jan 2, 2026</span>
                        
                            </div>
                        
                            <div class="activity-item">
                            
                                <p>Checked product stock</p>
                                
                                <span class="activity-date">Jan 1, 2026</span>
                            
                            </div>
                    
                        </div>
                    
                    </div>
                
                </div>

            </div>

            <a href="/" class="back-home">← Back to Home</a>

        </div>

    </body>

</html>
