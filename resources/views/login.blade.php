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
<div class="container-login">
    <div class="img-login">
        <img src="/assets/logo-big.svg" alt="">
    </div>
    <div class="form-login">
        <p>Masuk</p>
        <form method="post" class="con-login" action="/auth">
            @csrf
            <div class="input-form">
                <p>Alamat Email*</p>
                <input type="email" name="email" id="email" class="input-reg" required />
            </div>
            <div class="input-form">
                <p>Kata Sandi*</p>
                <input type="password" name="password" id="password" class="input-reg" required />
            </div>
            <button class="btn-create-account" type="submit">Masuk</button>
            <div class="txt-create-account">
                <a href="">Lupa kata sandi</a>
            </div>
        </form>
    </div>
</div>
@endsection