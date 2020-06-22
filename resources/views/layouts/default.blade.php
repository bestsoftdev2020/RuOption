<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="meuagente" name="description">
    <meta content="meuagente" name="keywords">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
            | DASHBOARD
        @show
    </title>
    <!--global css starts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/style.css') }}" rel="stylesheet">
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
    <header id="header">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light pt-1"><a href="{{ route('home') }}"><span><img src="assets/images/logo.png" alt="" class="img-fluid"></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block" id="top_header">
                <ul style="position:absolute; left:40%;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" aria-expanded="false">Company</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="submenu" href="{{ URL::to('aboutus') }}">About US</a>
                            </li>
                            <li><a class="submenu" href="{{ URL::to('blog') }}">Blog</a>
                            </li>
                            <li><a class="submenu" href="#">Legal</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" aria-expanded="false">Product</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="submenu" href="#">Investiment</a>
                            </li>
                            <li><a class="submenu" href="#">Binary Options</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ URL::to('fees') }}">Fees</a></li>
                    <li><a href="{{ URL::to('faqs') }}">FAQS</a></li>
                </ul>
                <ul style="position: absolute; right:5%;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" aria-expanded="false">En</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="submenu" href="#">Ru</a>
                            </li>
                            <li><a class="submenu" href="#">En</a>
                            </li>
                            <li><a class="submenu" href="#">Es</a>
                            </li>
                        </ul>
                    </li>
                    @if(Sentinel::guest())
                        <li>
                            <a class="button-topbar" href="{{ URL::to('login') }}">Sign In</a>
                        </li>
                        <li><a class="btn btn-info button-topbar-reg" href="{{ URL::to('register') }}">Register</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ URL::to('logout') }}" class="notification">
                                <span>RV</span>
                                <span class="badge">3</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    
    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <h1><img src="assets/images/logo_white.png" alt="" class="img-fluid" style="width:250px;"></h1>
                    </div>
                    <div class="col-md-2">
                        <h3>Legal</h3>
                        <ul class="pl-0">
                            <li><a>Terms and Conditions</a></li>
                            <li><a>Privacy Notice</a></li>
                            <li><a>Risk Disciosure Statement</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h3>Good to know</h3>
                        <ul class="pl-0">
                            <li><a href="{{ URL::to('aboutus') }}">About Us</a></li>
                            <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                            <li><a href="{{ URL::to('fees') }}">Fees</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Stay in touch</h3>
                        <small>Learn how to apply technical analysis<br>to current market</small>
                        <div class="row mt-3 ml-0">
                            <button class="btn btn-info">&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;En&nbsp;</button>
                            <button class="btn btn-info ml-2">&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Ru&nbsp;</button>
                            <button class="btn btn-info ml-2">&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Es&nbsp;</button>
                        </div>
                        <div class="row mt-3 ml-0">
                            <button class="button-bottombar">Contact Us</button>
                        </div>
                        <div class="row mt-3 ml-0">
                            <img src="assets/images/coins/BTC.png" class="img-coin" alt="">
                            <img src="assets/images/coins/ETC.png" class="img-coin" alt="">
                            <img src="assets/images/coins/LTC.png" class="img-coin" alt="">
                            <img src="assets/images/coins/XRP.png" class="img-coin" alt="">
                            <img src="assets/images/coins/ZEC.png" class="img-coin" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 copyright">
                    &copy; Direito Autoral <strong><span>Ru Option</span></strong>. Todos os direitos reservados
                </div>
                <div class="col-md-4 credits">
                    Desenhado por Ru Option Design Team
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
