@extends('front.layout')

@section('main')
    <div id="content">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">
                        <h3 class="font-weight-400 text-center mb-4">Sign Up</h3>

                        <x-jet-validation-errors class="mb-4 alert alert-danger" />

                        <hr class="mx-n4">
                        <p class="lead text-center">Your information is safe with us.</p>
                        <form id="signupForm" method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" required placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" required placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" class="form-control" id="loginPassword" required placeholder="Enter Password">
                            </div>
                            <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
                        </form>
                        <p class="text-3 text-muted text-center mb-0">Already have an account? <a class="btn-link" href="{{route('login')}}">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
