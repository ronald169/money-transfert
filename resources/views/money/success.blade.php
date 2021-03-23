@extends('front.layout')

@section('main')

    <!-- Secondary menu
  ============================================= -->
    <div class="bg-primary">
        <div class="container d-flex justify-content-center">
            <ul class="nav secondary-nav">
                <li class="nav-item"> <a class="nav-link active" href="{{ route('welcome') }}">Envoyez</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('welcome') }}">Requette</a></li>
            </ul>
        </div>
    </div>
    <!-- Secondary menu end -->

    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">

            <!-- Steps Progress bar -->
            <div class="row mt-4 mb-5">
                <div class="col-lg-11 mx-auto">
                    <div class="row widget-steps">
                        <div class="col-4 step complete">
                            <div class="step-name">Details</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="step-dot"></span> </div>
                        <div class="col-4 step complete">
                            <div class="step-name">Confirme</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="step-dot"></span> </div>
                        <div class="col-4 step complete">
                            <div class="step-name">Succes</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="step-dot"></span> </div>
                    </div>
                </div>
            </div>
            <h2 class="font-weight-400 text-center mt-3 mb-4">Envoyer l'argent</h2>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <!-- Send Money Success
                    ============================================= -->
                    <div class="bg-white text-center shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <div class="my-4">
                            <p class="text-success text-20 line-height-07"><i class="fas fa-check-circle"></i></p>
                            <p class="text-success text-8 font-weight-500 line-height-07">Succés!</p>
                            <p class="lead">Transaction complete</p>
                        </div>
                        <p class="text-3 mb-4">Vous avez envoyé l'argent avec succés <span class="text-4 font-weight-500">{{ session('youSend') }}</span> a <span class="font-weight-500">{{ session('email') }}</span>, Voir en bas les details de la transaction <a class="btn-link" href="#">Activité</a>.</p>
                        <a class="btn btn-primary btn-block" href="{{ route('welcome') }}">Envoyer encore l'argent</a>
                        <a class="text-3 d-inline-block btn-link mt-4" href="#"><i class="fas fa-print"></i> Imprimer</a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->

@endsection
