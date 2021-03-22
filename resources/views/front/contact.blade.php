@extends('front.layout')

@section('main')

    <!-- Page Header
============================================= -->
    <section class="page-header page-header-text-light bg-dark-3 py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <ul class="breadcrumb mb-0">
                        <li><a href="{{ route('welcome') }}">Acceuil</a></li>
                        <li class="active">Contactez nous</li>
                    </ul>
                </div>
                <div class="col-12">
                    <h1>Contactez nous</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Content
  ============================================= -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-white shadow-md rounded h-100 p-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-map-marker-alt"></i></div>
                            <h3>Kimya Inc.</h3>
                            <p>4th Floor, Plot No.22, Above Public Park<br>
                                145 Murphy Canyon Rd.<br>
                                Suite 100-18<br>
                                San Diego CA 2028 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="bg-white shadow-md rounded h-100 p-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-phone"></i> </div>
                            <h3>Telephone</h3>
                            <p class="mb-0">(+33) 9898998</p>
                            <p>(+33) 8898808</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="bg-white shadow-md rounded h-100 p-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-envelope"></i> </div>
                            <h3>Demandes de renseignements commerciaux</h3>
                            <p>info@kimya.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="text-center py-5 px-2">
                        <h2 class="text-8">Entrer en contact</h2>
                        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex flex-column">
                            <ul class="social-icons social-icons-lg social-icons-colored justify-content-center">
                                <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                                <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" title="" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="" data-original-title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/" target="_blank" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="hero-wrap section shadow-md">
            <div class="hero-mask opacity-9 bg-primary"></div>
            <div class="hero-bg" style="background-image:url({{asset('images/bg/image-2.jpg')}});"></div>
            <div class="hero-content">
                <div class="container text-center">
                    <h2 class="text-9 text-white">Support client exceptionnel</h2>
                    <p class="text-4 text-white mb-4">Avez-vous des questions? Ne t'inquiète pas. Nous avons des personnes formidables prêtes à vous aider chaque fois que vous en avez besoin.</p>
                    <a href="#" class="btn btn-light">En savoir plus</a> </div>
            </div>
        </section>
        <!-- Content end -->
    </div>
    <!-- Document Wrapper end -->

@endsection
