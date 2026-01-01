<!DOCTYPE html>

<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Payment Confirmation</title>
        
        <link rel="stylesheet" href="{{ asset('css/add_balance_confirm.css') }}">
    
    </head>
    
    <body>

        <div class="profile-wrapper">

            <div class="profile-header">
                
                <h2>Confirm Payment</h2>
                
                <p>Click on the right button if payment was successful, or left button if failed</p>
            
            </div>

            <div class="card confirm-card">
            
                <p class="amount-text">
                    Amount: <strong>${{ $amount }}</strong>
                </p>

                <div class="confirm-buttons">

                    <form action="{{ route('add_balance_result') }}" method="POST">
                    @csrf
                    
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        
                        <input type="hidden" name="status" value="failed">
                        
                        <button type="submit" class="primary-btn fail-btn">Payment Failed</button>
                    
                    </form>

                    <form action="{{ route('add_balance_result') }}" method="POST">
                    @csrf
                    
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        
                        <input type="hidden" name="status" value="success">
                        
                        <button type="submit" class="primary-btn success-btn">Payment Successful</button>
                    
                    </form>
                
                </div>
            
            </div>

        </div>

    </body>

</html>
