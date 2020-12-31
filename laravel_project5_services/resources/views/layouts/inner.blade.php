<!doctype html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>@yield('title')</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{URL::asset('main/images/favicon.png')}}" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{URL::asset('main/css/bootstrap.min.css')}}">
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{URL::asset('main/css/LineIcons.css')}}">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{URL::asset('main/css/magnific-popup.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{URL::asset('main/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{URL::asset('main/css/style.css')}}">
</head>
<body>
    <!--====== HEADER PART START ======-->
    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="{{URL::asset('main/images/logo.svg')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#AboutUs">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#Pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                         <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
             <!-- container -->
        </div>
         <!-- navgition -->
         @yield('header_content')
    </header>
    <!--====== HEADER PART ENDS ======-->
      @yield('main')
    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <div class="footer-logo d-flex align-items-end">
                                <a class="mt-30" href="index.html"><img src="{{URL::asset('main/images/logo.svg')}}" alt="Logo"></a>
                                <ul class="social mt-30">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- footer logo -->
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#AboutUs">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTACT</a>
                                    </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Services</h6>
                            <ul>
                                <li><a href="#">House Cleaning</a></li>
                                <li><a href="#">Health Care For The Elderly</a></li>
                                <li><a href="#">Childcare</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Template Crafted by <a rel="nofollow" href="https://uideck.com">UIdeck</a> - UI Powered by <a el="nofollow" href="https://rebrand.ly/ayroui">AyroUI</a></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    <!--====== FOOTER PART ENDS ======-->
    <!--====== BACK TO TOP PART START ======-->
    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>
    <!--====== BACK TO TOP PART ENDS ======-->
    <!--====== jquery js ======-->
    <script src="{{URL::asset('main/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('main/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{URL::asset('main/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('main/js/popper.min.js')}}"></script>
    <!--====== Scrolling Nav js ======-->
    <script src="{{URL::asset('main/js/jquery.easing.min.js')}}"></script>
    <script src="{{URL::asset('main/js/scrolling-nav.js')}}"></script>
    <!--====== Magnific Popup js ======-->
    <script src="{{URL::asset('main/js/jquery.magnific-popup.min.js')}}"></script>
    <!--====== Main js ======-->
    <script src="{{URL::asset('main/js/main.js')}}"></script>
</body>
</html>
