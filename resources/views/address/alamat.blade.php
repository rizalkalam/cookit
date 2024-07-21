@extends('layouts.main')
@section('content')
<form action="/change/my_address" method="POST">
    @csrf
    <input type="hidden" name="address_id" id="address_id" value="{{ auth()->user()->address_id }}">
    <div class="section-bskt">
        <p class="title-keranjang">Alamat Saya</p>
        <div class="list-alamat">
            @if ($address->isEmpty())
                <h3>Silahkan tambah alamat anda</h3>
            @else
                @foreach ($address as $item)
                    <div id="con-alamat-{{ $item->id }}" class="con-alamat {{ auth()->user()->address_id === $item->id ? 'applied' : '' }}" onclick="selectAddress('{{ $item->id }}')">
                        <input type="radio" name="selected_address" value="{{ $item->id }}" {{ auth()->user()->address_id === $item->id ? 'checked' : '' }} style="display: none;">
                        <p class="contact-check-out">{{ $item->full_name }} (+62) {{ $item->phone_address }}</p>
                        <p class="address-check-out">{{ $item->complete_address }}</p>
                        <a href="/ubah_alamat/{{ $item->id }}">Ubah</a>
                        <div class="btn-delete-address" id="btn-delete-address_user" data-id-address="{{ $item->id }}">
                            <a>
                                <iconify-icon icon="mdi:trash" style="color: #fff" width="20"></iconify-icon>
                            </a>
                        </div>
                        @if (auth()->user()->address_id === $item->id)
                            <div class="badge-applied">
                                <p>Applied</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
            <a class="a-btn-add-alamat" href="/tambah_alamat">
                <button class="btn-add-alamat" type="button">
                    <iconify-icon class="custom-icon" icon="gala:add" ></iconify-icon>
                    Tambah Alamat
                </button>
            </a>
            <button class="btn-change" type="submit">
                Terapkan Perubahan
            </button>
        </div>
    </div>
</form>

{{-- modal-popup-cart --}}
<div id="deleteModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-delete-address_user"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Anda yakin ingin menghapus alamat?</p>
        <form action="/delete_address/{{ $item->id ?? null }}" method="POST" id="deleteForm">
            @csrf
            @method('DELETE')
            <input type="hidden" name="addressId_delete" id="addressId_delete">
            <button type="submit" class="btn-delete">Hapus</button>
        </form>
    </div>
</div>
{{-- modal-popup-cart --}}

<script>
    // modal delete
    document.addEventListener('DOMContentLoaded', function() {
        var delButtons = document.querySelectorAll('#btn-delete-address_user');
        var delModal = document.getElementById('deleteModal');
        var closeDelModal = document.getElementById('close-delete-address_user');
        var deleteForm = document.getElementById('deleteForm');

        delButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var addressId = this.getAttribute('data-id-address');
                
                console.log('ID:', addressId);

                document.getElementById('addressId_delete').value = addressId;

                delModal.style.display = 'block';
            });
        });

        closeDelModal.addEventListener('click', function() {
            delModal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == delModal) {
                delModal.style.display = 'none';
            }
        });
    });
    // modal delete

    function selectAddress(addressId) {
        // Update hidden input value
        document.getElementById('address_id').value = addressId;

        // Update radio button checked state
        document.querySelectorAll('input[name="selected_address"]').forEach(function(element) {
            element.checked = false;
        });
        document.querySelector('input[name="selected_address"][value="' + addressId + '"]').checked = true;

        // Remove 'applied' class from all elements and remove badges
        document.querySelectorAll('.con-alamat').forEach(function(element) {
            element.classList.remove('applied');
            var badge = element.querySelector('.badge-applied');
            if (badge) badge.remove();
        });

        // Add 'applied' class to the selected element and add badge
        var selectedElement = document.getElementById('con-alamat-' + addressId);
        selectedElement.classList.add('applied');
        var badgeDiv = document.createElement('div');
        badgeDiv.classList.add('badge-applied');
        badgeDiv.innerHTML = '<p>Applied</p>';
        selectedElement.appendChild(badgeDiv);
    }
</script>
@endsection



{{-- <div id="con-alamat" class="applied">
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
        </div> --}}