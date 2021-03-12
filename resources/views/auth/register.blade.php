@extends('front.layout')

@section('main')
    <div id="content">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">
                        <h3 class="font-weight-400 text-center mb-4">S'inscrire</h3>

                        <x-jet-validation-errors class="mb-4 alert alert-danger" />

                        <hr class="mx-n4">
                        <p class="lead text-center">Vos informations sont en sécurité avec nous.</p>
                        <form id="signupForm" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="fullName">Nom complet</label>
                                <input type="text" class="form-control" name="name" id="fullName" required placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Mail </label>
                                <input type="email" class="form-control" name="email" id="emailAddress" required placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Mot de passe</label>
                                <input type="password" class="form-control" id="loginPassword" name="password" required placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Confirme mot de passe</label>
                                <input type="password" class="form-control" id="loginPassword" name="password_confirmation" required placeholder="Enter Password">
                            </div>
                            <button class="btn btn-primary btn-block my-4" type="submit">S'inscrire</button>
                        </form>
                        <p class="text-3 text-muted text-center mb-0">Avez vous deja un compte ? <a class="btn-link" href="{{route('login')}}">Se connecter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
