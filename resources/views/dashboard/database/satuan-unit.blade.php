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
    <p class="title-dashboard">Input Data : Satuan Unit</p>
    <div class="container-satuan-unit">
        <div class="con-data-profile">
            <p class="txt-data-left">Sdt</p>
            <a class="delete-data-detaildb" href="">Hapus</a>
        </div>
        <div class="con-data-profile">
            <p class="txt-data-left">Bks</p>
            <a class="delete-data-detaildb" href="">Hapus</a>
        </div>
        <div class="con-data-profile">
            <p class="txt-data-left">Helai</p>
            <a class="delete-data-detaildb" href="">Hapus</a>
        </div>
        <a href="/detail/product">
            <button class="btn-dshb-db">
                <iconify-icon icon="gala:add" width="18"></iconify-icon>
                Add New
            </button>
        </a>
    </div>
</div>
@endsection