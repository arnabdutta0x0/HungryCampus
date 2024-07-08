<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/forgot.css')}}">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>


    <title>HungryCampus</title>
</head>

<body>

    <form class="forgot-form" method="POST" action="{{ route('forgot.verify') }}">
        @csrf

        <h1>Forgot Password</h1>

        <label for="email">Enter Your Email-Address:</label>
        <input type="email" id="email" name="email" placeholder="Email-Address" required>

        <button type="submit" id="submit">Submit</button>


        @if($errors->any())
        <div class="error-message">
            <p>{{ $errors->first('email') }}</p>
        </div>
        @endif
    </form>

    <script src="{{asset('js/forgot.js')}}"></script>
</body>

</html>