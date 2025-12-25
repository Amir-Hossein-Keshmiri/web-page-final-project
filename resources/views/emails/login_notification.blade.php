<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Notification - ShopCar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #e9ecef;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .email-wrapper {
            display: flex;
            justify-content: center;
            padding: 50px 15px;
        }
        .email-container {
            background: linear-gradient(135deg, #ffffff 0%, #f1f3f6 100%);
            max-width: 600px;
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            padding: 40px 30px;
        }
        .email-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .email-header h1 {
            color: #1c2533;
            font-size: 28px;
            margin: 0;
        }
        .email-body p {
            color: #495057;
            font-size: 16px;
            line-height: 1.7;
            margin: 15px 0;
        }
        .highlight {
            color: #27ae60;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #adb5bd;
            margin-top: 30px;
        }
        @media screen and (max-width: 600px) {
            .email-container {
                padding: 30px 20px;
            }
            .email-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <div class="email-header">
                <h1>Welcome to ShopCar!</h1>
            </div>
            <div class="email-body">
                <p>You have successfully logged in to your <span class="highlight">ShopCar</span> account.</p>
                <p>Login time: <strong>{{ now()->format('l, d F Y H:i:s') }}</strong></p>
                <p>If this wasn't you, please contact our support team immediately to secure your account.</p>
            </div>
            <div class="footer">
                &copy; {{ date('Y') }} ShopCar. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
