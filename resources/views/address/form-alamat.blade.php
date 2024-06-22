@extends('layouts.main')
@section('content')
    <div class="section-bskt">
        <p class="title-keranjang">Tambah Alamat</p>
        <div class="input-alamat-1">
            <p>Kontak</p>
            <input type="name" name="name" id="name" placeholder="Nama Lengkap" required />
            <input type="name" name="name" id="name" placeholder="Nomor Telepon" required />
        </div>
        <div class="input-alamat-2">
            <input type="name" name="name" id="name" placeholder="Area Surabaya" required />
            <input type="name" name="name" id="name" placeholder="Kecamatan" required />
            <input type="name" name="name" id="name" placeholder="Alamat Lengkap" required />
        </div>
        <a href="/detail/product">
            <button class="btn-sv-form-alamat">
                Simpan
            </button>
        </a>
    </div>
@endsection