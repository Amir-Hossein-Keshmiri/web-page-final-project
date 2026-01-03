<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="UTF-8">
        
        <title>User List | Admin</title>
        
        <link rel="stylesheet" href="/css/admin.css">
        
        <link rel="stylesheet" href="/css/users_list.css">
    
    </head>

    <body>

        <div class="admin-wrapper">

            <div class="admin-header">
        
                <h2>User Management</h2>
            
                <p>View and manage registered users</p>
        
            </div>

            <div class="card">

                <h3>Registered Users</h3>

                <div class="users-table">

                    <div class="table-header">
                
                        <span>ID</span>
                    
                        <span>Email</span>
                    
                        <span>Action</span>
            
                    </div>

                    <div class="table-body">
            
                        @foreach($users as $user)
                        <div class="table-row">
                        
                            <span>{{ $user->id }}</span>
                            
                            <span>{{ $user->email }}</span>

                            <form method="POST" action="/admin/users/{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                        
                                <button class="delete-btn">Delete</button>
                            
                            </form>
                        
                        </div>
                        
                        @endforeach
                        @if($users->count() === 0)
                            <p class="empty-text">No users found.</p>
                        @endif
                    
                    </div>

                </div>

            </div>

            <a href="/admin" class="back-home">← Back to dashboard</a>

        </div>

    </body>

</html>
