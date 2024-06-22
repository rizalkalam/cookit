@extends('layouts.main')
@section('content')
<div class="profile-content">
    <p class="title-dashboard">Detail Customer</p>
    <div class="sec-content-db-form">
        <div class="left-db-form">
            <div class="img-db-form">
                <img src="/assets/img-default.png" alt="">
            </div>
        </div>
        <div class="right-db-form">
            <div class="input-form-edit-menu">
                <p>Nama Bahan: </p>
                <input type="name" name="name" id="name" required />
            </div>
        </div>
    </div>

    <div class="sec2-detail-customer">
        <p class="title-sec-detail-customer">Riwayat Pesanan</p>
        <div class="container-sec2-detail-customer">
            <div class="con-sec2-detail-customer">
                <p class="date-history-detail-customer">Januari, 2024</p>
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
                      </table>
                </div>
            </div>
            <div class="con-sec2-detail-customer">
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
            </div>
            <a class="show-more-detail-customer" href="">Show More ></a>
        </div>
    </div>

    <div class="sec3-detail-customer">
        <p class="title-sec-detail-customer">Alamat</p>
        <div class="container-sec3-detail-customer">
            <div class="con-alamat-detail-customer">
                <div class="name-number-detail-customer">
                    <p>Go YoonJung</p>
                    <p>(+62) 85159064429</p>
                </div>
                <p class="address-detail-customer">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
                <a href="">Ubah</a>
            </div>
            <div class="con-alamat-detail-customer">
                <div class="name-number-detail-customer">
                    <p>Go YoonJung</p>
                    <p>(+62) 85159064429</p>
                </div>
                <p class="address-detail-customer">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
                <a href="">Ubah</a>
            </div>
            <div class="con-alamat-detail-customer">
                <div class="name-number-detail-customer">
                    <p>Go YoonJung</p>
                    <p>(+62) 85159064429</p>
                </div>
                <p class="address-detail-customer">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
                <a href="">Ubah</a>
            </div>
        </div>
    </div>
</div>
@endsection