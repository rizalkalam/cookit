@extends('layouts.main')
@section('content')
{{-- sidebar --}}
<div class="wrap-side">
    <div class="sidebar">
        <div class="side-menu" id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/home">
                <iconify-icon icon="radix-icons:dashboard" width="20"></iconify-icon>
                Dashboard
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/product">
                <iconify-icon icon="fluent:box-multiple-checkmark-24-regular" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/order_list">
                <iconify-icon icon="hugeicons:note-03" width="20"></iconify-icon>
                Order
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/review">
                <iconify-icon icon="solar:hand-stars-linear" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/customer">
                <iconify-icon icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a class="active" href="/dashboard/database">
                <iconify-icon class="active" icon="iconoir:database" width="20"></iconify-icon>
                Database
            </a>
        </div>
        <div class="line-gap-sidebar"></div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="mage:settings" width="20"></iconify-icon>
                Settings
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout
            </a>
        </div>
    </div>
</div>
{{-- end-sidebar --}}

<div class="dashboard-content">
    <p class="title-dashboard">Input Data</p>
    <div class="container-dshb-db">
        <div class="con-dshb-db">
            <div class="icn-dshb-db">
                <img src="/assets/icn-profile-rasa.svg" alt="">
            </div>
            <a href="/dashboard/database/profile_rasa">
                <button class="btn-dshb-db">Profile Rasa</button>
            </a>
        </div>
        <div class="con-dshb-db">
            <div class="icn-dshb-db">
                <img src="/assets/icn-bahan.svg" alt="">
            </div>
            <a href="/dashboard/database/bahan_dikirim">
                <button class="btn-dshb-db">Bahan yang dikirim</button>
            </a>
        </div>
        <div class="con-dshb-db">
            <div class="icn-dshb-db">
                <img src="/assets/icn-unit.svg" alt="">
            </div>
            <a href="/dashboard/database/satuan_unit">
                <button class="btn-dshb-db">Satuan Unit</button>
            </a>
        </div>
        <div class="con-dshb-db">
            <div class="icn-dshb-db">
                <img src="/assets/icn-alamat-db.svg" alt="">
            </div>
            <a href="/dashboard/database/data_alamat">
                <button class="btn-dshb-db">Detail Alamat</button>
            </a>
        </div>
    </div>
</div>
@endsection