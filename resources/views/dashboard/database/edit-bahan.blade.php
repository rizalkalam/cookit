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
    <form action="/dashboard/database/bahan_dikirim/{{ $material->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="sec-button-db-form">
            <button type="submit" class="btn-add-db">Save</button>
            <a href="#" class="delete-data-detaildb" data-bahan-id="{{ $material->id }}">
                <button class="btn-delete-db-material">Delete</button>
            </a>
        </div>
        <div class="sec-content-db-form">
            <div class="left-db-form">
                <div class="img-db-form">
                    <img id="output_img_bahan" src="/{{ $material->material_img }}" alt="">
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
                    <input type="name" name="material_name" id="name" value="{{ old('material_name', $material->material_name) }}" />
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Form untuk menghapus data (di dalam loop) -->   
<form id="delete-bahan-{{ $material->id }}" method="POST" action="/dashboard/database/bahan_dikirim/{{ $material->id }}" style="display:none;">
    @csrf
    @method('DELETE')
</form>

<script>
    // Event listener untuk link 'Hapus'
    document.querySelectorAll('.delete-data-detaildb').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('data-bahan-id'); // Ambil atribut data-bahan-id

            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                // Temukan form yang sesuai berdasarkan id
                var form = document.getElementById('delete-bahan-' + id);
                if (form) {
                    form.submit();
                }
            }
        });
    });
</script>
@endsection