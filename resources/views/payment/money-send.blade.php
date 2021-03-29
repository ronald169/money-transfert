<div class="money-send">
    <div class="calculator-inner">
        <div class="single-cal">
            <div class="inner-form">
                <form action="#">
                    <label>Vous envoyez</label>
                    <input type="text" class="form-input" placeholder="0" id="youSend" onchange="moneySend()" required>
                    <select id="youSendCurrency" onchange="currencyChanged()" required>
                        <option value="dollar">USD</option>
                        <option value="euro">EUR</option>
                        <option value="sterling">GBP</option>
                    </select>
                </form>
            </div>
            <div class="inner-form">
                <form action="#">
                    <label>Il recoit</label>
                    <input type="text" class="form-input" placeholder="0" id="recipientGets" onchange="moneyReceive()">
                    <select disabled>
                        <option value="dollar">USD</option>
                    </select>
                </form>
            </div>
            <div class="inner-form-text">
                <div class="rate-text">
                    <span> <strong>1 $ = 0.830 € ~ 1 $ = 0.717 £</strong> Taux de change</span> <br>
                    <span> <strong>0.05%</strong> Frais de transfert</span>
                </div>
            </div>
            <button class="cale-btn">Continuez</button>
            <div class="terms-text">
                <p>En cliquant sur continuer, je suis d'accord avec <a href="#">Termes et politique</a></p>
            </div>
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
                    // document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2);
                    // document.getElementById('totals').innerText = Number(document.getElementById('fees').innerText) + Number(document.getElementById('recipientGets').value);
                    break;
                case currencies[2] :
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 1.3947).toFixed(2);
                    // document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2);
                    // document.getElementById('totals').innerText = Number(document.getElementById('fees').innerText) + Number(document.getElementById('recipientGets').value);
                    break;
                default :
                    document.getElementById('recipientGets').value  = parseInt(document.getElementById('youSend').value);
                    // document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2);
                    // document.getElementById('totals').innerText = Number(document.getElementById('fees').innerText) + Number(document.getElementById('recipientGets').value);
            }
        }

        function moneyReceive() {

            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 0.83).toFixed(2);
                    // document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2);
                    // document.getElementById('totals').innerText = Number(document.getElementById('fees').innerText) + Number(document.getElementById('recipientGets').value);
                    break;
                case currencies[2] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 0.717).toFixed(2);
                    // document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2);
                    // document.getElementById('totals').innerText = Number(document.getElementById('fees').innerText) + Number(document.getElementById('recipientGets').value);
                    break;
                default :
                    document.getElementById('youSend').value  = parseInt(document.getElementById('recipientGets').value);
                    // document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2);
                    // document.getElementById('totals').innerText = Number(document.getElementById('fees').innerText) + Number(document.getElementById('recipientGets').value);
            }
        }

        function showOption() {
            return document.getElementById('youSendCurrency').value
        }

        function currencyChanged() {
            // switch (showOption()) {
            //     case currencies[1] :
            //         document.getElementById('icon-currency').innerHTML = '€';
            //         break;
            //     case currencies[2] :
            //         document.getElementById('icon-currency').innerHTML = '£';
            //         break;
            //     default :
            //         document.getElementById('icon-currency').innerHTML = '$';
            //         break;
            // }
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
