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
    <p class="title-dashboard">Edit</p>
    <form action="/dashboard/database/data_alamat/{{ $addres->id }}" method="POST">
        @csrf
        <div class="sec-button-db-form">
            <button type="submit" class="btn-add-db">Save</button>
            <button type="button" class="delete-data-detaildb" data-alamat-id="{{ $addres->id }}">Delete</button>
        </div>
        <div class="container-data-alamat">
            <div class="input-form-data-alamat">
                <p>Area</p>
                <input type="text" name="area" id="area" placeholder="{{ $addres->area }}" value="{{ old('area', $addres->area) }}" required />
            </div>
            <div class="input-form-data-alamat">
                <p>Kecamatan</p>
                @foreach ($districts as $district) 
                    <div class="con-disctrict">
                        <input type="name" name="name" id="name" placeholder="{{ $district->district_name }}" disabled />
                        <button type="button" class="btn-more-db" id="btn-more-address" 
                        data-district-id="{{ $district->id }}"
                        data-district-name="{{ $district->district_name }}"
                        data-district-cost="{{ $district->shipping_cost }}"
                        >
                            <iconify-icon icon="jam:more-vertical-f" width="25" style="color: #fff"></iconify-icon>
                        </button>
                    </div>   
                @endforeach
            </div>
            <div class="add-data-alamat">
                <a class="icn-add-data-alamat" href="#contact" id="modal-add-profiledata">
                    <iconify-icon icon="material-symbols:add-box" width="38"></iconify-icon>
                </a>
            </div>
        </div>
    </form>
</div>

{{-- modal --}}
<form action="/dashboard/database/district/{{ $area_id }}" method="POST">
    @csrf
    <div id="modal-add-profilerasa">
        <div id="exampleModal" class="reveal-modal-profilerasa">
            <button class="btn-close-modal"><img src="/assets/close-modal.svg" alt=""></button>
            <input type="text" placeholder="tambah kecamatan" name="district_name" id="district_name" required>
            <input type="number" placeholder="ongkir" name="shipping_cost" id="shipping_cost" required>
            <div class="">
                <button class="btn-modal-livetopromote" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
{{-- modal --}}

{{-- modal-more --}}
@foreach ($districts as $district)
<div id="moreModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-more-modal"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Silahkan edit/hapus data</p>
        <form action="/dashboard/database/district_update/{{ $district->id }}" method="POST">
            @csrf
            <input type="hidden" name="district_id" id="districtId">
            <div class="input-modal-liveproduct">
                <label class="label-input-liveproduct" for="districtName">Kecamatan</label>
                <input type="text" name="district_name" id="districtName">
            </div>
            <div class="input-modal-liveproduct">
                <label class="label-input-liveproduct" for="districtCost">Ongkir</label>
                <input type="text" name="shipping_cost" id="districtCost">
            </div>
            <div class="sec-btn-moremodal">
                <a href="#" class="delete-district" data-district-id="{{ $district->id }}">
                    <button class="btn-delete">Hapus</button>
                </a>
                <button type="submit" class="btn-delete">Simpan perubahan</button>
            </div>
        </form>
    </div>
</div>
@endforeach
{{-- modal-more --}}

<!-- Form untuk menghapus data (di dalam loop) -->   
<form id="delete-alamat-{{ $addres->id }}" method="POST" action="/dashboard/database/data_alamat/{{ $addres->id }}" style="display:none;">
    @csrf
    @method('DELETE')
</form>

<!-- Form untuk menghapus data (di dalam loop) -->   
@foreach ($districts as $district)    
    <form id="delete-district-{{ $district->id }}" method="POST" action="/dashboard/database/district/{{ $district->id }}" style="display:none;">
        @csrf
        @method('DELETE')
    </form>
@endforeach

<script src="/js/modal-form-dbaddres.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById("modal-add-profilerasa");

    // Get the button that opens the modal
    var btn = document.getElementById("modal-add-profiledata");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("btn-close-modal")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.querySelectorAll('.delete-data-detaildb').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('data-alamat-id'); // Ambil atribut data-alamat-id

            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                // Temukan form yang sesuai berdasarkan id
                var form = document.getElementById('delete-alamat-' + id);
                if (form) {
                    form.submit();
                }
            }
        });
    });

    document.querySelectorAll('.delete-district').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('data-district-id'); // Ambil atribut data-district-id

            if (confirm('Apakah Anda yakin ingin menghapus district ini?')) {
                // Temukan form yang sesuai berdasarkan id
                var form = document.getElementById('delete-district-' + id);
                if (form) {
                    form.submit();
                }
            }
        });
    });
</script>
@endsection