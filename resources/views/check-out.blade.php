@extends('layouts.main')
@section('content')
    <div class="section-keranjang">
        <p class="title-keranjang">Check Out</p>
        <div class="sec1-check-out">
            <iconify-icon icon="zondicons:location" width="35"></iconify-icon>
            <p class="contact-check-out">NALA FADILLAH (+62) 85159064429</p>
            <p class="addres-check-out">Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112</p>
            <a href="">Ubah</a>
        </div>

        <div class="sec2-check-out">
            <div class="head-sec2-check-out">
                <p>Produk Dipesan</p>
                <div class="head-sec2-check-out-con">
                    <p>Harga Satuan</p>
                    <p>Jumlah</p>
                    <p>Subtotal Produk</p>
                </div>
            </div>
            <div class="list-checkout">
                <div class="item-checkout">
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
                    <div class="right-list-checkout">
                        <div class="price-check-out">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                        <p class="count-check-out">1</p>
                        <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                    </div>
                </div>
                <div class="item-checkout">
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
                    <div class="right-list-checkout">
                        <div class="price-check-out">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                        <p class="count-check-out">1</p>
                        <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                    </div>
                </div>
            </div>
            <div class="line-gap-checkout"></div>
            <div class="con-total-checkout">
                <p>Total Pesanan (5 Produk)</p>
                <p>Rp74.000</p>
            </div>
            <div class="line-gap-checkout"></div>
            <div class="con-voucher-checkout">
                <div class="voucher-checkout">
                    <iconify-icon icon="mdi:voucher-outline" width="40"></iconify-icon>
                    <a class="del-voucher" href="">Masukkan Voucher</a>
                </div>
                <a href="">Delete</a>
            </div>
        </div>

        <div class="sec3-check-out">
            <p class="title-sec3-checkout">Ringkasan Pembayaran</p>
            <div class="line-gap-checkout"></div>
            <div class="content-sec3-checkout">
                <div class="con-sec3-checkout">
                    <p>Subtotal untuk Produk</p>
                    <p>Rp52.000</p>
                </div>
                <div class="con-sec3-checkout">
                    <p>Total ongkos kirim</p>
                    <p>Rp52.000</p>
                </div>
                <div class="con-sec3-checkout">
                    <p>Diskon Voucher</p>
                    <p>Rp52.000</p>
                </div>
                <div class="con-sec3-checkout">
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