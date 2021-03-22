@extends('front.layout')

@section('main')

    <section class="hero-wrap">
    <div class="hero-mask opacity-7 bg-dark"></div>
    <div class="hero-bg" style="background-image:url('images/bg/image-6.jpg');"></div>
    <div class="hero-content d-flex flex-column fullscreen-with-header">
        <div class="container my-auto py-5">
            <div class="row">
                <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-left pb-4 pb-lg-0">
                    <h2 class="text-17 text-white"><span class="font-weight-400 text-15">La Meilleur façon</span> <br>
                        D'envoyer l'argent</h2>
                    <p class="text-4 text-white mb-4"> Envoyer l'argent avec les meilleur taux de change bien inférieur a ceux de la banque </p>
                    <a class="btn btn-outline-light video-btn" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-toggle="modal" data-target="#videoModal"><span class="text-2 mr-3"><i class="fas fa-play"></i></span>See How it Works</a> </div>
                <div class="col-lg-6 col-xl-5 my-auto">
                    <div class="bg-white rounded shadow-md p-4">
                        <h3 class="text-5 mb-4 text-center">Send Money</h3>

                        <div style="display: none" id="error">
                            <div class="alert alert-danger" role="alert" >
                                Vos sommes sont incorrect ou depasse le seuil autorisé $10 as $350.
                            </div>
                        </div>

                        <hr class="mb-4 mx-n4">
                        <form id="form-send-money" method="POST" action="{{route('send-money')}}">
                            @csrf
                            <div class="form-group">
                                <label for="youSend">You Send</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                    <input type="text"
                                           class="form-control"
                                           data-bv-field="youSend" name="youSend"
                                           id="youSend"
                                           value="0" placeholder="" required min="1" max="300" onchange="moneySend()">
                                    <div class="input-group-append">
                                        <span class="input-group-text p-0">
                                            <select id="youSendCurrency"
                                                    data-style="custom-select bg-transparent border-0"
                                                    data-container="body" data-live-search="true"
                                                    class="selectpicker form-control bg-transparent" name="" required onchange="currencyChanged()">
                                              <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="dollar">USD</option>
                                              <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="euro">EUR</option>
                                              <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="sterling">GBP</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="recipientGets">Recipient Gets</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span> </div>
                                        <input type="text"
                                               class="form-control" name="recipientGets"
                                               data-bv-field="recipientGets" id="recipientGets"
                                               value="0" placeholder="" required onchange="moneyReceive()">
                                        <div class="input-group-append">
                                        <span class="input-group-text p-0">
                                            <select id="recipientCurrency" data-style="custom-select bg-transparent border-0"
                                                    data-container="body"
                                                    data-live-search="true"
                                                    class="selectpicker form-control bg-transparent">
                                                <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="" selected>USD</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="receivingOptions">Receiving options</label>
                                <div class="input-group">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select id="receivingOptions" data-style="custom-select" class="selectpicker form-control" required="" name="receivingType" tabindex="-98">
                                            <option value="" disabled selected>Sélectionnez une option</option>
                                            <option value="orangeMoney">Orange Money</option>
                                            <option value="mPesa">M-pesa</option>
                                            <option value="airtelMoney">Airtel Money</option>
                                        </select>
                                    </div>
                                    <div class="input-group-append">
                                        <ul class="payments-types list-unstyled list-inline d-flex align-items-center">
                                            <li>
                                                <a href="#">
                                                    <img style="max-width: 50px; height: 30px;" class="operator-img" data-toggle="tooltip" src="{{asset('images/orange-money.png')}}" alt="Orange Money" title="" data-original-title="Orange"></a>
                                            </li>
                                            <li><a href="#">
                                                    <img style="max-width: 50px; height: 30px;" class="operator-img" data-toggle="tooltip" src="{{asset('images/airtel-money.png')}}" alt="Aitel Money" title="" data-original-title="Airtel"></a></li>
                                            <li><a href="#">
                                                    <img style="max-width: 50px; height: 30px;" class="operator-img" data-toggle="tooltip" src="{{asset('images/m-pesa.jpeg')}}" alt="M-Pesa" title="" data-original-title="Vodacom"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p class="text-muted mb-1">Total des frais  : <span id="fees" class="font-weight-500">0</span> <span class="font-weight-500"> USD</span></p>
                            <input type="hidden" name="fees" value="">
                            <p class="text-muted mb-1">Total a envoyer  : <span id="totals" class="font-weight-500">0</span><span class="font-weight-500"> USD</span></p>
                            <p class="text-muted">La valeur de change est :
                                <span class="font-weight-500">1 USD = 0.830 EUR</span>
                                <br> <span class="font-weight-500">1 USD = 0.717 GBP</span>
                            </p>
                            <button class="btn btn-primary btn-block">Continuer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('javascript')

    <script>
        let currencies = ['dollar', 'euro', 'sterling'];
        let currencySelected = document.getElementById('youSendCurrency').value;
        let amountToSend = parseInt(document.getElementById('youSend').value);
        let amountToReceive = parseInt(document.getElementById('recipientGets').value);

        const rate = 0.05;
        let fees = 0;
        let totals = 0;

        function moneySend() {
            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 0.83015).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText));
                    break;
                case currencies[2] :
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 0.717).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText));
                    break;
                default :
                    document.getElementById('recipientGets').value  = parseInt(document.getElementById('youSend').value);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText));
            }
        }

        function moneyReceive() {

            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 1.2046).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText)) + ' USD';
                    break;
                case currencies[2] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 1.3947).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText)) + ' USD';
                    break;
                default :
                    document.getElementById('youSend').value  = parseInt(document.getElementById('recipientGets').value);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText)) + ' USD';
            }
        }

        function showOption() {
            return document.getElementById('youSendCurrency').value
        }

        function currencyChanged() {
            moneySend();
        }

        function computedFee() {
            fees = amountToReceive * 0.05;
        }

        function computedTotal() {
            totals = fees + amountToReceive;
        }
    </script>


@endsection
