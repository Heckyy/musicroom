@extends("templates.app")
@section('title')
    <title>MusicRoom | Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<section id="login">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-6 g-0 ">
                <img class="img-fluid" src="{{ asset("img/login-img.png") }}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col ">
                        <img class="img-logo img-fluid" src="{{asset("svg/musicroom-logo.svg")}}" alt="">
                    </div>
                 <div class="row">
                     <div class="col  d-flex justify-content-center align-items-center">
                         <div class="form-login">
                             <form action="/submitLogin" method="POST">
                                 @csrf
                                 <h2 class="tittle">Welcome Back to the Beat!</h2>
                                 <h6 class="subtittle-login  mt-lg-4">Sign in and sync up with vibrant music <br>community</h6>
                                 <div class="form-login-body mt-lg-5">
                                     <h6 class="text-white">Email</h6>
                                     <input type="email" name="email" placeholder="Input your email">
                                     <h6 class="text-white mt-lg-4">Password</h6>
                                     <input name="password" type="text" placeholder="Input your password">
                                 </div>
                                 <button class="btn  btn-login mt-lg-5 text-white">Log in</button>
                                 <div class="slice mt-lg-3"></div>
                                 <button class="btn  btn-google mt-lg-3"><img class="me-lg-2" src="{{asset("img/google.png")}}" width="16" height="16" alt="">Log in via Google</button>
                                 <div class="div form-login-footer mt-lg-4 text-center">
                                     <a href="/signup"><p class="text-footer">Don't have an account? <span class="link-sign-up">Sign up</span> </p></a>
                                     <p class="forgot-password link-sign-up">Forgot your password?</p>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection
