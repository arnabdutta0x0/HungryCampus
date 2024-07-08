  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{asset('css/signpage.css')}}">
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

      <div class="scroll-up-btn">
          <i class="fas fa-angle-up"></i>
      </div>

      <section class="wellcome">
          <div>
              <ul class="nav">
                  <li>
                      <a href="#home">Home</a>
                  </li>
                  <li>
                      <a href="#login">Login</a>
                  </li>
                  <li>
                      <a href="#team">Vision</a>
                  </li>
              </ul>
          </div>
      </section>

      <!----------Home Section---------->

      <section class="home" id="home">
          <div class="home-down">
              <p id="h2">Say goodbye to long lines and hello to online food tickets.</p>
          </div>
      </section>


      <!----------Login Section---------->

      <section class="login" id="login">

          <div class="container">

              <div class="login-left">

                  <div class="book">

                      <img src="/image/booking.png" alt="booking" width="200" height="200">

                      <h1 id="p">Your Order <br>Our Responsibility</h1>

                  </div>

              </div>

              <div class="login-right">

                  <form class="login-form" method="POST" action="{{ route('signup') }}">
                      @csrf
                      <div class="login-header">

                          <div class="log">

                              <h1 id="p">Sign Up to Us</h1>

                          </div>

                      </div>

                      <div class="login-form-content">

                          <div class="par">

                              <p id="tt">Let's get you started !</p>

                              <div class="form-item">

                                  <div class="field">
                                      <label for="email">Enter Username</label><br>
                                  </div>

                                  <input type="text" class="input" placeholder="Username" name="username" required>

                              </div>

                              <div class="form-item">

                                  <div class="field">
                                      <label for="email">Enter Email Address</label><br>
                                  </div>

                                  <input type="text" class="input" placeholder="Email Address" name="email" required>

                              </div>

                              <div class="form-item">

                                  <div class="field">
                                      <label for="password">Enter Password</label><br>
                                  </div>

                                  <input type="password" class="input" placeholder="Password" name="password"
                                      minlength="6" required>

                              </div>

                          </div>

                          <div class="form-item">

                              <br><button type="submit" class="but" id="signup" name="signup">Sign Up</button>
                              @if(isset($msg))
                              <div class="alert alert-success">
                                  {{ $msg }}
                              </div>
                              @endif

                          </div>

                      </div><br>

                      <div class="toggle">
                          <button class="new" id="loginButton" type="button">
                              <b>Sign In</b>
                          </button>
                          <button class="new" id="signupButton" type="button" style="display:none;">
                              <b>Sign Up</b>
                          </button>
                      </div>

                  </form>



                  <!-- from 2 -->

                  <form class="signup-form" method="POST" action="{{ route('signin') }}" style="display: none">
                      @csrf
                      <!-- Add your sign-up form content here -->
                      <div class="login-header">

                          <div class="log">
                              <h1 id="p">Sign In to Us</h1>
                          </div>

                      </div>

                      <div class="login-form-content">

                          <div class="par">
                              <p id="tt">To Help us find your details for your preferred dishes, and book ticket of your
                                  food.</p>

                              <div class="form-item">

                                  <div class="field">
                                      <label for="email">Enter Email Address</label><br>
                                  </div>

                                  <input type="text" class="input" placeholder="Email-Address" name="email2" required>

                              </div>

                              <div class="form-item">

                                  <div class="field">
                                      <label for="password">Enter Password</label><br>
                                  </div>

                                  <input type="password" class="input" placeholder="Password" name="password2" required>

                                  <br><br><a href="{{ url('/forgot') }}" id="fp">Forgot Password?</a>

                              </div>
                          </div>

                          @if(isset($error))
                          <div class="alert alert-danger">
                              {{ $error }}
                          </div>
                          @endif

                          <div class="form-item">

                              <br><button type="submit" class="but" id="signin" value="Login" name="signin">Sign
                                  In</button>

                              <div class="checkbox">
                                  <br><input type="checkbox" class="rem"><label for="rememberMeCheckbox">Remember
                                      me</label>
                              </div>

                          </div>

                      </div><br>



                      <div class="toggle">

                          <button class="new" onclick="location.reload()" type="button">
                              <b>Sign Up</b>
                          </button>

                      </div>

                  </form>

              </div>
          </div>
      </section>

      <!----------Team Section---------->
      <section class="team" id="team">

          <div class="tag">
              <h1 id="p">Vision</h1>
              <p id="tc">We want to see the world more fair and transparent. We are building the missing puzzles in
                  order to see our vision come true.</p>
          </div>

          <div class="list">
              <div class="team-left">

                  <div class="box">
                      <img width="300" src="{{asset('image/arnab.jpeg')}}" alt="arnab" id="arnab">
                      <h2 id="name">Arnab Dutta</h2>

                      <div class="social">
                          <a href="https://www.linkedin.com/in/arnabkumardutta09" id="social2"><i
                                  class="fab fa-linkedin-in"></i></a>
                          <a href="https://www.instagram.com/nox_arnab" id="social"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.facebook.com/arnab.dutta.792197" id="social"><i
                                  class="fab fa-facebook"></i></a>
                      </div>
                  </div>

              </div>

              <div class="team-right">

                  <div class="team-vision">

                      <h1 id="msg">Vision</h1>

                      <p id="tp">At HungryCampus, I am driven by a vision to leverage my expertise in essential
                          programming languages such as HTML, CSS, JavaScript, PHP, and DBMS, aiming to create an
                          innovative web application. I am dedicated to realizing my vision of simplifying the process
                          of purchasing food tickets online. My aspiration is to develop a user-friendly, intuitive, and
                          secure platform that provides users with a seamless, convenient, and reliable food ordering
                          experience. My goal extends beyond merely streamlining the process of purchasing food tickets;
                          I also aim to promote healthy eating habits and support local food vendors. I firmly believe
                          that, with the right approach, my web application can make a significant impact in the food
                          industry. I am excited about working towards bringing this vision to life.
                      </p>

                  </div>

              </div>

          </div>
      </section>

      <script src="{{asset('js/signpage.js')}}"></script>
  </body>

  </html>