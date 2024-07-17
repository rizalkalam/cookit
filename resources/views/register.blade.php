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

<div class="container-register">
    <div class="content-register">
        <div class="logo-register">
            <img src="/assets/logo-login.svg" alt="">
        </div>
        <div class="form-register">
            <div class="title-form-register">
                <p>Please Fill out form to Register!</p>
            </div>
            <form method="post" class="con-register" action="/registration">
                @csrf
                <div class="input-form-register">
                    <p>Full name: </p>
                    <input type="text" name="full_name" id="full_name" class="input-reg" placeholder="nama lengkap" required />
                </div>
                <div class="input-form-register">
                    <p>Username:</p>
                    <input type="text" name="username" id="name" class="input-reg" placeholder="nama pengguna" required />
                </div>
                <div class="input-form-register">
                    <p>Email:</p>
                    <input type="email" name="email" id="email" class="input-reg" placeholder="masukkan email google anda" required />
                </div>
                <div class="input-form-register">
                    <p>Password:</p>
                    <input type="password" name="password" id="input_pw_reg" class="input-reg" required />
                </div>
                <div class="input-form-register">
                    <p>Confirm Password:</p>
                    <input type="password" name="confirm-password" id="confirm_pw_reg" class="input-reg" required />
                </div>
                <div class="show-password-register">
                    <input type="checkbox" onclick="visiblePassword()">
                    <p>show password</p>
                </div>
                <button class="btn-create-account" id="confirmPassword" type="submit">Register</button>
                <div class="txt-create-account">
                    <p>Yes i have an account? <a href="/login">Login</a></p>
                </div>
                <div class="border-line">
                    <div class="line-1"></div>
                    <p>or</p>
                    <div class="line-2"></div>
                </div>
                <a href="">
                    <button class="btn-google-logauth"><img src="/assets/google-icn.svg"><p>Continue with Google</p></button>
                </a>
                <div class="content-socialmedia">
                    <img src="/assets/icn-ig-form.svg" alt="">
                    <img src="/assets/icn-wa-form.svg" alt="">
                </div>
            </form>
        </div>
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

<script>
    function visiblePassword() {
    var x = document.getElementById("input_pw_reg");
    var y = document.getElementById("confirm_pw_reg");
    
        if (x.type === "password" && y.type === "password") {
            x.type = "text";
            y.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
        }
    }


    function validatePassword() {
        var password = document.getElementById("passsword").value;
        var confirmPassword = document.getElementById("confirm-password").value;

        if (password !== confirmPassword) {
            alert("Password tidak cocok!");
            return false; // Cegah pengiriman formulir
        } else {
            return true; // Izinkan pengiriman formulir
        }
    }
</script>
@endsection