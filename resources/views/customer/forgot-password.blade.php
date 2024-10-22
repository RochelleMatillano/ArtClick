<!DOCTYPE html>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ArtClick</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('customer/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('customer/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('customer/images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('customer/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('customer/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('customer/images/icons/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('customer/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('customer/css/bootstrap.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('customer/css/style.css') }}">
</head>

<body>
    <div class="page-wrapper">
    <header class="header">
      <div class="header-top">
        <div class="container"></div>
        <!-- End .container -->
      </div>
      <!-- End .header-top -->

      <div class="header-middle sticky-header">
        <div class="container">
          <div class="header-left">
            <button class="mobile-menu-toggler">
              <span class="sr-only">Toggle mobile menu</span>
              <i class="icon-bars"></i>
            </button>

            <a href="index-1.html" class="logo">
              <img
                src="{{ asset('customer/images/logo.png') }}"
                alt="Molla Logo"
                width="105"
                height="25" />
            </a>

            <nav class="main-nav">
              <ul class="menu sf-arrows">
                <li>
                  <a href="{{ route('homepage') }}" class="sf-with-ul">Home</a>
                </li>
                <li>
                  <a href="{{ route('shop-category') }}" class="sf-with-ul">Shop</a>
                </li>
                <li>
                  <a href="{{ route('gallery') }}" class="sf-with-ul">Gallery</a>
                </li>

                <li>
                  <a href="{{ route('announcement') }}" class="sf-with-ul">Announcement</a>
                </li>
                <li class="megamenu-container active">
                  <a href="{{ route('about') }}" class="sf-with-ul">About</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}" class="sf-with-ul">Contact</a>
                </li>
              </ul>

              <!-- End .menu -->
            </nav>
            <!-- End .main-nav -->
          </div>
          <!-- End .header-left -->

          <div class="header-right">
            <div class="header-search">
              <a href="#" class="search-toggle" role="button" title="Search"><i
                  class="icon-search"></i></a>
              <form action="#" method="get">
                <div class="header-search-wrapper">
                  <label for="q" class="sr-only">Search</label>
                  <input type="search" class="form-control" name="q" id="q" placeholder="Search in..."
                    required />
                </div>
                <!-- End .header-search-wrapper -->
              </form>
            </div>
            <!-- End .header-search -->
            <div class="dropdown compare-dropdown">
              <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-display="static"
                title="Account" aria-label="Compare Products">
                <i class="icon-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-cart-action">
                  <a href="cart.html" class="btn btn-primary">Account</a>
                  <a href="{{ route('signin') }}" class="btn btn-outline-primary-2"><span>Sign Up</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .dropdown-cart-total -->
              </div><!-- End .dropdown-menu -->
            </div>
            <!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
              <a href="{{ route('cart') }}" class="dropdown-toggle" role="button">
                <i class="icon-shopping-cart"></i>
              </a>


              <!-- End .dropdown-menu -->
            </div>
            <!-- End .cart-dropdown -->
          </div>
          <!-- End .header-right -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-middle -->
    </header>
        <!-- End .header -->

        <main class="main">

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
                style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
                <div class="container">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                        role="tab" aria-controls="register-2" aria-selected="true">Forgot Password</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                                    aria-labelledby="register-tab-2">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email-2">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email-2"
                                                name="register-email" required>
                                        </div><!-- End .form-group -->


                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SUBMIT</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                     
                                        <div class="row">
                                            
                                            
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105"
                                    height="25" />
                                <p>
                                    Asiano's Arts and Crafts offers handmade creations
                                    by skills artisan, showcasing authentic, high-quality
                                    products that blend traditon and creativity.
                                </p>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                                            class="icon-youtube"></i></a>
                                </div>
                                <!-- End .soial-icons -->
                            </div>
                            <!-- End .widget about-widget -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4>
                                <!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Asiano</a></li> <!-- wala pang html ito-->
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login.html">Register</a></li>
                                </ul>
                                <!-- End .widget-list -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->


                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="login.html">Account</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                </ul>
                                <!-- End .widget-list -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->


        </footer>
        <!-- End .footer -->

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a href="index-1.html">Home</a>
                    </li>
                    <li>
                        <a href="category-fullwidth.html">Shop</a>

                    </li>
                    <li>
                        <a href="index-7.html" class="sf-with-ul">Gallery</a>
                    </li>
                    <li>
                        <a href="blog-mask-masonry.html">Announcement</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">contact</a>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                        aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember
                                                    Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy"
                                                    required>
                                                <label class="custom-control-label" for="register-policy">I agree to the
                                                    <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="{{ asset('customer/js/jquery.min.js') }}"></script>
    <script src="{{ asset('customer/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('customer/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('customer/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('customer/js/superfish.min.js') }}"></script>
    <script src="{{ asset('customer/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('customer/js/main.js') }}"></script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->

</html>