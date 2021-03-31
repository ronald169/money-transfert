@extends('payment.layout')

@section('main')

    <div class="slide-area slide-area-2 fix" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="slide-text-inner" style="display: flex;">
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin: auto;">
                                <!-- Start Slider content -->
                                <div class="slide-content">
{{--                                    <h4 class="title2"></h4>--}}
                                    <h2 class="title2">Envoi rapide vers la RDCongo</h2>
                                    <p>Envoyer de l'argent en toute sécurité de la Diaspora vers la RDC avec les meilleurs taux de change bien à moindre coût.</p>
                                    <div class="layer-1-3">
                                        <a href="#" class="ready-btn left-btn" >Commencer</a>
                                        <div class="video-content">
                                            <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                                <i class="fa fa-play"></i>
                                                <span>regarder la vidéo</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Slider content -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                @include('payment.money-send')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start How to area -->
    <div class="how-to-area how-to-area-2 area-padding">
        <div class="container">
            <div class="row">
                <div class="all-services">
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services first-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="well-img">
                                <a class="big-icon" href="#"><i class="flaticon-user-12"></i></a>
                            </div>
                            <div class="main-wel">
                                <div class="wel-content">
                                    <h4><span>01.</span>Créer un compte</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. Les agences définissent leurs nouveaux objectifs commerciaux puis créent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services wow fadeInUp" data-wow-delay="0.5s">
                            <div class="well-img">
                                <a class="big-icon" href="#"><i class="flaticon-building"></i></a>
                            </div>
                            <div class="main-wel">
                                <div class="wel-content">
                                    <h4><span>02.</span>Joindre des comptes bancaires</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. Les agences définissent leurs nouveaux objectifs commerciaux puis créent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services thired-item wow fadeInUp" data-wow-delay="0.7s">
                            <div class="well-img">
                                <a class="big-icon" href="#"><i class="flaticon-worldwide"></i></a>
                            </div>
                            <div class="main-wel">
                                <div class="wel-content">
                                    <h4><span>03.</span>Envoyer de l'argent</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. Les agences définissent leurs nouveaux objectifs commerciaux puis créent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                </div>
            </div>
        </div>
    </div>
    <!-- End How to area -->

    <!-- Start About Area -->
    <div class="about-area bg-color fix area-padding" style="background: #fafafa;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Pourquoi choisir la plateforme en ligne Paiment</h3>
                        <p>Aider les agences à définir leurs nouveaux objectifs commerciaux puis à créer des logiciels professionnels.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="support-all">
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services wow ">
                            <a class="support-images" href="#"><i class="flaticon-like-2"></i></a>
                            <div class="support-content">
                                <h4>Services professionnels</h4>
                                <p>Le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux puis à créer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-transfer-3"></i></a>
                            <div class="support-content">
                                <h4>Faible coût</h4>
                                <p>Le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux puis à créer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-user-4"></i></a>
                            <div class="support-content">
                                <h4>Support en direct</h4>
                                <p>Le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux puis à créer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-padlock"></i></a>
                            <div class="support-content">
                                <h4>Sûr et sécurisé</h4>
                                <p>Le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux puis à créer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="about-contact text-center">
                            <div class="about-btn">
                                <a class="ab-btn left-ab-btn" href="about.html">En savoir plus sur nous</a>
                                <a class="ab-btn right-ab-btn" href="about.html">Créer un compte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- service area start -->

    <!-- service area End -->

    <!-- Start Feature Area -->

    <!-- End Feature Area -->

    <!-- Start brand Banner area -->
    <div class="brand-area area-padding fix" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="brand-text text-center">
                        <h3> Nous sommes heureux de la construction de nos relations avec les partenaires commerciaux</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-area-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="brand-content" style="box-shadow: 0 5px 25px rgb(0 0 0 / 10%);">
                        <div class="brand-items">
                            <div class="single-brand-item">
                                <a href="#"><img src="{{asset('img/client/1.png')}}" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{asset('img/client/2.png')}}" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{asset('img/client/3.png')}}" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{asset('img/client/4.png')}}" alt=""></a>
                            </div>
                        </div>
                        <a class="hire-btn" href="#">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End brand Banner area -->

    <!-- Start testimonials Area -->
    <!-- End testimonials end -->

    <!--Blog Area Start-->
    <!--End of Blog Area-->

    <!-- Start Download area -->
    <div class="download-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <!-- Start Column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="download-image">
                        <img src="{{asset('img/about/ab1.png')}}" alt="download-image">
                    </div>
                </div>
                <!-- End Column -->
                <!-- Start Column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="download-text">
                        <h3>Téléchargez nos applications de votre téléphone mobile pour le service</h3>
                        <p>Le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux, puis à créer le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux, puis à créer le remplacement d'un maintient le nombre de lignes. Lors du remplacement d'une sélection. aider les agences à définir leurs nouveaux objectifs commerciaux puis à créer</p>
                        <div class="down-btn" data-wow-delay="0.7s">
                            <a href="#" class="app-btn left-btn">Play store</a>
                            <a href="#" class="app-btn right-btn">App store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Download area -->

    <!-- Start Banner Area -->
    <div class="banner-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-all area-80 text-center">
                        <div class="banner-content">
                            <h3>Notre partenaire d'intégration mondial travaille avec une relation de longue date</h3>
                            <a class="banner-btn" href="{{ route('register') }}">Ouvrir un nouveau compte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
