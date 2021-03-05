<div>
    {{-- Stop trying to control. --}}

    <div>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                {{--       monatnt envoyé         --}}
                <div class="mb-5">
                    <p >Vous envoyer </p>
                    <input type="number" wire:model="amountToSend" min="50" max="253" wire:change="converted">

                    <select name="currency" id="" wire:model="currentSelected" wire:change="converted">
                        <option value="dollar" selected>Dollar</option>
                        <option value="euro">Euro</option>
                        <option value="sterling">livre sterling</option>
                    </select>
                </div>

                {{--       Montant recus         --}}
                <div>
                    <p>Il recois</p>
                    <input type="number" min="50" max="253" wire:model="receiveAmount" wire:change="convertedInverse">

                    <select name="currency" id="">
                        <option value="dollar" selected>Dollar</option>
                    </select>
                </div>


                {{--       Frai d'envoie         --}}
                <div class="flex justify-between">
                    <span>Total des frais</span>
                    <span>$ {{ $this->fees }}</span>
                </div>

                <div class="flex justify-between">
                    <span>Total a payer</span>
                    <span>$ {{ $this->totals }}</span>
                </div>

                <p class="text-center  text-sm font-bold  mt-3 text-blue-500">Taux de change actuel 1€ = $1.2046 et 1£ = $1.3947</p>

            </div>
        </div>
    </div>
</div>


@section('javascript')
    <script>
        function calculateRecipient(amountToSend) {
            /*<![CDATA[*/
            const rate = 0.0017;
            const currency = "XAF";
            const fees = [];

            const receivedAmount = amountToSend * rate;

            let feePayed = 0.03 * amountToSend;

            for (const fee of fees) {

                if (fee.amountToCharge >= amountToSend) {
                    feePayed = fee.feesToCharge;
                    document.getElementById('fees').innerHTML = feePayed.toFixed(2) + ' '+ currency;
                    break;
                }
            }

            document.getElementById('fees').innerHTML = feePayed.toFixed(2) + ' '+ currency;

            document.getElementById('recipientGets').value = receivedAmount.toFixed(2);
            document.getElementById('recipientGets').innerText = receivedAmount.toFixed(2);
            document.getElementById('totalToPay').innerHTML = ((receivedAmount / rate) + feePayed).toFixed(2) + ' ' + currency;
            /*]]>*/
        }

        function calculateSender(amountToReceive) {
            /*<![CDATA[*/
            const rate = 0.0017;
            const currency = "XAF";
            const fees = [];

            const amountToSend = amountToReceive / rate;
            let feePayed = 0.03 * amountToSend;

            for (const fee of fees) {
                if (fee.amountToCharge >= amountToSend) {
                    feePayed = fee.feesToCharge;
                    console.log('fees : ', feePayed);
                    document.getElementById('fees').innerHTML = feePayed.toFixed(2) + ' '+ currency;
                    break;
                }
            }

            document.getElementById('fees').innerHTML = feePayed.toFixed(2) + ' '+ currency;
            document.getElementById('youSend').value = amountToSend.toFixed(2);
            document.getElementById('youSend').innerText = amountToSend.toFixed(2);
            document.getElementById('totalToPay').innerHTML = (amountToSend + feePayed).toFixed(2) + ' ' + currency;
            /*]]>*/
        }

        function setReceivingType(type) {
            document.getElementById('receivingType').value = type ? type : 'orangeMoney';
        }
    </script>
@endsection
