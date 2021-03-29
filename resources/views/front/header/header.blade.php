<header class="header-one">
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-2 col-sm-2">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll white-logo" href="{{ route('welcome') }}"
                                style="padding-bottom: 0px; padding-right: 0px; padding-top: 0px; padding-left: 0px;">
                                    <img src="{{asset('images/logo_kimya.png')}}" alt="" style="margin-top: 10%;">
                                </a>
                                <a class="navbar-brand page-scroll black-logo" href="{{ route('welcome') }}"
                                   style="padding-bottom: 0px; padding-right: 0px; padding-top: 0px; padding-left: 0px;">
                                    <img src="{{asset('images/logo_kimya.png')}}" alt="" style="margin-top: 10%;">
                                </a>
                            </div>
                            <!-- logo end -->
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <div class="header-right-link">
                                <!-- search option end -->
                                <a class="s-menu" href="{{route('login')}}">connecter</a>
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="{{ route('about') }}">A propos</a></li>
                                            <li><a href="{{ route('help') }}">Aide</a></li>
                                            <li><a href="{{ route('contact') }}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="{{ route('welcome') }}"><img src="{{asset('images/logo_kimya.png')}}" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ route('about') }}">A propos</a></li>
                                <li><a href="{{ route('help') }}">Aide</a></li>
                                <li><a href="{{ route('contact') }}">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
