<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/confirmation.css">

    <!--  Icons  -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>


  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{asset('/image/logo/HC.jpg')}}" type="image/x-icon">

    <title>HungryCampus</title>
</head>
<body>

  <section class="success">

    <div class="ps">

      <h1>Payment successful<span class="bx bxs-badge-check"></h1>
      <h3>Please check your email for the FOOD CODE and redeem it at the canteen within 72 hours.</h3>
      <button id="lol" type="submit" onclick="goBack()">GO BACK</button>

      <script>
        function goBack() {
          window.location.href = "{{ route('main') }}";
        }
      </script>

    </div>

  </section>

</body>
