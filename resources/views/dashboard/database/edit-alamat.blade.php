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
            <a href="#about">
                <iconify-icon icon="solar:hand-stars-linear" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a class="active" href="#about">
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
    <p class="title-dashboard">Edit / Tambah</p>
    <div class="sec-button-db-form">
        <a href="/detail/product">
            <button class="btn-add-db">Add</button>
        </a>
        <a href="/detail/product">
            <button class="btn-delete-db">Delete</button>
        </a>
    </div>
    <div class="container-data-alamat">
        <div class="input-form-data-alamat">
            <p>Area</p>
            <input type="name" name="name" id="name" placeholder="Surabaya Kota" required />
        </div>
        <div class="input-form-data-alamat">
            <p>Kecamatan</p>
            <input type="name" name="name" id="name" placeholder="Bubutan" required />
            <input type="name" name="name" id="name" placeholder="Genteng" required />
            <input type="name" name="name" id="name" placeholder="Gubeng" required />
        </div>
        <div class="add-data-alamat">
            <a class="icn-add-data-alamat" href="#contact">
                <iconify-icon icon="material-symbols:add-box" width="38"></iconify-icon>
            </a>
        </div>
    </div>
</div>
@endsection