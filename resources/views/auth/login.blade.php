@extends('front.layout')


@section('main')

    <!-- Content
    ============================================= -->
    <div id="content">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">
                        <h3 class="font-weight-400 text-center mb-4">Sign In</h3>

                        <x-jet-validation-errors class="alert alert-danger " />

{{--                        @if (session('status'))--}}
{{--                            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        <hr class="mx-n5">
                        <p class="lead text-center">We are glad to see you again!</p>
                        <form id="loginForm" method="post" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" required placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" class="form-control" id="loginPassword" required placeholder="Enter Password">
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-check custom-control custom-checkbox">
                                        <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-sm text-right"><a class="btn-link" href="#">Forgot Password ?</a></div>
                            </div>
                            <button class="btn btn-primary btn-block my-4" type="submit">Sign In</button>
                        </form>
                        <p class="text-3 text-muted text-center mb-0">Don't have an account? <a class="btn-link" href="signup-3.html">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->

@endsection
