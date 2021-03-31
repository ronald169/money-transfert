<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{asset('images/logo/favicon.png')}}" rel="icon" />
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Meilleur solution de transfert d'artgent de l'Europe vers l'Afrique">
    <meta name="author" content="upsylone.com">

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
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('payment/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('payment/css/responsive.css')}}">
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
    @include('front.header.header')
{{--    @auth()--}}
{{--        @include('front.header-auth')--}}
{{--    @endauth--}}

{{--    @guest()--}}
{{--        @include('front.header-guest')--}}
{{--    @endguest--}}
    <!-- Header End -->

    <!-- Content
    ============================================= -->
    @yield('main')
    <!-- Content end -->

    <!-- Footer
    ============================================= -->
    @include('front.footer')
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
