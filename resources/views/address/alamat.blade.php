@extends('layouts.main')
@section('content')
    <div class="section-bskt">
        <p class="title-keranjang">Alamat Saya</p>
        <div class="list-alamat">
            <div id="con-alamat" class="applied">
                <p class="contact-check-out">NALA FADILLAH (+62) 85159064429</p>
                <p class="addres-check-out">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
                <a href="">Ubah</a>
                <div class="badge-applied">
                    <p>Applied</p>
                </div>
            </div>
            <div id="con-alamat">
                <p class="contact-check-out">NALA FADILLAH (+62) 85159064429</p>
                <p class="addres-check-out">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
                <a href="">Ubah</a>
            </div>
            <div id="con-alamat">
                <p class="contact-check-out">NALA FADILLAH (+62) 85159064429</p>
                <p class="addres-check-out">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
                <a href="">Ubah</a>
            </div>
            <a href="/detail/product">
                <button class="btn-add-alamat">
                    <iconify-icon icon="gala:add" width="20"></iconify-icon>
                    Tambah Alamat
                </button>
            </a>
            <a href="/detail/product">
                <button class="btn-change">
                    Terapkan Perubahan
                </button>
            </a>
        </div>
    </div>
@endsection