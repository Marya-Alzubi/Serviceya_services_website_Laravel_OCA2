<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Blog ">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Services">
    <meta property="og:description" content=" Focus on reaching global needs and easily adapt our technology in new markets to help more families and save lives">
    <meta name="keywords" content="Blog,Services, Cleaning ,Elderly people care ,Women empowerment,Servecya ,Service provider, employment ,Laravel, Php, CSS , JavaScript, Bootstrap, Web Developer,">
    <meta name="author" content="Hana Shaq & Osama Aldamat & marya Alzu'bi & Omar  Alnawaiseh & marina alsahawneh ">

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
                            <a class="navbar-brand" href="/landing_page">
                                <img src="{{URL::asset('main/images/logo.svg')}}" alt="Logo">
                            </a> <h4>Serviceya</h4>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="/landing_page{{URL::asset('#home')}}">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/landing_page{{URL::asset('#service')}}">SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/landing_page{{URL::asset('#AboutUs')}}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/landing_page{{URL::asset('#Pricing')}}">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/landing_page{{URL::asset('#contact')}}">CONTACT</a>
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
    <section id="service" class="services-area">
        <div class="container">





      @yield('main')


      </div>

       </section>


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
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link">
                          <div class="container">
                              <div class="row row-cols-2">
                                <div class="col"><img src="{{URL::asset('main/images/visa.png')}}" class="rounded" alt="..."></div>

                              </div>
                          </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
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


    {{-- Marya code for pop up  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if(session('status_store'))
        swal({
            title: "{{session('status_store')}}",
            icon: "success",
            {{--icon: "{{session('statuscode')}}",--}}
            button: "ok",
        });
        @endif
        @if(session('status_update'))
        swal({
            title: "{{session('status_update')}}",
            icon: "success",
            button: "ok",
        });
        @endif
        @if(session('status_destroy'))
        swal({
            title: "{{session('status_destroy')}}",
            icon: "error",
            button: "ok",
        });
        @endif
    </script>
</body>
</html>
