@extends('layouts.main')
@section('content')
<form action="/update_address/{{ $address->id }}" method="POST">
@csrf
    <div class="section-bskt">
        <p class="title-keranjang">Tambah Alamat</p>
        <div class="input-alamat-1">
            <p>Kontak</p>
            <input type="name" name="full_name" id="full_name" placeholder="Nama Lengkap" value="{{ old('full_name', $address->full_name) }}" required />
            <input type="name" name="phone_address" id="phone_address" placeholder="Nomor Telepon (masukkan angka setelah +62)" value="{{ old('phone_address', $address->phone_address) }}" required />
        </div>
        <div class="input-alamat-2">
            <select name="area" id="area">
                <option class="select-placeholder" value="" disabled selected>Area Surabaya</option>
                @foreach($areas as $area)
                    <option value="{{ old('area', $area->id) }}">{{ $area->area }}</option>
                @endforeach
            </select>
            <select name="district" id="district" required>
                <option value="">Pilih Kecamatan</option>
            </select>
            <input type="name" name="complete_address" id="complete_address" placeholder="Alamat Lengkap" value="{{ old('complete_address', $address->complete_address) }}" required />
        </div>
        <button type="submit" class="btn-sv-form-alamat">
            Simpan
        </button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function() {
            $('#area').change(function() {
                var areaId = $(this).val();
                var districtSelect = $('#district');

                if (areaId) {
                    $.ajax({
                        url: '/get_districts',
                        type: 'GET',
                        data: { area_id: areaId },
                        dataType: 'json',
                        success: function(data) {
                            districtSelect.empty();
                            districtSelect.append('<option value="">Pilih Kecamatan</option>');
                            $.each(data, function(key, value) {
                                districtSelect.append('<option value="'+ value.id +'">'+ value.district_name +'</option>');
                            });
                        }
                    });
                } else {
                    districtSelect.empty();
                    districtSelect.append('<option value="">Pilih Kecamatan</option>');
                }
            });
        });
</script>
@endsection