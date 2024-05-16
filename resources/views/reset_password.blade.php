@extends('layouts.main')
@section('content')
@if (session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
@endif
<div class="con-profile">
    <div class="con-profile-top">
        <img src="{{ auth()->user()->photo_profile }}" alt="">
        <div class="txt-profile-top">
            <h3>{{ auth()->user()->name }}</h3>
            <p>Member Platinum</p>
        </div>
    </div>
    <div class="main-profile">
        <div class="con-profile-left">
            <ul class="content-profile-left">
                <li><a href="/myaccount">Akun Saya</a></li>
                <li><a href="/member">Member</a></li>
                <li><a href="/reset-password" class='active-page'>Ubah Kata Sandi</a></li>
                <li><a href="">Riwayat Pesanan</a></li>
                <li><a href="">Laporan</a></li>
                <li><a href="">Pertanyaan</a></li>
            </ul>
            <div class="line-left"></div>
        </div>
        <div class="con-password-mid">
            <div class="content-password-mid">
                <p class="title-password-mid">Akun Saya</p>
                <form id="resetPasswordForm" action="/reset_password/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data" class="con-reset-password">
                    @csrf
                    <div class="input-form-reset-password">
                        <p>Kata Sandi Lama*</p>
                        <input type="password" id="password_lama" name="password_lama" class="input-reg" />
                    </div>
                    <div class="input-form-reset-password">
                        <p>Kata Sandi Baru*</p>
                        <input type="password" id="password_baru" name="password_baru" class="input-reg" />
                    </div>
                    <div class="input-form-reset-password">
                        <p>Ulang Kata Sandi Baru*</p>
                        <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="input-reg" />
                    </div>
                    
                    <div class="input-form-reset-password">
                        <div class="gap"></div>
                    </div>
                </form>
                <p class="noted-reset-password">*minimal 8 karakter terdiri dari huruf, angka, dan simbol (@, #, $)</p>
            </div>
        </div>
        <div class="con-password-right">
            <button class="btn-reset-password-save" id="confirmResetPassword">Simpan</button>
        </div>
    </div>
</div>

<script>
    document.getElementById('confirmResetPassword').onclick = function() {
            if (confirm('Apakah Anda yakin ingin menyimpan perubahan?')) {
                document.getElementById('resetPasswordForm').submit();
            }
        };
</script>
@endsection