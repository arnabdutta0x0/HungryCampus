<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        p {
            color: #666;
            margin-bottom: 10px;
        }
        
        .code {
            font-size: 24px;
            font-weight: bold;
            color: #ff5722;
        }
        
        .thank-you {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
        <h2>Payment Confirmation</h2>
        <p class="thank-you">We appreciate your choice of FOOD.</p>
        <p>Your 4-digit code is: <span class="code">{{ $code }}</span></p>
        <p>Thank you for using our website :)</p>
    </div>
</body>
</html>
