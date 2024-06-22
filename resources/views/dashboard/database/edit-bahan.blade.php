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
    <div class="sec-content-db-form">
        <div class="left-db-form">
            <div class="img-db-form">
                <img src="/assets/img-default.png" alt="">
            </div>
            <div class="con-btn-db-form">
                <a href="/detail/product">
                    <button class="btn-upload-menu">Upload</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-delete-menu">Delete</button>
                </a>
            </div>
        </div>
        <div class="right-db-form">
            <div class="input-form-edit-menu">
                <p>Nama Bahan: </p>
                <input type="name" name="name" id="name" required />
            </div>
        </div>
    </div>
</div>
@endsection