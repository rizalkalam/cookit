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
                <li><a href="/myaccount" class='active-page'>Akun Saya</a></li>
                <li><a href="/member">Member</a></li>
                <li><a href="/reset-password">Ubah Kata Sandi</a></li>
                <li><a href="">Riwayat Pesanan</a></li>
                <li><a href="">Laporan</a></li>
                <li><a href="">Pertanyaan</a></li>
            </ul>
            <div class="line-left"></div>
        </div>
        <div class="con-profile-mid">
            <div class="content-profile-mid">
                <p class="title-profile-mid">Akun Saya</p>
                <form action="/update_profile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data" class="con-myaccount">
                    @csrf
                    <div class="input-form-myaccount">
                        <p>Username</p>
                        <input type="username" id="username" name="username" class="input-reg" value="{{ old('username', auth()->user()->username) }}" />
                    </div>
                    <div class="input-form-myaccount">
                        <p>Nama</p>
                        <input type="name" id="name" name="name" class="input-reg" value="{{ old('name', auth()->user()->name) }}" />
                    </div>
                    <div class="input-form-myaccount">
                        <p>Email</p>
                        <input type="email" id="email" name="email" class="input-reg" value="{{ old('email', auth()->user()->email) }}" />
                    </div>
                    <div class="input-form-myaccount">
                        <p>No. Telp</p>
                        <input type="phone" id="phone" name="phone" class="input-reg" value="{{ old('phone', auth()->user()->phone) }}" />
                    </div>
                    <div class="input-form-myaccount">
                        <div class="gap"></div>
                        <button class="btn-save" type="submit" onclick="confirmUpdate()">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="line-mid"></div>
        </div>
        <div class="con-profile-right">
            <img src="{{ auth()->user()->photo_profile }}" alt="">
            <div class="underimg-profile-right">
                <form id="form-foto-input" action="/update_pp/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo_profile" id="photoInput" style="display: none;">
                    {{-- <label for="photo_profile" class="btn-choose-photo">
                        Pilih Gambar
                    </label> --}}
                </form>
                <button class="btn-choose-photo" onclick="document.getElementById('photoInput').click()">Pilih Gambar</button>
                {{-- <a href="">
                    
                </a> --}}
                <p>Ukuran gambar: maks. 1 MB</p>
                <p>Format gambar: .JPEG, .PNG</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('photoInput').onchange = function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var newImageSrc = e.target.result;
            // Tampilkan alert dengan tombol "Submit"
            var confirmed = confirm('Apakah Anda yakin ingin mengubah gambar?\nKlik "OK" untuk mengubah.');
            if (confirmed) {
                document.getElementById('form-foto-input').submit(); // Submit formulir
            }
        }
        reader.readAsDataURL(file);
    };
</script>
@endsection