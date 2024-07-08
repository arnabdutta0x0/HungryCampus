<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">

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
  <link rel="shortcut icon" href="{{asset('/image/HC.jpg')}}" type="image/x-icon">

    <title>HungryCampus-Admin</title>
</head>
<body>

    <!----------  Sidebar Section  ---------->

    <input type="checkbox" id="nav-toggle" >

    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span><img src="/image/HC.jpg" width="200px" height="100px"></span></h1>
        </div>

        <div class="sidebar-menu">

            <ul id="sidebar">
                <li>
                    <a href="#Dashboard" ><span class="bx bxs-dashboard"></span>
                    <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="#OrderAccepting" ><span class="bx bxs-badge-check"></span>
                    <span>Order Accepting</span></a>
                </li>

                <li>
                    <a href="#SellingDishes"><span class="bx bxs-bowl-rice"></span>
                    <span>Selling Dishes</span></a>
                </li>

                <li>
                    <a href="#Accounts"><span class="bx bxs-user-rectangle"></span>
                    <span>Accounts History</span></a>
                </li>

                <li>
                    <a href="#Logout"><span class="bx bxs-log-out"></span>
                    <span>Log Out</span></a>
                </li>
            </ul>

        </div>
    </div>

     <!----------  Header Section  ---------->

    <header id="header">

        <h1 id="headerTitle">

            <label for="nav-toggle" class="nav-bu">
                <span class="bx bx-menu"></span>
            </label>

            <span id="mySpan">Dashboard</span>

        </h1>

        <div class="user-wrapper">

            <img src="/image/id.png" width="40px" height="40px" alt="">

            <div>
                <h4>{{ $username }}</h4>
                <small>Admin</small>
            </div>

        </div>

    </header>


    <!----------  Dashboard Section  ---------->


    <div class="main-content" id="Dashboard">

        <main>

            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>1000</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="bx bxs-user-circle"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>100</h1>
                        <span>Order Today</span>
                    </div>
                    <div>
                        <span class="bx bxs-shopping-bag-alt"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Order Complete</span>
                    </div>
                    <div>
                        <span class="bx bxs-badge-check"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>₹12k</h1>
                        <span>Earing</span>
                    </div>
                    <div>
                        <span class="bx bxs-wallet"></span>
                    </div>
                </div>

            </div>

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-header">
                            <h2>Top 5 Selling Dishes Today </h2>

                            <button id="bi">See all<span class="bx bxs-right-arrow-alt"></span></button>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table width="100%">

                                    <thead>

                                        <tr>
                                            <td>Dish Name</td>
                                            <td>Orders</td>
                                            <td>Earing</td>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>Veg Thali</td>
                                            <td>70</td>
                                            <td>₹2800</td>

                                        </tr>

                                        <tr>

                                            <td>Vaja</td>
                                            <td>60</td>
                                            <td>₹600</td>

                                        </tr>

                                        <tr>

                                            <td>Misti Doi</td>
                                            <td>54</td>
                                            <td>₹810</td>

                                        </tr>

                                        <tr>

                                            <td>Egg curry</td>
                                            <td>20</td>
                                            <td>₹1000</td>

                                        </tr>

                                        <tr>

                                            <td>Egg curry</td>
                                            <td>20</td>
                                            <td>₹1000</td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>


    <!----------  code section  ---------->

    <div class="main-content" id="OrderAccepting">

        <div class="main1">

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">

                                <table width="100%">

                                    <div class="code-header">
                                        <h2>Enter the Order code</h2>
                                    </div>

                                    <div class="code-body">

                                        <div class="table-responsive">

                                            <div width="100%">
                                                <div class="order-code">
                                                    <div id="wrapper">

                                                        <h5 id="tag">Enter the 4 digit code to get the order Details</h5>

                                                        <form action="{{ route('verifyCode') }}" method="POST" autocomplete="off">

                                                            @csrf
                                                            <div id="form">

                                                                <input type="text" name="ip1" maxlength="1" pattern="[a-z]{1}" />
                                                                <input type="text" name="ip2" maxlength="1" pattern="[a-z]{1}" />
                                                                <input type="text" name="ip3" maxlength="1" pattern="[a-z]{1}" />
                                                                <input type="text" name="ip4" maxlength="1" pattern="[a-z]{1}" />

                                                                <div class="code-button">
                                                                    <button class="btn btn-primary btn-embossed" id="bu">Verify</button>
                                                                </div>

                                                                @if($errors->any())
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif

                                                            </div>

                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!----------  Selling Secction  ---------->


    <div class="main-content" id="SellingDishes">

        <div class="main2">

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-header">
                            <h2>Todays Selling Dishes and Earning on Them </h2>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table width="100%">

                                    <thead>

                                        <tr>
                                            <td>Dish Name</td>
                                            <td>Price</td>
                                            <td>Orders</td>
                                            <td>Earing</td>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>Veg Thali</td>
                                            <td>₹40</td>
                                            <td>70</td>
                                            <td>₹2800</td>

                                        </tr>

                                        <tr>

                                            <td>Fish Thali</td>
                                            <td>₹60</td>
                                            <td>50</td>
                                            <td>₹3000</td>

                                        </tr>

                                        <tr>

                                            <td>Vaja</td>
                                            <td>₹10</td>
                                            <td>60</td>
                                            <td>₹600</td>

                                        </tr>

                                        <tr>

                                            <td>Misti Doi</td>
                                            <td>₹15</td>
                                            <td>54</td>
                                            <td>₹810</td>

                                        </tr>

                                        <tr>

                                            <td>Egg curry</td>
                                            <td>₹20</td>
                                            <td>50</td>
                                            <td>₹1000</td>

                                        </tr>

                                        <tr>

                                            <td>Fish curry</td>
                                            <td>₹40</td>
                                            <td>35</td>
                                            <td>₹1000</td>

                                        </tr>

                                        <tr>

                                            <td>Fish curry</td>
                                            <td>₹40</td>
                                            <td>35</td>
                                            <td>₹1000</td>

                                        </tr>

                                        <tr>

                                            <td>Fish curry</td>
                                            <td>₹40</td>
                                            <td>35</td>
                                            <td>₹1000</td>

                                        </tr>

                                        <tr>

                                            <td>Fish curry</td>
                                            <td>₹40</td>
                                            <td>35</td>
                                            <td>₹1000</td>

                                        </tr>

                                        <tr>

                                            <td>Fish curry</td>
                                            <td>₹40</td>
                                            <td>35</td>
                                            <td>₹1000</td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="main-content" id="Accounts">

        <div class="main3">

            <div class="account-cards">

                <div class="account-card-single">
                    <div>
                        <h2>Date Search</h2>
                        <input type="date" id="time">
                    </div>
                    <div>
                        <span class="bx bxs-time"></span>
                    </div>
                </div>

                <div class="account-card-single">
                    <div>
                        <h1>100</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="bx bxs-shopping-bag-alt"></span>
                    </div>
                </div>

                <div class="account-card-single">
                    <div>
                        <h1>54</h1>
                        <span>Order Complete</span>
                    </div>
                    <div>
                        <span class="bx bxs-badge-check"></span>
                    </div>
                </div>

                <div class="account-card-single">
                    <div>
                        <h1>₹12000</h1>
                        <span>Earing</span>
                    </div>
                    <div>
                        <span class="bx bxs-wallet"></span>
                    </div>
                </div>

                <div class="account-card-single">
                    <div>
                        <h1>Veg-Thali</h1>
                        <span>Top Ordering Dish</span>
                    </div>
                    <div>
                        <span class="bx bxs-badge-check"></span>
                    </div>
                </div>

                <div class="account-card-single">
                    <div>
                        <h1>₹1200</h1>
                        <span>Earing from Top Ordering Dish</span>
                    </div>
                    <div>
                        <span class="bx bxs-wallet"></span>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!----------  logout section  ---------->

     <div class="main-content" id="Logout">

        <div class="main4">

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">

                                <table width="100%">

                                    <div class="code-header">
                                        <h2>Don't worry your data will be safe here :)</h2>
                                    </div>

                                    <div class="code-body">

                                        <div class="table-responsive">

                                            <div width="100%">
                                                <div class="order-code">
                                                    <div id="wrapper2">

                                                        <img src="/image/confused.png" width="150">

                                                        <h5 id="tag2">Do you really want to Logout?</h5>

                                                        <div id="form2">

                                                            <div class="code-button2">
                                                                <button class="btn btn-primary btn-embossed" id="bu1">No</button>
                                                            </div>

                                                            <div class="code-button3">
                                                            <form action="{{ route('logout') }}" method="POST">
                                                                @csrf
                                                                @php
                                                                    session()->reflash();
                                                                @endphp
                                                                <button class="btn btn-primary btn-embossed" id="bu">Yes</button>
                                                            </form>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="/js/admin.js"></script>
</body>
</html>
