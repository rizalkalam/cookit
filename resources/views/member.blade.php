@extends('layouts.main')
@section('content')
<div class="con-profile">
    <div class="con-profile-top">
        <img src="{{ auth()->user()->photo_profile }}" alt="">
        <div class="txt-profile-top">
            <h3>{{ auth()->user()->name }}</h3>
            <p>Member Platinum</p>
        </div>
    </div>
    <div class="main-profile">
        <div class="con-member-left">
            <ul class="content-profile-left">
                <li><a href="/myaccount">Akun Saya</a></li>
                <li><a href="/member" class='active-page'>Member</a></li>
                <li><a href="/reset-password">Ubah Kata Sandi</a></li>
                <li><a href="">Riwayat Pesanan</a></li>
                <li><a href="">Laporan</a></li>
                <li><a href="">Pertanyaan</a></li>
            </ul>
            <div class="line-left"></div>
        </div>
        <div class="con-member-mid">
            <div class="content-profile-mid">
                {{-- konten member --}}
                <div class="txt-grup-profile-mid">
                    <p class="title-profile-mid">Status</p>
                    <div>
                        <p class="title-txt-grup-profile-mid">Member Platinum</p>
                        <p class="dsc-txt-grup-profile-mid">Berlaku hingga 01/04/2024</p>
                    </div>
                </div>
                <div class="txt-grup-profile-mid">
                    <p class="title-profile-mid">Riwayat Pembelian</p>
                    <div class="txt-grub-riwayatpembelian">
                        <p class="title-txt-grup-profile-mid">Member Platinum</p>
                        <p class="dsc-txt-grup-profile-mid">01/02/2024--01/03/2024</p>
                    </div>
                    <div class="txt-grub-riwayatpembelian">
                        <p class="title-txt-grup-profile-mid">Member Platinum</p>
                        <p class="dsc-txt-grup-profile-mid">01/01/2024--01/02/2024</p>
                    </div>
                </div>
                <div class="txt-grup-profile-mid">
                    <p class="title-profile-mid">Pembelian</p>
                    <div class="input-group-profile-mid">
                        <div class="input-jenis-member">
                            <p class="title-input-profile-mid">Jenis Member</p>
                            <div class="con-search-filter">
                                <div class="con-filter">
                                  <select name="filter-produk" id="filter-produk" class="filter-produk">
                                    <option hidden>Platinum</option>
                                    <option value="all">Semua</option>
                                    <option value="alphard">Alphard</option>
                                    <option value="fortuner">Fortuner</option>
                                    <option value="innovaZenix">Innova Zenix</option>
                                    <option value="innova">Innova</option>
                                    <option value="rush">Rush</option>
                                    <option value="yarisCross">Yaris Cross</option>
                                    <option value="yaris">Yaris</option>
                                    <option value="agya">Agya</option>
                                    <option value="veloz">Veloz</option>
                                    <option value="avanza">Avanza</option>
                                    <option value="raize">Raize</option>
                                    <option value="calya">Calya</option>
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="input-waktu">
                            <p class="title-input-profile-mid">Waktu</p>
                            <div class="con-search-filter">
                                <div class="con-filter">
                                  <select name="filter-produk" id="filter-produk" class="filter-produk">
                                    <option hidden>1 Bulan</option>
                                    <option value="all">Semua</option>
                                    <option value="alphard">Alphard</option>
                                    <option value="fortuner">Fortuner</option>
                                    <option value="innovaZenix">Innova Zenix</option>
                                    <option value="innova">Innova</option>
                                    <option value="rush">Rush</option>
                                    <option value="yarisCross">Yaris Cross</option>
                                    <option value="yaris">Yaris</option>
                                    <option value="agya">Agya</option>
                                    <option value="veloz">Veloz</option>
                                    <option value="avanza">Avanza</option>
                                    <option value="raize">Raize</option>
                                    <option value="calya">Calya</option>
                                  </select>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                {{-- end konten member --}}
            </div>
            <div class="line-mid"></div>
        </div>
        <div class="con-member-right">
            {{-- konten member --}}
            <div class="txt-group-member-right">
                <div>
                    <p class="title-profile-right">Member Platinum</p>
                    <p class="dsc-member-right">(1 Bulan)</p>
                </div>
                <p class="txt-keuntungan">Keuntungan: </p>
                <ul>
                    <li>Gratis ongkir 4x dalam 1 bulan</li>
                    <li>Voucher diskon 20% maksimal pembelian 100RB</li>
                </ul>
            </div>
            <div class="btn-member-right">
                <a href="">
                    <button class="btn-beli">Beli</button>
                </a>
            </div>
            {{-- end konten member --}}
        </div>
    </div>
</div>
@endsection