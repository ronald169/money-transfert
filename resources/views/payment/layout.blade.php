<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kimya | Paiment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('payment/img/logo/favicon.ico')}}">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('payment/css/bootstrap.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('payment/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('payment/css/owl.transitions.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('payment/css/animate.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('payment/css/meanmenu.min.css')}}">
    <!-- Nice-select css -->
    <link rel="stylesheet" href="{{asset('payment/css/nice-select.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('payment/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('payment/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('payment/css/flaticon.css')}}">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{asset('payment/css/magnific.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('payment/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('payment/css/responsive.css')}}">

    <!-- modernizr css -->
    <script src="{{asset('payment/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="preloader"></div>
@include('front.header.header')
<!-- header end -->
<!-- Start Slider Area -->
@yield('main')
<!-- End Banner Area -->

<!-- Start Footer Area -->
@include('front.header.footer')
<!-- End Footer Area -->

<!-- all js here -->

<!-- jquery latest version -->
<script src="{{ asset('payment/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('payment/js/bootstrap.min.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('payment/js/owl.carousel.min.js') }}"></script>
<!-- stellar js -->
<script src="{{ asset('payment/js/jquery.stellar.min.js') }}"></script>
<!-- Counter js -->
<script src="{{ asset('payment/js/jquery.counterup.min.js') }}"></script>
<!-- waypoint js -->
<script src="{{ asset('payment/js/waypoints.js') }}"></script>
<!-- magnific js -->
<script src="{{ asset('payment/js/magnific.min.js') }}"></script>
<!-- Nice-select js -->
<script src="{{ asset('payment/js/jquery.nice-select.min.js') }}"></script>
<!-- wow js -->
<script src="{{asset('payment/js/wow.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{ asset('payment/js/jquery.meanmenu.js') }}"></script>
<!-- Form validator js -->
<script src="{{asset('payment/js/form-validator.min.js')}}"></script>
<!-- plugins js -->
<script src="{{ asset('payment/js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{asset('payment/js/main.js')}}"></script>

@yield('javascript')
</body>
</html>
