@extends('layouts.main')
@section('content')    
<div class="container-login">
    <div class="img-login">
        <img src="/assets/logo-big.svg" alt="">
    </div>
    <div class="form-login">            
        <p>Daftar</p>
        <form action="/registration" method="post" enctype="multipart/form-data" class="con-login">
            @csrf
            <div class="input-form">
                <p>Nama*</p>
                <input type="text" id="name" name="name" class="input-reg" />
            </div>
            <div class="input-form">
                <p>Alamat Email*</p>
                <input type="text" id="email" name="email" class="input-reg" />
            </div>
            <div class="input-form">
                <p>Kata Sandi*</p>
                <input type="text" id="password" name="password" class="input-reg" />
            </div>
            <button class="btn-create-account" type="submit">Buat Akun</button>
            <div class="txt-create-account">
                <p>Sudah punya akun?</p>
                <a href="/login">Masuk disini</a>
            </div>
        </form>
    </div>
</div>
@endsection