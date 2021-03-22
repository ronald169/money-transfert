<header id="header">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                <!-- Logo
                ============================= -->
                <div class="logo">
                    <a class="d-flex" href="{{route('welcome')}}" title="Kimya">
{{--                        <img src="{{asset('images/logo.png')}}" alt="Payyed" />--}}
                        <h1 class="text-primary">KIMYA</h1>
                    </a>
                </div>
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
                            <li><a href="{{ route('about') }}">A propos de nous</a></li>
                            <li><a href="{{ route('help') }}">Aide</a></li>
                            <li><a href="{{ route('contact') }}">Contactez nous</a></li>
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
                        <li><a href="{{ route('login') }}">Se connecter</a> </li>
                        <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary" href="{{route('register')}}">S'inscrire</a></li>
                    </ul>
                </nav>
                <!-- Login & Signup Link end -->
            </div>
        </div>
    </div>
</header>
