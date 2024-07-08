<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .thank-you {
            font-size: 22px;
            font-weight: bold;
            color: #27ae60;
            text-align: center;
            margin-bottom: 30px;
        }

        .code {
            font-size: 36px;
            font-weight: bold;
            color: #e74c3c;
            text-align: center;
            display: block;
            margin: 20px 0;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/image/logo/HC.jpg" alt="Logo" class="logo" width="100">
        <h2>Forgot Password</h2>
        <p class="thank-you">You've requested to reset your password.</p>
        <p>Your verification code is: <span class="code">{{ $code }}</span></p>
        <p>If you didn't request this, please ignore this email.</p>
    </div>
</body>
</html>
