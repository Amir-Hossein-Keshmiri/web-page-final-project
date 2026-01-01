<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Add Balance</title>
        
        <link rel="stylesheet" href="{{ asset('css/add_balance.css') }}">
    
    </head>

    <body>

        <div class="profile-wrapper">

            <div class="profile-header">
            
                <h2>Add Balance</h2>
            
                <p>Enter the amount you want to add to your wallet</p>
        
            </div>

            <form action="{{ route('add_balance_confirm') }}" method="POST">
            @csrf

                <div class="card">
                
                    <div class="info-row">
                    
                        <label for="amount">Amount ($)</label>

                        <input type="number" name="amount" id="amount" required min="1">
                
                    </div>
                
                </div>

                <div class="button-wrapper">
                    
                    <button type="submit" class="primary-btn">Continue</button>
                
                </div>
        
            </form>

        </div>

    </body>

</html>
