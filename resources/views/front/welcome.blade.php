@extends('front.layout')

@section('main')

    <div id="content">

        <!-- Send Money
        ============================================= -->
        @include('front.send-money')
        <!-- Send Money End -->

        <!-- How it works
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center"> Le moyen simple d'envoyer de l'argent</h2>
{{--                <p class="lead text-center mb-5">Kimya est simplement un faux texte de l'industrie de l'impression et de la composition.</p>--}}
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="featured-box style-3">
                            <div class="featured-box-icon text-light"><span class="w-100 text-20 font-weight-500">1</span></div>
                            <h3>Inscrivez votre compte</h3>
                            <p class="text-3">Devenez d'abord un utilisateur de registre, puis connectez-vous à votre compte et entrez votre carte ou les coordonnées bancaires qui vous sont nécessaires.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="featured-box style-3">
                            <div class="featured-box-icon text-light"><span class="w-100 text-20 font-weight-500">2</span></div>
                            <h3>Sélectionnez votre destinataire</h3>
                            <p class="text-3">Entrez l'adresse e-mail de votre destinataire puis ajoutez un montant avec la devise à envoyer en toute sécurité.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-sm-0">
                        <div class="featured-box style-3">
                            <div class="featured-box-icon text-light"><span class="w-100 text-20 font-weight-500">3</span></div>
                            <h3>Envoyer l'argent</h3>
                            <p class="text-3">Après avoir envoyé de l'argent, le destinataire sera averti par e-mail lorsque l'argent aura été transféré sur son compte.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2"><a href="#" class="btn btn-outline-primary shadow-none text-uppercase">S'inscrire maintenant</a></div>
            </div>
        </section>
        <!-- How it works End -->

        <!-- Why choose us
        ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-9 text-center">Pourquoi choisir Kimya ?</h2>
                <p class="lead text-center mb-5">Voici les 4 principales raisons d'utiliser un compte Kimya pour gérer votre argent.</p>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="hero-wrap section h-100 p-5 rounded">
                            <div class="hero-mask rounded opacity-6 bg-dark"></div>
                            <div class="hero-bg rounded" style="background-image:url({{asset('images/bg/image-6.jpg')}});"></div>
                            <div class="hero-content">
                                <h2 class="text-6 text-white mb-3">Pourquoi Kimya?</h2>
                                <p class="text-light mb-5">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                                <h2 class="text-6 text-white mb-3">Envoyer l'argent avec Kimya</h2>
                                <p class="text-light">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                                <p class="text-light mb-0">Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>De l'europe au congo</h3>
                            <p>Essent lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Faible frais</h3>
                            <p>Lisque persius interesset his et, in quot quidam persequeris.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Utilisation facile</h3>
                            <p>Essent lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Paiement rapide</h3>
                            <p>Quidam lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>100% sécurisé</h3>
                            <p>Essent lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>24/7 service client</h3>
                            <p>Quidam lisque persius interesset his et, in quot quidam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choose us End -->

        <!-- How work
        ============================================= -->
        <section class="hero-wrap section shadow-md">
            <div class="hero-mask opacity-9 bg-primary"></div>
            <div class="hero-bg" style="background-image:url({{asset('images/bg/image-1.jpg')}});"></div>
            <div class="hero-content my-3 my-lg-5">
                <div class="container text-center">
                    <h2 class="text-10 text-white mb-4 mb-lg-5">Comment fonctionne l'envoi d'argent?</h2>
                    <a class="video-btn d-inline-flex" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-toggle="modal" data-target="#videoModal"> <span class="btn-video-play bg-white shadow-md rounded-circle m-auto"><i class="fas fa-play"></i></span> </a> </div>
            </div>
        </section>
        <!-- How work End -->

        <!-- Testimonial
        ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-9 text-center">Ce que les gens disent de Payyed</h2>
                <p class="lead text-center mb-4">Une expérience de paiement dont les gens aiment parler</p>
                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto">
                        <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="1">
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
                                    <strong class="d-block font-weight-500">Jay Shah</strong> <span class="text-muted">Founder at Icomatic Pvt Ltd</span> </div>
                            </div>
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
                                    <strong class="d-block font-weight-500">Patrick Cary</strong> <span class="text-muted">Freelancer from USA</span> </div>
                            </div>
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“Fast easy to use transfers to a different currency. Much better value that the banks.”</p>
                                    <strong class="d-block font-weight-500">De Mortel</strong> <span class="text-muted">Online Retail</span> </div>
                            </div>
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“I have used them twice now. Good rates, very efficient service and it denies high street banks an undeserved windfall. Excellent.”</p>
                                    <strong class="d-block font-weight-500">Chris Tom</strong> <span class="text-muted">User from UK</span> </div>
                            </div>
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“It's a real good idea to manage your money by payyed. The rates are fair and you can carry out the transactions without worrying!”</p>
                                    <strong class="d-block font-weight-500">Mauri Lindberg</strong> <span class="text-muted">Freelancer from Australia</span> </div>
                            </div>
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
                                    <strong class="d-block font-weight-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
                            </div>
                        </div>
                        <div class="text-center mt-4"><a href="#" class="btn-link text-4">Voir plus d'avis de personnes<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Frequently asked questions
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center">Questions fréquemment posées</h2>
                <p class="lead text-center mb-4 mb-sm-5">Vous ne le trouvez pas ici? Découvrez notre <a class="btn-link" href="{{ route('help') }}">Centre d'aide</a></p>
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <hr class="mb-0">
                        <div class="accordion accordion-alternate arrow-right" id="popularTopics">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Qu'est ce que Kimya?</a> </h5>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#popularTopics">
                                    <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Comment envoyer de l'argent en ligne?</a> </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#popularTopics">
                                    <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Mon argent est-il en sécurité avec Kimya?</a> </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#popularTopics">
                                    <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Combien de frais Payyed facture-t-il?</a> </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#popularTopics">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Quel est le moyen le plus rapide d'envoyer de l'argent à l'étranger?</a> </h5>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#popularTopics">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Puis-je ouvrir un compte Kimya pour les entreprises?</a> </h5>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#popularTopics">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0">
                    </div>
                </div>
                <div class="text-center mt-4"><a href="{{ route('faq') }}" class="btn-link text-4">Voir plus FAQ<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
            </div>
        </section>
        <!-- Frequently asked questions end -->

        <!-- Special Offer
        ============================================= -->
        <section class="hero-wrap py-5">
            <div class="hero-mask opacity-8 bg-dark"></div>
            <div class="hero-bg" style="background-image:url({{asset('images/bg/image-2.jpg')}});"></div>
            <div class="hero-content">
                <div class="container d-md-flex text-center text-md-left align-items-center justify-content-center">
                    <h2 class="text-6 font-weight-400 text-white mb-3 mb-md-0">Inscrivez-vous aujourd'hui et obtenez votre première transaction gratuite!</h2>
                    <a href="#" class="btn btn-outline-light text-nowrap ml-0 ml-md-4">S'inscrire maintenant</a> </div>
            </div>
        </section>
        <!-- Special Offer end -->
    </div>

@endsection
