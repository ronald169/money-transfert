@extends('front.layout')

@section('main')

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
                    <div class="bg-white shadow-sm rounded py-4 mb-4">
                        <h3 class="text-5 font-weight-400 px-4 mb-4">Notifications</h3>
                        <hr class="mb-0">

                        <!-- Notifications List
                        =============================== -->
                        <div class="notifications-list">
                            <div class="notifications-item unread px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Un nouveau document numérique FIRC est disponible à télécharger</h4>
                                        <span class="text-muted">Mardi dernier à 23h00</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item unread px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Mise à jour sur les frais Kimya</h4>
                                        <span class="text-muted">4 Juin 2020</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Mises à jour de notre politique de confidentialité. Lisez s'il vous plaît.</h4>
                                        <span class="text-muted">22 Juil 2020</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item unread px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Mot de passe changé</h4>
                                        <span class="text-muted">15 Mai 2020</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Un nouveau document numérique FIRC est disponible à télécharger</h4>
                                        <span class="text-muted">14 Avr 2020</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Un nouveau document numérique FIRC est disponible à télécharger</h4>
                                        <span class="text-muted">17 Mars 2020</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Un nouveau document numérique FIRC est disponible à télécharger</h4>
                                        <span class="text-muted">18 Fev 2020</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Mise à jour sur les frais Payoneer</h4>
                                        <span class="text-muted">24 Dec 2019</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Mises à jour de notre politique de confidentialité. Lisez s'il vous plaît.</h4>
                                        <span class="text-muted">6 Nov 2019</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="notifications-item px-4 py-3" data-toggle="modal" data-target="#notifications-detail">
                                <div class="row align-items-center flex-row">
                                    <div class="col-2 col-sm-1 text-center text-8 icon-bell"><i class="far fa-bell"></i></div>
                                    <div class="col col-sm-10">
                                        <h4 class="text-3 mb-1">Un nouveau document numérique FIRC est disponible à télécharger</h4>
                                        <span class="text-muted">16 Oct 2019</span> </div>
                                    <div class="col-1 text-right text-muted"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="text-center mt-4"> <a class="btn btn-sm btn-outline-secondary shadow-none" href="#">Charger plus</a> </div>
                        </div>
                        <!-- Notifications List End -->

                        <!-- Notifications Item Details Modal
                        =========================================== -->
                        <div id="notifications-detail" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title d-flex align-items-center font-weight-400"><span class="text-6 mr-2"><i class="far fa-bell"></i></span> Détails des notifications</h5>
                                        <button type="button" class="close text-8 font-weight-300" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body p-4 text-3">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="text-5">Mises à jour de notre politique de confidentialité. Lisez s'il vous plaît.</h4>
                                                <p class="text-muted">16 Oct 2019</p>
                                                <p class="font-weight-500">{{ auth()->user()->name }}</p>
                                                <p>Nous avons mis à jour notre <a href="#"><u>politique de confidentialité</u></a> pour vous permettre de comprendre plus facilement comment nous collectons, utilisons, divulguons, stockons et transférons vos informations. Il reflète également les développements récents des lois applicables sur la protection de la vie privée. Les modifications sont effectives à compter du <strong class="font-weight-500">Jan 01, 2021</strong> veuillez donc prendre le temps de vous familiariser avec nos pratiques en matière de confidentialité.</p>
                                                <p>Les modifications prendront effet automatiquement et en continuant à utiliser nos services, vous acceptez la mise à jour <a href="#"><u>politique de confidentialité</u></a>.</p>
                                                <p>Merci,<br>
                                                    Kimya Team</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="btn-group m-0 w-100 row">
                                            <button type="button" class="btn btn-secondary shadow-none col-6"><span class="mr-1"><i class="far fa-eye-slash"></i></span>Marquer comme non lu</button>
                                            <button type="button" class="btn btn-danger shadow-none col-6"><span class="mr-1"><i class="far fa-trash-alt"></i></span>Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Notifications Item Details Modal End -->

                    </div>
                    <!-- Notifications End -->

                </div>
                <!-- Middle Panel End -->
            </div>
        </div>
    </div>
    <!-- Content end -->

@endsection
