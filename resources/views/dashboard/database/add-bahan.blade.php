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
            <form action="/logout" method="post">
                @csrf
                <button type="submit"><iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout</button>
            </form>
        </div>
    </div>
</div>
{{-- end-sidebar --}}

<div class="dashboard-content">
    <p class="title-dashboard">Edit / Tambah</p>
    <form action="/dashboard/database/bahan_dikirim/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="sec-button-db-form">
            <button type="submit" class="btn-add-db">Add</button>
        </div>
        <div class="sec-content-db-form">
            <div class="left-db-form">
                <div class="img-db-form">
                    <img id="output_img_bahan" src="/assets/img-default.png" alt="">
                    <img id="default_img_bahan" src="/assets/img-default.png" alt="" style="display: none">
                </div>
                <div class="con-btn-form-bahan">
                    <div class="">
                        <label for="input_img_bahan" class="btn-upload-img-bahan">Upload</label>
                        <input id="input_img_bahan" name="material_img"  type="file" accept="image/*" onchange="loadFile(event)" style="display: none">
                    </div>
                    <button type="button" id="clearBtn" class="btn-delete-img-bahan">Delete</button>
                </div>
            </div>
            <div class="right-db-form">
                <div class="input-form-edit-menu">
                    <p>Nama Bahan: </p>
                    <input type="text" name="material_name" id="material_name" required />
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // preview upload img
    input_img_bahan.onchange = evt => {
    const [file] = input_img_bahan.files
        if (file) {
            output_img_bahan.src = URL.createObjectURL(file)
            output_img_bahan.style.display = 'block';
            default_img_bahan.style.display = 'none';
        }

        clearBtn.onclick = () => {
            input_img_bahan.value = ""; // Mengosongkan input file
            output_img_bahan.src = "#"; // Mengatur ulang sumber gambar
            output_img_bahan.style.display = 'none'; // Menyembunyikan gambar pratinjau
            default_img_bahan.style.display = 'block';
        }
    }
</script>
@endsection