@extends('layouts.main')
@section('content')
    <div class="section-rincian-pesanan">
        <p class="title-keranjang">Rincian Pesanan</p>
        <div class="sec1-rincian-pesanan">
            <iconify-icon icon="zondicons:location" width="35"></iconify-icon>
            <p class="contact-rincian-pesanan">NALA FADILLAH (+62) 85159064429</p>
            <p class="addres-rincian-pesanan">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
            <a href="">Ubah</a>
        </div>

        <div class="kode-pesanan">
            <p class="txt-kode-pesanan">Kode Pesanan :PACKBUNDL0DL00Q</p>
            <div class="status-pesanan">
                <p>Completed</p>
            </div>
        </div>

        <div class="sec2-rincian-pesanan">
            <div class="head-sec2-rincian-pesanan">
                <p>Produk Dipesan</p>
                <div class="head-sec2-rincian-pesanan-con">
                    <p>Harga Satuan</p>
                    <p>Jumlah</p>
                    <p>Subtotal Produk</p>
                </div>
            </div>
            <div class="list-rincian-pesanan">
                <div class="item-rincian-pesanan">
                    <div class="left-list-bskt">
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">Tower Pancake</p>
                            <div class="bundling-badge">
                                <p>Bundling</p>
                            </div>
                            <p class="dsc-menu-bskt">Pair up with a friend and enjoy the 
                                hot and crispy pizza pops. Try it 
                                with the best deals.</p>
                        </div>
                    </div>
                    <div class="right-list-rincian-pesanan">
                        <div class="price-rincian-pesanan">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                        <p class="count-rincian-pesanan">1</p>
                        <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                    </div>
                </div>
                <div class="item-rincian-pesanan">
                    <div class="left-list-bskt">
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">Tower Pancake</p>
                            <div class="bundling-badge">
                                <p>Bundling</p>
                            </div>
                            <p class="dsc-menu-bskt">Pair up with a friend and enjoy the 
                                hot and crispy pizza pops. Try it 
                                with the best deals.</p>
                        </div>
                    </div>
                    <div class="right-list-rincian-pesanan">
                        <div class="price-rincian-pesanan">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                        <p class="count-rincian-pesanan">1</p>
                        <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                    </div>
                </div>
            </div>
            <div class="line-gap-rincian-pesanan"></div>
            <div class="con-total-rincian-pesanan">
                <p>Total Pesanan (5 Produk)</p>
                <p>Rp74.000</p>
            </div>
            <div class="line-gap-rincian-pesanan"></div>
            <div class="con-voucher-rincian-pesanan">
                <div class="voucher-rincian-pesanan">
                    <iconify-icon icon="mdi:voucher-outline" width="40"></iconify-icon>
                    <a href="">Masukkan Voucher</a>
                </div>
                <a class="del-voucher" href="">Delete</a>
            </div>
        </div>

        <div class="sec3-rincian-pesanan">
            <p class="title-sec3-rincian-pesanan">Ringkasan Pembayaran</p>
            <div class="line-gap-rincian-pesanan"></div>
            <div class="content-sec3-rincian-pesanan">
                <div class="con-sec3-rincian-pesanan">
                    <p>Subtotal untuk Produk</p>
                    <p>Rp52.000</p>
                </div>
                <div class="con-sec3-rincian-pesanan">
                    <p>Total ongkos kirim</p>
                    <p>Rp52.000</p>
                </div>
                <div class="con-sec3-rincian-pesanan">
                    <p>Diskon Voucher</p>
                    <p>Rp52.000</p>
                </div>
                <div class="con-sec3-rincian-pesanan">
                    <p>Total Pembayaran</p>
                    <p>Rp52.000</p>
                </div>
                <a href="/detail/product">
                    <button class="btn-add-db">Add</button>
                </a>
            </div>
        </div>
    </div>
@endsection