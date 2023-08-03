@extends("templates.app")
@section('title')
    <title>MusicRoom | SignUp</title>
{{--    <link rel="stylesheet" href="{{ asset('css/login.css') }}">--}}
@endsection
@section('content')
    <section id="login">
        @if($errors)
        <div id="alert" class="alert alert-danger" role="alert">
            Email yang anda masukan sudah terdaftar!
        </div>
        @endif
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-6 g-0 ">
                    <img class="img-fluid" src="{{ asset("img/login-img.png") }}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col">
                            <img class="img-logo img-fluid" src="{{asset("svg/musicroom-logo.svg")}}" alt="">
                        </div>
                        <div class="row ">
                            <div class="col  d-flex justify-content-center align-items-center">
                                <div class="form-login">
{{--                                    <form action="/submitSignUp" method="POST">--}}
{{--                                        @csrf--}}
                                        <p class="heading-5-bold tittle">You're One Step <br>Away  from the <br>Music World!</p>
                                        <h6 class="subtittle-login body-text-1-regular  mt-lg-4">Sign up now and let's explore the musical universe
                                            <br>together.</h6>
                                        <div class="form-login-body mt-lg-5">
                                            <h6 class="text-white body-text-2-regular">Full Name</h6>
                                            <input class="mb-lg-4" type="text" id="fullname" name="fullname" placeholder="Input full name" value="{{old('fullname')}}">
                                            <h6 class="text-white body-text-2-regular">Email</h6>
                                            <input type="email" name="email" id="email" placeholder="Input your email" value="{{old('email')}}">
                                            <p class="text-danger mt-lg-2 d-none" id="error">Email yang anda masukan sudah terdaftar!</p>

                                            <h6 class="text-white mt-lg-4 body-text-2-regular" id="password">Password</h6>
                                            <input name="password" type="password" placeholder="Input your password">
                                        </div>
                                        <button class="btn button-medium  btn-login mt-lg-5 text-white" id="createAccount" onclick="submitSignup()">Create Account</button>
                                        <div class="slice mt-lg-3"></div>
                                        <button class="btn button-medium  btn-google mt-lg-3"><img class="me-lg-2" src="{{asset("img/google.png")}}" width="16" height="16" alt="">Sign Up via Google</button>
                                        <div class="div form-login-footer mt-lg-4 text-center">
                                            <p class="text-footer button-medium">Already have an account? <a href="/login"> <span class="link-sign-up">Log in</span></a> </p>
                                        </div>
{{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer-script')
    <script src="{{asset("js/signup.js")}}"></script>
@endsection
