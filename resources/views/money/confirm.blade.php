@extends('front.layout')

@section('main')

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
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step active">
                            <div class="step-name">Confirme</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Succéss</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                    </div>
                </div>
            </div>
            <h2 class="font-weight-400 text-center mt-3">Envoyer l'argent</h2>
            <p class="lead text-center mb-4">Vous envoyez l'argent á <span class="font-weight-500">{{ $data['email'] }}</span></p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 font-weight-400 mb-3 mb-sm-4"> Description de paiement</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Confirm
                        ============================================= -->
                        <form id="form-send-money" method="POST" action="{{ route('success-money') }}">
                            @csrf
                            <div class="form-group mb-4 mb-sm-5">
                                <label for="description">Description</label>
                                <textarea class="form-control" rows="4" id="description" required placeholder="Description de paiement"></textarea>
                                <input type="hidden" name="youSend" value="{{ $data['youSend'] }}">
                                <input type="hidden" name="email" value="{{ $data['email'] }}">
                            </div>
                            <hr class="mx-n3 mx-sm-n5 mb-3 mb-sm-4">
                            <h3 class="text-5 font-weight-400 mb-3 mb-sm-4">Details de confirmation </h3>
                            <hr class="mx-n3 mx-sm-n5 mb-4">
                            <p class="mb-1">Montant envoyé<span class="text-3 float-right">{{ $data['youSend'] }} USD</span></p>
                            <p class="mb-1">Total de frais<span class="text-3 float-right">{{ session('fees') }} USD</span></p>
                            <hr>
                            <p class="text-4 font-weight-500">Total<span class="float-right">{{ session('totals') }} USD</span></p>
                            <button class="btn btn-primary btn-block" type="submit">Envover l'argent</button>
{{--                            <a class="btn btn-primary btn-block" href="{{ route('success-money') }}">Envover l'argent</a>--}}
                        </form>

                        <!-- Send Money Confirm end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
