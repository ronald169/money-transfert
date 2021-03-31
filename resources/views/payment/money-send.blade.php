<div class="money-send">
    <div class="calculator-inner">
        <div class="single-cal">
{{--            <form action="#">--}}
                <h4 class="text-center">Envoyer de l'argent</h4>

                <div class="inner-form">
                    <label>Montant envoyé</label>
                    <input type="text" class="form-input" placeholder="0" value="0" id="youSend" onchange="moneySend()" required>
                    <select id="youSendCurrency" onchange="currencyChanged()" required>
                        <option value="dollar">USD</option>
                        <option value="euro">EUR</option>
                        <option value="sterling">GBP</option>
                    </select>
                </div>
                <div class="inner-form">
                    <label>Le bénéficiare recevra</label>
                    <input type="text" class="form-input" placeholder="0" value="0" id="recipientGets" onchange="moneyReceive()">
                    <select disabled>
                        <option value="dollar">USD</option>
                    </select>
                </div>

            <div class="inner-form">
                <label>Moyen de retrait</label>
                <select name="" id="" class="wide">
                    <option disabled selected>Sélectionnez le moyen de retrait</option>
                    <option value="orange-money">Orange Money</option>
                    <option value="m-pesa">M-Pesa</option>
                    <option value="airtel">Airtel</option>
                </select>
            </div>
            <br><br>
            <div class="inner-form-text ">
                <div class="rate-text">
                    <span>Frais de transfert : <strong id="fees"> 0 </strong> <strong id="icon-currency-fees">$</strong></span> <br>
                    <span>Total à envoyer : <strong id="totals"> 0 </strong> <strong id="icon-currency-total">$</strong></span>
                </div>
            </div>

            <button class="cale-btn" >Continuez</button>
        </div>
    </div>
</div>

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
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 1.2046).toFixed(2);
                    fees = document.getElementById('fees').innerHTML = computedFee();
                    document.getElementById('totals').innerText = (computedTotal()).toFixed(2);
                    break;
                case currencies[2] :
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 1.3947).toFixed(2);
                    fees = document.getElementById('fees').innerHTML = computedFee();
                    document.getElementById('totals').innerText = (computedTotal()).toFixed(2);
                    break;
                default :
                    document.getElementById('recipientGets').value  = parseInt(document.getElementById('youSend').value);
                    fees = document.getElementById('fees').innerHTML = computedFee();
                    document.getElementById('totals').innerText = computedTotal().toFixed(2);
            }
        }

        function moneyReceive() {

            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 0.83).toFixed(2);
                    fees = document.getElementById('fees').innerHTML = computedFee();
                    document.getElementById('totals').innerText = (computedTotal()).toFixed();
                    break;
                case currencies[2] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 0.717).toFixed(2);
                    fees = document.getElementById('fees').innerHTML = computedFee();
                    document.getElementById('totals').innerText = (computedTotal()).toFixed(2);
                    break;
                default :
                    document.getElementById('youSend').value  = parseInt(document.getElementById('recipientGets').value);
                    fees = document.getElementById('fees').innerHTML = computedFee();
                    document.getElementById('totals').innerText = computedTotal().toFixed(2);
            }
        }

        function showOption() {
            return document.getElementById('youSendCurrency').value
        }

        function currencyChanged() {
            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('icon-currency-fees').innerHTML = '€';
                    document.getElementById('icon-currency-total').innerHTML = '€';
                    break;
                case currencies[2] :
                    document.getElementById('icon-currency-fees').innerHTML = '£';
                    document.getElementById('icon-currency-total').innerHTML = '£';
                    break;
                default :
                    document.getElementById('icon-currency-fees').innerHTML = '$';
                    document.getElementById('icon-currency-total').innerHTML = '$';
                    break;
            }
            moneySend();
        }

        function computedFee() {
            return (document.getElementById('recipientGets').value * 0.05).toFixed(2);
        }

        function computedTotal() {
            return Number(document.getElementById('fees').innerText) + Number(document.getElementById('youSend').value);
        }
    </script>

    {{--    1€ = $1.2046--}}
    {{--    1£ = $1.3947--}}
@endsection
