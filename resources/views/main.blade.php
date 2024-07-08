<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HungryCampus</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{asset('/image/logo/HC.jpg')}}" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">

    <!--
    - google font link
  -->

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="overlay" data-overlay></div>

    <div class="overlay" cart-overlay></div>

    <div class="overlay" profile-overlay></div>
    <!--
    - HEADER
  -->

    <header>

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Order Here</b>, Save time no line
                    </p>
                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                    <img src="/image/logo/HC.jpg" alt="HungryCampus's logo" width="150" height="75">
                </a>

                <div class="header-user-actions">

                    <button href="#" class="action-btn" profile-desktop-menu-open-btn="" fdprocessedid="69ptud">
                        <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="heart outline">
                        </ion-icon>
                    </button>

                    <button class="action-btn" cart-desktop-menu-open-btn="">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <p class="count" id="count">0</p>
                    </button>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @php
                        session()->reflash();
                        @endphp
                        <button href="#" class="logout-btn">
                            <ion-icon name="log-out-outline"></ion-icon>
                            </ion-icon>
                        </button>
                    </form>

                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <button class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </button>

                    <button class="menu-category">
                        <a href="#veg" class="menu-title">Vegetarian</a>
                    </button>

                    <button class="menu-category">
                        <a href="#non-veg" class="menu-title">Non-Vegetarian</a>
                    </button>

                    <button class="menu-category">
                        <a href="#des" class="menu-title">Dessert & Snacks</a>
                    </button>

                    <button class="menu-category">
                        <a href="#thali" class="menu-title">Thali</a>
                    </button>

                </ul>
            </div>
        </nav>

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn="" fdprocessedid="27xvqd">
                <ion-icon name="menu-outline" role="img" class="md hydrated" aria-label="menu outline"></ion-icon>
            </button>

            <button class="action-btn" cart-mobile-menu-open-btn="">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <p class="count" id="count1">0</p>
            </button>

            <button class="action-btn" profile-mobile-menu-open-btn="" fdprocessedid="69ptud">
                <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
            </button>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @php
                session()->reflash();
                @endphp
                <button href="#" class="logout-btn">
                    <ion-icon name="log-out-outline"></ion-icon>
                    </ion-icon>
                </button>
            </form>

        </div>

        <nav class="mobile-navigation-menu has-scrollbar " data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="accordion-menu" vagbc="">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">

                <li class="accordion-menu" vagbc="">
                    <a href="#veg" class="menu-title">Vegetarian</a>
                </li>

                </li>

                <li class="menu-category">

                <li class="accordion-menu" vagbc="">
                    <a href="#non-veg" class="menu-title">Non-Vegetarian</a>
                </li>

                </li>

                <li class="menu-category">

                <li class="accordion-menu" vagbc="">
                    <a href="#des" class="menu-title">Dessert & Snacks</a>
                </li>

                </li>

                <li class="menu-category">

                <li class="accordion-menu" vagbc="">
                    <a href="#thali" class="menu-title">Thali</a>
                </li>

                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

        <nav class="cart-mobile-navigation-menu has-scrollbar " cart-mobile-menu>

            <div class="cart-menu-top">
                <h2 class="cart-menu-title">Cart</h2>

                <button class="cart-menu-close-btn" cart-mobile-menu-close-btn>
                    <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
                </button>
            </div>


            <div id="cartItem" class="cartItem">
                <h3>Your Cart Is Empty</h3>
            </div>
            <div class="cart-foot">
                <h3 id="ttl">Total:</h3>
                <h3 id="total">₹0.00</h3>

                <form action="/session" method="POST" id="form">
                    <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i></a>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type='hidden' name="total" value="">
                    <input type='hidden' name="productname" value="">
                    <button class="btn btn-success" type="submit" id="co" style="display:none"><i
                            class="fa fa-money"></i> pay now</button>
                </form>

            </div>

        </nav>

        <nav class="profile-mobile-navigation-menu has-scrollbar " profile-mobile-menu>

            <div class="profile-menu-top">
                <h2 class="profile-menu-title">Profile</h2>

                <button class="profile-menu-close-btn" profile-mobile-menu-close-btn>
                    <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline"></ion-icon>
                </button>
            </div>

            <div class="profile-body">

                <div class="main-box">

                    <div class="bor">

                        <div class="box" id="box">

                            <form action="{{ route('main') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <form action="{{ route('main.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <form action="{{ route('profileShow') }}" method="GET"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="box-upper" id="box-upper">

                                            <img src="{{ $profileImageUrl }}" alt="Profile Image" id="photo"><br>

                                            <div id="pi">
                                                <div id="pi">
                                                    <input type="file" id="file" name="photo">
                                                    <label for="file" id="bun">Change Photo</label><br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-mid">
                                            <div class="form-item">
                                                <div class="field">
                                                    <label class="label" for="username">Username</label><br>
                                                </div>
                                                <input id="input" type="text" class="input" placeholder="Username"
                                                    name="username3" value="{{ $username }}" required>
                                            </div><br>
                                            <div class="form-item">
                                                <div class="field">
                                                    <label class="label" for="email">Email</label><br>
                                                </div>
                                                <input id="input" type="email" class="input" placeholder="Email"
                                                    name="email3" value="{{ $email }}" required>
                                            </div><br>
                                            @if (session('success'))

                                            <div class="success-message">

                                                {{ session('success') }}

                                            </div>

                                            @endif

                                            @if ($errors->any())

                                            <div class="alert alert-danger">

                                                <ul>

                                                    @foreach ($errors->all() as $error)

                                                    <li>{{ $error }}</li>

                                                    @endforeach

                                                </ul>

                                            </div>

                                            @endif
                                        </div>
                                        <div class="box-lower">
                                            <button id="bu" type="submit"
                                                data-route="{{ route('main.update') }}">Save</button>
                                        </div>

                                    </form>

                                </form>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header>


    <!--
    - MAIN
  -->

    <main>

        <!--
      - BANNER
    -->

        <div class="banner">

            <div class="container">

                <div class="slider-container has-scrollbar">

                    <div class="slider-item">

                        <img src="/image/banner-3.jpg" alt="bengali food" class="banner-img1">

                    </div>

                    <div class="slider-item">

                        <img src="/image/banner-0.jpg" alt="bengali food" class="banner-img2">

                    </div>

                    <div class="slider-item">

                        <img src="/image/banner-1.jpg" alt="bengali food" class="banner-img3">

                    </div>

                </div>

            </div>

        </div>


        <!--
      - PRODUCT
    -->

        <div class="product-container">

            <div class="container">

                <div class="container-flex">

                    <div class="product-box">

                        <!--
            - PRODUCT MINIMAL 1
          -->

                        <div class="product-minimal">

                            <div class="product-showcase" id="veg">

                                <h2 class="title">Vegetarian</h2>

                                <div class="showcase-wrapper has-scrollbar">

                                    <div id="part1"></div>
                                    <div id="part2"></div>

                                </div>

                            </div>


                            <div class="product-showcase" id="non-veg">

                                <h2 class="title">Non-Vegetarian</h2>

                                <div class="showcase-wrapper  has-scrollbar">

                                    <div id="part3"></div>
                                    <div id="part4"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="product-box">
                        <!--
            - PRODUCT MINIMAL 2
          -->

                        <div class="product-minimal">

                            <div class="product-showcase" id="des">

                                <h2 class="title">Dessert & Snacks</h2>

                                <div class="showcase-wrapper has-scrollbar">

                                    <div id="part5"></div>
                                    <div id="part6"></div>

                                </div>

                            </div>


                            <div class="product-showcase" id="thali">

                                <h2 class="title">Thali</h2>

                                <div class="showcase-wrapper  has-scrollbar">

                                    <div id="part7"></div>
                                    <div id="part8"></div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </main>


    <!--
    - FOOTER
  -->

    <footer>

        <div class="footer-category">

            <div class="container">

                <h2 class="footer-category-title">Food directory</h2>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Vegetarian :</h3>

                    <p class="footer-category-link">sabji</p>
                    <p class="footer-category-link">Dal</p>
                    <p class="footer-category-link">Paneer roll</p>
                    <p class="footer-category-link">Paneer Pokora</p>
                    <p class="footer-category-link">Beguni Vaja</p>
                    <p class="footer-category-link">Peyaji Vaja</p>

                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">Non-Vegetarian :</h3>

                    <p class="footer-category-link">Chiken Curry</p>
                    <p class="footer-category-link">Chiken Roll</p>
                    <p class="footer-category-link">Chiken Chop</p>
                    <p class="footer-category-link">Chiken Biriany</p>
                    <p class="footer-category-link">Chiken Fried rice</p>
                    <p class="footer-category-link">Chilli Chiken </p>
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">Dessert & Snacks:</h3>

                    <p class="footer-category-link">Cake</p>
                    <p class="footer-category-link">Misti Doi</p>
                    <p class="footer-category-link">Ice-Cream</p>
                    <p class="footer-category-link">Payes</p>
                    <p class="footer-category-link">Chocolates</p>
                </div>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="/image/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">HungryCampus</a> all rights reserved 2023.
                </p>

            </div>

        </div>

    </footer>

    <!--
    - custom js link
  -->
    <script src="{{asset('js/main.js')}}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>