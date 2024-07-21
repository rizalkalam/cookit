@extends('layouts.main')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
@endif

<div class="profile-content">
    <form action="/update_profile" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="con-head-profile">
            <p class="title-profile">Profile Saya</p>
            <button type="submit" class="btn-sv-profile">Save</button>
        </div>
    
        <div class="sec1-form-profile">
            @foreach ($profiles as $profile)    
            <div class="left-db-form">
                <div class="img-profile-picture">
                    <img id="output_img_bahan" src="/{{ $profile->photo_profile }}" alt="">
                    <img id="default_img_bahan" src="/assets/img-default.png" alt="" style="display: none">
                </div>
                <div class="con-btn-form-profile">
                    <div class="">
                        <label for="input_img_bahan" class="btn-upload-img-profile">Upload</label>
                        <input id="input_img_bahan" name="photo_profile" type="file" accept="image/*" onchange="loadFile(event)" style="display: none">
                    </div>
                    <button type="button" id="clearBtn" class="btn-delete-img-profile">Delete</button>
                </div>
            </div>
            <div class="input-form-profile">
                <input type="text" name="name" id="name" value="{{ old('name', $profile->name) }}" required />
                <input type="text" placeholder="masukkan format nomor (62XXXXXXXXXXX)" name="phone" id="phone" value="{{ old('phone', $profile->phone) }}" required />
                <input type="email" name="email" id="email" value="{{ old('email', $profile->email) }}" required />
            </div>
            @endforeach
        </div>
    </form>    

    <div class="sec2-detail-customer">
        <p class="title-sec-profile">Riwayat Pesanan</p>
        <div class="container-sec2-detail-customer">
            @foreach ($formattedOrders as $orderGroup)
                <div class="con-sec2-detail-customer">
                    <p class="date-history-detail-customer">{{ $orderGroup['date'] }}</p>
                    <div class="table-detail-customer">
                        <div class="head-table-con-sec2">
                            <p class="txt-kode-profile">Kode Pesanan :{{ $orderGroup['order_id'] }}</p>
                            <div class="txt-completed">
                                <p class="txt-completed">{{ ucfirst($orderGroup['data'][0]['status']) }}</p>
                            </div>
                        </div>
                        @foreach ($orderGroup['data'] as $order)
                            <table id="detail-profile">
                                <tr>
                                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">{{ $order['menu_name'] }}</td>
                                    <td>{{ $order['date'] }}</td>
                                    <td>Germany</td> <!-- Ganti dengan data sesuai yang Anda inginkan -->
                                </tr>
                            </table>
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{-- <div class="con-sec2-detail-customer">
                <p class="date-history-detail-customer">Desember, 2023</p>
                <div class="table-detail-customer">
                    <div class="head-table-con-sec2">
                        <p class="txt-kode-pemesanan">Kode Pesanan :PACKBUNDL0DL00Q</p>
                        <div class="txt-rejected">
                            <p class="txt-rejected">Rejected</p>
                        </div>
                    </div>
                    <table id="detail-customer">
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Alfreds Futterkiste</td>
                          <td>06/09/2023</td>
                          <td>Germany</td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                          <td>06/09/2023</td>
                          <td>Sweden</td>
                        </tr>
                      </table>
                </div>
                <div class="table-detail-customer">
                    <div class="head-table-con-sec2">
                        <p class="txt-kode-pemesanan">Kode Pesanan :PACKBUNDL0DL00Q</p>
                        <div class="txt-completed">
                            <p class="txt-completed">Completed</p>
                        </div>
                    </div>
                    <table id="detail-customer">
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Alfreds Futterkiste</td>
                          <td>06/09/2023</td>
                          <td>Germany</td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                          <td>06/09/2023</td>
                          <td>Sweden</td>
                        </tr>
                        <tr>
                            <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Alfreds Futterkiste</td>
                            <td>06/09/2023</td>
                            <td>Germany</td>
                          </tr>
                          <tr>
                            <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                            <td>06/09/2023</td>
                            <td>Sweden</td>
                          </tr>
                          <tr>
                            <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Alfreds Futterkiste</td>
                            <td>06/09/2023</td>
                            <td>Germany</td>
                          </tr>
                          <tr>
                            <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                            <td>06/09/2023</td>
                            <td>Sweden</td>
                          </tr>
                      </table>
                </div>
            </div> --}}
            {{-- <a class="show-more-detail-customer" href="">Show More ></a> --}}
        </div>
    </div>

    <div class="sec3-detail-customer">
        <p class="title-sec-profile">Alamat</p>
        <div class="container-sec3-detail-customer">
            @foreach ($addresses as $address)    
                <div class="con-alamat-detail-profile">
                    <div class="name-number-detail-profile">
                        <p>{{ $address->full_name }}</p>
                        <p>(+62) {{ $address->phone_address }}</p>
                    </div>
                    <p class="address-detail-profile">{{ $address->complete_address }}</p>
                    <a href="/ubah_alamat/{{ $address->id }}">Ubah</a>
                </div>
            @endforeach
            <a href="/alamat_saya">
                <button class="btn-dshb-db" id="modal-add-profiledata">
                    <iconify-icon icon="gala:add" width="18"></iconify-icon>
                    Tambah alamat
                </button>
            </a>
        </div>
    </div>
</div>

<script>
    // preview upload img
    const loadFile = event => {
        const output = document.getElementById('output_img_bahan');
        const defaultImg = document.getElementById('default_img_bahan');

        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.display = 'block';
        defaultImg.style.display = 'none';

        output.onload = () => {
            URL.revokeObjectURL(output.src) // free memory
        };
    };

    document.getElementById('clearBtn').onclick = () => {
        const inputImg = document.getElementById('input_img_bahan');
        const output = document.getElementById('output_img_bahan');
        const defaultImg = document.getElementById('default_img_bahan');

        inputImg.value = ""; // Mengosongkan input file
        output.src = defaultImg.src; // Mengatur ulang ke gambar default
        output.style.display = 'none'; // Menyembunyikan gambar pratinjau
        defaultImg.style.display = 'block';
    };
</script>
@endsection