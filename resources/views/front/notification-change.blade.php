@extends('front.layout')

@section('main')

    <!-- Secondary menu
  ============================================= -->
    @include('front.include.secondary-menu')
    <!-- Secondary menu end -->

    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">
                <!-- Left Panel
                ============================================= -->
                @include('dashboard.panel-left')
                <!-- Left Panel End -->

                <!-- Middle Panel
                ============================================= -->
                <div class="col-lg-9">

                    <!-- Notifications
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 font-weight-400">Notifications</h3>
                        <p class="text-muted">Sélectionnez les abonnements à livrer <span class="text-body">{{ auth()->user()->email }}</span></p>
                        <hr class="mx-n4">
                        <form id="notifications" method="post">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="announcements" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="announcements">Annonces</label>
                                <p class="text-muted line-height-3 mt-2">Soyez le premier informé des nouvelles fonctionnalités et autres actualités.</p>
                            </div>
                            <hr class="mx-n4">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="sendPayment" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="sendPayment">Envoyer le paiement</label>
                                <p class="text-muted line-height-3 mt-2">Envoyez un e-mail lorsque j'envoie un paiement.</p>
                            </div>
                            <hr class="mx-n4">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="receiveApayment" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="receiveApayment">Recevoir un paiement</label>
                                <p class="text-muted line-height-3 mt-2">Envoyez-moi un e-mail lorsque je reçois un paiement.</p>
                            </div>
                            <hr class="mx-n4">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="requestPayment" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="requestPayment">Demander un paiement</label>
                                <p class="text-muted line-height-3 mt-2">Envoyez-moi un e-mail lorsque je demande un paiement.</p>
                            </div>
                            <hr class="mx-n4">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="problemWithPayment" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="problemWithPayment">Avoir un problème avec un paiement</label>
                                <p class="text-muted line-height-3 mt-2">Envoyez-moi un e-mail en cas de problème de paiement.</p>
                            </div>
                            <hr class="mx-n4">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="specialOffers" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="specialOffers">Offres spéciales</label>
                                <p class="text-muted line-height-3 mt-2">Recevez des offres de dernière minute de notre part.</p>
                            </div>
                            <hr class="mx-n4">
                            <div class="form-check custom-control custom-checkbox">
                                <input id="reviewSurveys" name="notifications" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-3" for="reviewSurveys">Examiner les sondages</label>
                                <p class="text-muted line-height-3 mt-2">Partagez votre expérience de paiement pour mieux informer les utilisateurs.</p>
                            </div>
                            <hr class="mx-n4">
                            <button class="btn btn-primary mt-1" type="submit">Sauvegarder les modifications</button>
                        </form>
                    </div>
                    <!-- Notifications End -->

                </div>
                <!-- Middle Panel End -->
            </div>
        </div>
    </div>
    <!-- Content end -->

@endsection
