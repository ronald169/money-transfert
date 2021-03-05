<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Payyed - Money Transfer and Online Payments HTML Template</title>
    <meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
    ============================================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap-select/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/currency-flags/css/currency-flags.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">

    <!-- Header
    ============================================= -->
    <header id="header">
        <div class="container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <!-- Logo
                    ============================= -->
                    <div class="logo"> <a class="d-flex" href="{{route('welcome')}}" title="Payyed - HTML Template"><img src="{{asset('images/logo.png')}}" alt="Payyed" /></a> </div>
                    <!-- Logo end -->
                    <!-- Collapse Button
                    ============================== -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                    <!-- Collapse Button end -->

                    <!-- Primary Navigation
                    ============================== -->
                    <nav class="primary-menu navbar navbar-expand-lg">
                        <div id="header-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="active"><a href="landing-page-send.html">Send</a></li>
                                <li><a href="landing-page-receive.html">Receive</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="fees.html">Fees</a></li>
                                <li><a href="help.html">Help</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Primary Navigation end -->
                </div>
                <div class="header-column justify-content-end">
                    <!-- Login & Signup Link
                    ============================== -->
                    <nav class="login-signup navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li><a href="{{ route('login') }}">@lang('Login')</a> </li>
                            <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary" href="{{route('register')}}">@lang('Sign Up')</a></li>
                        </ul>
                    </nav>
                    <!-- Login & Signup Link end -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content
    ============================================= -->
    @yield('main')
    <!-- Content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg d-lg-flex align-items-center">
                    <ul class="nav justify-content-center justify-content-lg-start text-3">
                        <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
                    </ul>
                </div>
                <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                    <ul class="social-icons justify-content-center">
                        <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                        <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="" data-original-title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright pt-3 pt-lg-2 mt-2">
                <div class="row">
                    <div class="col-lg">
                        <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright © 2020 <a href="#">Payyed</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal end -->

<!-- Script -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>

@yield('javascript')
</body>
</html>
