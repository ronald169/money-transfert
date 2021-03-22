@extends('front.layout')

@section('main')

    <div id="content" class="py-4">
        <div class="container">

            <!-- Steps Progress bar -->
            <div class="row mt-4 mb-5">
                <div class="col-lg-11 mx-auto">
                    <div class="row widget-steps">
                        <div class="col-4 step active">
                            <div class="step-name">Details</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Confirme</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Succés</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                    </div>
                </div>
            </div>
            <h2 class="font-weight-400 text-center mt-3">Envoyer votre argent</h2>
            <p class="lead text-center mb-4">Envoyez votre argent à tout moment, partout dans le monde.</p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 font-weight-400 mb-3 mb-sm-4">Donnée personnel</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Form
                        ============================ -->
                        <form id="form-send-money" method="POST" action="{{ route('confirm-money') }}">
                            @csrf
                            <div class="form-group">
                                <label for="emailID">Envoyer a </label>
                                <input type="text" value="" name="email" class="form-control" data-bv-field="emailid" id="emailID" required placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <label for="youSend">Tu envois</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                    <input type="text" class="form-control" disabled data-bv-field="youSend" name="youSend" id="youSend" value="{{ $data['youSend'] }}" placeholder="">
                                    <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="youSendCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="dollar" >USD</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="euro">EUR</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>

                    </select>
                    </span> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="recipientGets">Il reçois</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                    <input type="text" class="form-control" disabled data-bv-field="recipientGets" name="recipientGets" id="recipientGets" value="{{$data['youSend']}}" placeholder="" selected>
                                    <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="recipientCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="dollar" selected>USD</option>
                    </select>
                    </span> </div>
                                </div>
                            </div>
                            <p class="text-muted text-center">The current exchange rate is
                                <span class="font-weight-500">1 USD = 0.830 EUR</span>
                                <br> <span class="font-weight-500">1 USD = 0.717 GBP</span>
                            </p>
                            <hr>
                            <p>Frais <span class="float-right">{{ $fees }}</span></p>
                            <hr>
                            <p class="text-4 font-weight-500">Total a payer<span class="float-right">{{ $totals }}</span></p>
                            <button class="btn btn-primary btn-block" type="submit">Continuer</button>
                        </form>
                        <!-- Send Money Form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
