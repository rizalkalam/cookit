@extends('layouts.main')
@section('content')   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
@endif

<div class="nav-auth">
    <img src="/assets/logo-v2.svg" alt="" class="img-">
</div>

<div class="content-login">
    <div class="form-login">
        <div class="title-form-login">
            <p>Welcome Back!</p>
        </div>
        <form method="post" class="con-login" action="/auth">
            @csrf
            <div class="input-form-login">
                <p>Username: </p>
                <input type="name" name="name" id="name" class="input-reg" required />
            </div>
            <div class="input-form-login">
                <p>Password:</p>
                <input type="password" name="password" id="password" class="input-reg" required />
            </div>
            <button class="btn-login-account" type="submit">Login</button>
            <div class="border-line">
                <div class="line-1"></div>
                <p>or</p>
                <div class="line-2"></div>
            </div>
            <a href="">
                <button class="btn-google-logauth"><img src="/assets/google-icn.svg"><p>Continue with Google</p></button>
            </a>
            <div class="txt-login-account">
                <p>Dont  have and account? <a href="/register">Register</a></p>
            </div>
            <div class="content-socialmedia">
                <img src="/assets/icn-ig-form.svg" alt="">
                <img src="/assets/icn-wa-form.svg" alt="">
            </div>
        </form>
    </div>
    <div class="logo-login">
        <img src="/assets/logo-login.svg" alt="">
    </div>
</div>
<footer class="footer-auth">
    <div class="content-footer-auth">
        <p class="copyright">
            All rights Reserved
            <span>
                © CookIt 2024
            </span>
        </p>
    </div>
</footer>
@endsection