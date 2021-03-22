<header id="header">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                <!-- Logo
                ============================= -->
                <div class="logo">
                    <a class="d-flex" href="index.html" title="Payyed - HTML Template">
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
                            <li class="active"><a href="{{ route('profile.show') }}">Dashboard</a></li>
                            <li><a href="transactions.html">Transactions</a></li>
                            <li><a href="send-money.html">Send/Request</a></li>
                            <li><a href="help.html">Help</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Primary Navigation end -->
            </div>
            <div class="header-column justify-content-end">
                <!-- My Profile
                ============================== -->
                <nav class="login-signup navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="dropdown language"> <a class="dropdown-toggle" href="#">En</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">French</a></li>

                            </ul>
                        </li>
                        <li class="dropdown notifications"> <a class="dropdown-toggle" href="#"><span class="text-5"><i class="far fa-bell"></i></span><span class="count">3</span></a>
                            <ul class="dropdown-menu">
                                <li class="text-center text-3 py-2">Notifications (3)</li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new digital FIRC document is available for you to download<span class="text-1 text-muted d-block">22 Jul 2020</span></a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates to our privacy policy. Please read.<span class="text-1 text-muted d-block">04 March 2020</span></a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update about Payyed fees<span class="text-1 text-muted d-block">18 Feb 2020</span></a></li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item text-center text-primary px-0" href="notifications.html">See all Notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown profile ml-2"> <a class="px-0 dropdown-toggle" href="#"><img class="rounded-circle" src="{{asset('images/profile-thumb-sm.jpg')}}" alt=""></a>
                            <ul class="dropdown-menu">
                                <li class="text-center text-3 py-2">{{ auth()->user()->name }}</li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="fas fa-user"></i>Mon Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-shield-alt"></i>Security</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-credit-card"></i>Payment Methods</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Notifications</a></li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item" href=""><i class="fas fa-life-ring"></i>Need Help?</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" hidden>
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{route('logout')}}"
                                        onclick="event.preventDefault(); this.previousElementSibling.submit();">
                                        <i class="fas fa-sign-out-alt"></i>Sign Out
                                    </a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- My Profile end -->
            </div>
        </div>
    </div>
</header>
