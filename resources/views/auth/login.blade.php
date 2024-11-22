

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
    <link rel="shortcut icon" href="{{ asset('manager/img/artclick-shortcut-icon.png') }}">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}'
                });
            @endif
        });
    </script>
       <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    text: '{{ session('error') }}'
                });
            @endif
        });
    </script>

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

            @include('includes.nav')
            <!-- End .main-nav -->
          </div>
          <!-- End .header-left -->

          <div class="header-right">
          <div class="header-search">
            <form action="{{route('search')}}" method="get">
              <a href="#" type="submit" name="submit" class="search-toggle" role="button" title="Search"><i
                  class="icon-search"></i></a>
                <div class="header-search-wrapper">
                  <label for="q" class="sr-only">Search</label>
                  <input type="search" class="form-control" name="search" id="q" placeholder="Search in..."
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
                 @if(Auth::user())
                  <a href="{{ route('account') }}" class="btn btn-primary">Account</a>
                  @endif
                  @if(Auth::user())
                  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary-2"><span>Log out</span><i class="icon-long-arrow-left"></i></button>
                </form>
                  @else
                  <a href="{{route('login')}}" class="btn btn-outline-primary-2" style="width: 250px;"><span>Sign Up</span><i class="icon-long-arrow-right"></i></a>
                  @endif
                </div><!-- End .dropdown-cart-total -->
              </div><!-- End .dropdown-menu -->
            </div>
            <!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
              <a href="{{ route('customer.cart') }}" class="dropdown-toggle" role="button">
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
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('customer/images/backgrounds/homepage.jpg') }}'); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                        aria-controls="signin-2" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2"
                                        role="tab" aria-controls="register-2" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                    <form  method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="singin-email-2">Email address *</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password-2">Password *</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" name="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">RememberMe</label>
                                        </div>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="forgot-link">Forgot Your Password?</a>
                                            @endif
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade " id="register-2" role="tabpanel"
                                    aria-labelledby="register-tab-2">
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="last_name">Last Name *</label>
                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" id="last_name" required>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name">First Name *</label>
                                            <input type="text" class="form-control  @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" id="first_name"  required>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number *</label>
                                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" required>
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your email address *</label>
                                            <input type="email" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="street_address">Street Address *</label>
                                            <input type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" id="street_address" required>
                                            @error('street_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="barangay">Barangay *</label>
                                            <input type="text" class="form-control @error('barangay') is-invalid @enderror" name="barangay" value="{{ old('barangay') }}" id="barangay" required>
                                            @error('barangay')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="town_city">Town City *</label>
                                            <input type="text" class="form-control @error('town_city') is-invalid @enderror" name="town_city" value="{{ old('town_city') }}" id="town_city" required>
                                            @error('town_city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="profile_image">Profile Image *</label>
                                            <input type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" value="{{ old('profile_image') }}" id="profile_image" required>
                                            @error('profile_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password *</label>
                                            <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">Confirm Password *</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div><!-- End .form-group -->
                                        <div class="form-footer">
                                            <button type="submit" name="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="register-policy-2" required>
                                                <label class="custom-control-label" for="register-policy-2">
                                                    I agree to the
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#termsModal">Terms and Conditions</a> *
                                                </label>
                                            </div><!-- End .custom-checkbox -->

                                            <!-- Terms and Conditions Modal -->
                                            <div class="modal fade" id="termsModal" tabindex="-1"
                                                aria-labelledby="termsModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="termsModalLabel">Terms and
                                                                Conditions</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                Welcome to <i>ArtClick</i>, ArtClick, developed for
                                                                Asiano Arts and Crafts, is an e-commerce platform
                                                                showcasing unique arts and crafts from Palawan. By using
                                                                ArtClick, you agree to comply with and be bound by the
                                                                following terms and conditions, which govern your use of
                                                                this platform.
                                                                <br><br>

                                                                <b>Purpose</b><br>
                                                                ArtClick aims to promote Palawan’s cultural heritage
                                                                through the sale of handcrafted items. Every product
                                                                tells a story, reflecting the history and artistry of
                                                                indigenous groups from the region. Our goal is to
                                                                elevate these cultural treasures and provide an
                                                                educational experience for customers, while ensuring a
                                                                smooth online shopping experience.
                                                                <br><br>

                                                                <b>Account Registration</b><br>
                                                                - Users may need to create an account to access certain
                                                                features of the website. By registering, you agree to
                                                                provide accurate, complete information.<br>
                                                                - You are responsible for maintaining the
                                                                confidentiality of your account credentials and any
                                                                activity under your account. <br>
                                                                - We reserve the right to suspend or terminate your
                                                                account if any terms are violated.
                                                                <br><br>

                                                                <b>Pricing and Payment</b><br>
                                                                - All prices are listed in PHP and are subject to change
                                                                without prior notice.<br>
                                                                - We accept various secure payment methods, which are
                                                                displayed during checkout. You agree to provide accurate
                                                                billing details. <br>
                                                                - Orders are subject to acceptance based on product
                                                                availability.
                                                                <br><br>

                                                                <b>Shipping and Delivery</b><br>
                                                                - Shipping fees and delivery times are provided at
                                                                checkout. We will aim to deliver products promptly, but
                                                                delivery times may vary depending on the customer's
                                                                location.<br>
                                                                - Shipping fees are non-refundable.
                                                                <br><br>

                                                                <b>6. Returns and Refunds</b><br>
                                                                6.1 We accept returns for most products within 30 days
                                                                of delivery, provided that they are in their original
                                                                packaging and unused. Some products may not be eligible
                                                                for return.<br>
                                                                6.2 Refunds will be issued to the original payment
                                                                method within [X] business days after we receive the
                                                                returned product.
                                                                <br><br>

                                                                <b>7. Intellectual Property</b><br>
                                                                7.1 All content on this Site, including but not limited
                                                                to text, graphics, logos, and images, is the property of
                                                                [Your Website Name] or its content suppliers and is
                                                                protected by copyright laws.<br>
                                                                7.2 You may not use, copy, or distribute any content
                                                                from the Site without our prior written permission.
                                                                <br><br>

                                                                <b>8. Limitation of Liability</b><br>
                                                                8.1 In no case shall [Your Website Name], our directors,
                                                                officers, employees, affiliates, or service providers be
                                                                liable for any direct, indirect, incidental, punitive,
                                                                or consequential damages arising from your use of the
                                                                Site or our services.<br>
                                                                8.2 Our liability is limited to the maximum extent
                                                                permitted by law.
                                                                <br><br>

                                                                <b>9. Third-Party Links</b><br>
                                                                9.1 Our Site may include links to third-party websites.
                                                                We are not responsible for the content, policies, or
                                                                practices of any third-party sites.<br>
                                                                9.2 You acknowledge and agree that we shall not be
                                                                liable for any damage or loss caused by visiting such
                                                                third-party sites.
                                                                <br><br>

                                                                <b>10. Governing Law</b><br>
                                                                10.1 These terms shall be governed by and construed in
                                                                accordance with the laws of [Country/State].<br>
                                                                10.2 Any disputes arising under these terms will be
                                                                resolved through arbitration in [Location].
                                                                <br><br>

                                                                <b>11. Changes to Terms and Conditions</b><br>
                                                                11.1 We reserve the right to modify these terms at any
                                                                time. Any changes will be effective upon posting on the
                                                                Site.<br>
                                                                11.2 It is your responsibility to review these terms
                                                                periodically for updates.
                                                                <br><br>
                                                            </p>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End .modal -->

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

        @include('includes.footer')

</div><!-- End .page-wrapper -->
@include('includes.mobile-nav')

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->

</html>