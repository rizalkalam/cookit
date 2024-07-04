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
                <iconify-icon  icon="fluent:box-multiple-checkmark-24-regular" width="20"></iconify-icon>
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
            <div id="mark" class="active"></div>
            <a class="active" href="#about">
                <iconify-icon class="active" icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="iconoir:database" width="20"></iconify-icon>
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
    <p class="title-dashboard">Detail Customer</p>
    <div class="sec1-detail-customer">
        <div class="con-img-detail-customer">
            <img src="/assets/gyj2.png" alt="" srcset="">
        </div>
        <div class="detail-customer-dsc-sec1">
            <div>
                <p class="detail-customer-name">Go YoonJung</p>
                <p class="detail-customer-dsc">@goyounjung</p>
            </div>
            <div>
                <p class="detail-customer-dsc">+62 81234222324</p>
                <p class="detail-customer-dsc">yoonjung12@gmail.com</p>
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