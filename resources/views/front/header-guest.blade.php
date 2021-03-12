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
