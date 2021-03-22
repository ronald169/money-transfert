@extends('front.layout')

@section('main')

    <!-- Page Header
  ============================================= -->
    <section class="hero-wrap section">
        <div class="hero-mask opacity-9 bg-primary"></div>
        <div class="hero-bg" style="background-image:url({{asset('./images/bg/image-2.jpg')}});"></div>
        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-12">
                        <h1 class="text-11 text-white mb-4">Comment pouvons-nous vous aider?</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="input-group">
                            <input class="form-control shadow-none border-0" type="search" id="search-input" placeholder="Chercher une réponse..." value="">
                            <div class="input-group-append"> <span class="input-group-text bg-white border-0 p-0">
                <button class="btn text-muted shadow-none px-3 border-0" type="button"><i class="fa fa-search"></i></button>
                </span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header end -->

    <!-- Content
    ============================================= -->
    <div id="content">

        <!-- Main Topics
        ============================================= -->
        <section class="section py-3 my-3 py-sm-5 my-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="bg-white shadow-sm rounded p-4 text-center"> <span class="d-block text-17 text-primary mt-2 mb-3"><i class="fas fa-user-circle"></i></span>
                            <h3 class="text-body text-4">Mon compte</h3>
                            <p class="mb-0"><a class="text-muted btn-link" href="">Voirs les articles<span class="text-1 ml-1"><i class="fas fa-chevron-right"></i></span></a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="bg-white shadow-sm rounded p-4 text-center"> <span class="d-block text-17 text-primary mt-2 mb-3"><i class="fas fa-money-check-alt"></i></span>
                            <h3 class="text-body text-4">Paiement</h3>
                            <p class="mb-0"><a class="text-muted btn-link" href="">Voir les articles<span class="text-1 ml-1"><i class="fas fa-chevron-right"></i></span></a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="bg-white shadow-sm rounded p-4 text-center"> <span class="d-block text-17 text-primary mt-2 mb-3"><i class="fas fa-shield-alt"></i></span>
                            <h3 class="text-body text-4">Sécurité</h3>
                            <p class="mb-0"><a class="text-muted btn-link" href="">Voir les articles<span class="text-1 ml-1"><i class="fas fa-chevron-right"></i></span></a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="bg-white shadow-sm rounded p-4 text-center"> <span class="d-block text-17 text-primary mt-2 mb-3"><i class="fas fa-credit-card"></i></span>
                            <h3 class="text-body text-4">Méthods de paiement</h3>
                            <p class="mb-0"><a class="text-muted btn-link" href="">Voir les articles<span class="text-1 ml-1"><i class="fas fa-chevron-right"></i></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Topics end -->

        <!-- Popular Topics
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center">Sujets populaires</h2>
                <p class="text-4 text-center mb-5">Lisque persius interesset his et, in quot quidam persequeris.</p>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="accordion accordion-alternate" id="popularTopics">
                                    <div class="card">
                                        <div class="card-header" id="heading1">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">J'ai oublié le mot de passe de mon compte.</a> </h5>
                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#popularTopics">
                                            <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading2">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Comment retirer des fonds de mon compte?</a> </h5>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#popularTopics">
                                            <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading3">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Comment associer un compte bancaire à mon compte?</a> </h5>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#popularTopics">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Comment confirmer l'adresse e-mail de mon compte?</a> </h5>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#popularTopics">
                                            <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Comment recevoir des paiements?</a> </h5>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#popularTopics">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion accordion-alternate" id="popularTopics2">
                                    <div class="card">
                                        <div class="card-header" id="heading6">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Comment puis-je consulter l'historique de mes paiements?</a> </h5>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#popularTopics2">
                                            <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading7">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">Où est mon remboursement?</a> </h5>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#popularTopics2">
                                            <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading8">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">Comment demander des paiements ou envoyer une facture?</a> </h5>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#popularTopics2">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading9">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">J'ai oublié mon mot de passe! Et ensuite?</a> </h5>
                                        </div>
                                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#popularTopics2">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading10">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">Clôture de votre compte</a> </h5>
                                        </div>
                                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#popularTopics2">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4"><a href="#" class="btn-link text-4">Voir plus de sujets<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
            </div>
        </section>
        <!-- Popular Topics end -->

        <!-- Can't find
        ============================================= -->
        <section class="section py-4 my-4 py-sm-5 my-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bg-white shadow-sm rounded pl-4 pl-sm-0 pr-4 py-4">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-auto text-13 text-light d-flex align-items-center justify-content-center"> <span class="px-4 ml-3 mr-2 mb-4 mb-sm-0"><i class="far fa-envelope"></i></span> </div>
                                <div class="col text-center text-sm-left">
                                    <div class="">
                                        <h5 class="text-3 text-body">Vous ne trouvez pas ce que vous cherchez?</h5>
                                        <p class="text-muted mb-0">Nous voulons répondre à toutes vos questions. Contactez-nous et nous vous répondrons dans les plus brefs délais. <a class="btn-link" href="">Contactez nous<span class="text-1 ml-1"><i class="fas fa-chevron-right"></i></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="bg-white shadow-sm rounded pl-4 pl-sm-0 pr-4 py-4">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-auto text-13 text-light d-flex align-items-center justify-content-center"> <span class="px-4 ml-3 mr-2 mb-4 mb-sm-0"><i class="far fa-comment-alt"></i></span> </div>
                                <div class="col text-center text-sm-left">
                                    <div class="">
                                        <h5 class="text-3 text-body">Questions techniques</h5>
                                        <p class="text-muted mb-0">Vous avez des questions techniques? Contactez-nous sur le chat en direct ou autre. <a class="btn-link" href="">clic ici<span class="text-1 ml-1"><i class="fas fa-chevron-right"></i></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Can't find end -->

    </div>
    <!-- Content end -->

@endsection
