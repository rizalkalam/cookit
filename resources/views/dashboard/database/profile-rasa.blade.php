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
    <p class="title-dashboard">Input Data : Profil Rasa</p>
    <div class="container-profile-rasa">
        @foreach ($flavors as $flavor)
        <div class="con-data-profile">
            <p class="txt-data-left">{{ $flavor->flavor }}</p>
            <a class="delete-data-detaildb" href="#" data-id="{{ $flavor->id }}">
                Hapus
            </a>
        </div>
        @endforeach
        <button class="btn-dshb-db" id="modal-add-profiledata">
                <iconify-icon icon="gala:add" width="18"></iconify-icon>
                Add New
        </button>
    </div>
</div>

{{-- modal --}}
<form action="/dashboard/database/profile_rasa/create" method="POST">
    @csrf
    <div id="modal-add-profilerasa">
        <div id="exampleModal" class="reveal-modal-profilerasa">
            <button class="btn-close-modal"><img src="/assets/close-modal.svg" alt=""></button>
            <input type="text" placeholder="tambah rasa" name="flavor" id="flavor" required>
            <div class="">
                <a href="">
                    <button class="btn-modal-livetopromote" type="submit">Submit</button>
                </a>
            </div>
        </div>
    </div>
</form>
{{-- modal --}}

<!-- Form untuk menghapus data (di dalam loop) -->
@foreach ($flavors as $flavor)    
<form id="delete-form-{{ $flavor->id }}" method="POST" action="/dashboard/database/profile_rasa/{{ $flavor->id }}" style="display:none;">
    @csrf
    @method('DELETE')
</form>
@endforeach

<!-- Fungsi JavaScript -->
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

    // Event listener untuk link 'Hapus'
    document.querySelectorAll('.delete-data-detaildb').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('data-id');
            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                // Temukan form yang sesuai berdasarkan id
                var form = document.getElementById('delete-form-' + id);
                if (form) {
                    form.submit();
                }
            }
        });
    });
</script>

@endsection