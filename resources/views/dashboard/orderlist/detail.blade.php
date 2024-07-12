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
    <div class="section-rincian-pesanan">
        <p class="title-keranjang">Rincian Pesanan</p>
        <div class="sec1-rincian-pesanan">
            <iconify-icon icon="zondicons:location" width="35"></iconify-icon>
            <p class="contact-check-out">{{ $addres->full_name }} (+62) {{ $addres->phone_address }}</p>
            <p class="addres-check-out">{{ $addres->complete_address }}</p>
        </div>

        <div class="kode-pesanan">
            <p class="txt-kode-pesanan">Kode Pesanan :{{ strtoupper($order_id) }}</p>
        </div>

        <div class="con-select-status">
            <p>Aktivitas Pesanan</p>
            <form id="orderStatusForm" action="/order_list/{{ $order_id }}" method="POST">
                @csrf
                <input type="hidden" id="input-status-order" name="status" value="">
                <div class="wrap-select-status">
                    @if ($order_status === 'on_processed')
                    <div class="btn-status-orderlist checked" data-status="1">
                        <p>Sedang diproses</p>
                    </div>
                    <div class="btn-status-orderlist" data-status="2">
                        <p>Sedang dikirim</p>
                    </div>
                    <div class="btn-status-orderlist" data-status="4">
                        <p>Pesanan selesai</p>
                    </div>
                    @elseif($order_status === 'in_delivery')
                    <div class="btn-status-orderlist checked" data-status="1">
                        <p>Sedang diproses</p>
                    </div>
                    <div class="btn-status-orderlist checked" data-status="2">
                        <p>Sedang dikirim</p>
                    </div>
                    <div class="btn-status-orderlist" data-status="4">
                        <p>Pesanan selesai</p>
                    </div>
                    @elseif($order_status === 'completed' || $order_status === 'received' || $order_status === 'rejected')
                    <div class="btn-status-orderlist checked" data-status="1">
                        <p>Sedang diproses</p>
                    </div>
                    <div class="btn-status-orderlist checked" data-status="2">
                        <p>Sedang dikirim</p>
                    </div>
                    <div class="btn-status-orderlist checked" data-status="4">
                        <p>Pesanan selesai</p>
                    </div>
                    @endif
                </div>
            </form>
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
                @foreach ($orders as $order)
                @if ($order->menu_type === 'Bundling')
                <div class="item-rincian-pesanan">
                    <div class="left-list-bskt">
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">{{ $order->menu_name }}</p>
                            <div class="bundling-badge">
                                <p>Bundling</p>
                            </div>
                            <p class="dsc-menu-bskt">{{ $order->menu_dsc }}</p>
                        </div>
                    </div>
                    <div class="right-list-rincian-pesanan">
                        <div class="price-rincian-pesanan">Rp.<span class="price-bskt" data-unit-price="13000">{{ number_format($order->total_price / $order->qty, 0, ',', '.') }}</span></div>
                        <p class="count-rincian-pesanan">{{ $order->qty }}</p>
                        <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="13000">{{ $order->total_price }}</span></div>
                    </div>
                </div>
                @else
                <div class="item-rincian-pesanan">
                    <div class="left-list-bskt">
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">{{ $order->menu_name }}</p>
                            {{-- <div class="bundling-badge">
                                <p>Bundling</p>
                            </div> --}}
                            <p class="dsc-menu-bskt">{{ $order->menu_dsc }}</p>
                        </div>
                    </div>
                    <div class="right-list-rincian-pesanan">
                        <div class="price-rincian-pesanan">Rp.<span class="price-bskt" data-unit-price="13000">{{ number_format($order->total_price / $order->qty, 0, ',', '.') }}</span></div>
                        <p class="count-rincian-pesanan">{{ $order->qty }}</p>
                        <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="13000">{{ $order->total_price }}</span></div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="line-gap-rincian-pesanan"></div>
            <div class="con-total-rincian-pesanan">
                <p>Total Pesanan ({{ $orders->sum('qty') }} Produk)</p>
                <p>Rp.<span class="total-price">{{ $orders->sum('total_price') }}</span></p>
            </div>
            <div class="line-gap-rincian-pesanan"></div>
            <div class="con-voucher-rincian-pesanan">
                {{-- <div class="voucher-rincian-pesanan">
                    <iconify-icon icon="mdi:voucher-outline" width="40"></iconify-icon>
                    <a href="">Masukkan Voucher</a>
                </div> --}}
                {{-- <a class="del-voucher" href="">Delete</a> --}}
            </div>
        </div>

        <div class="sec3-rincian-pesanan">
            <p class="title-sec3-rincian-pesanan">Ringkasan Pembayaran</p>
            <div class="line-gap-rincian-pesanan"></div>
            <div class="content-sec3-rincian-pesanan">
                <div class="con-sec3-rincian-pesanan">
                    <p>Subtotal untuk Produk</p>
                    <p>Rp.<span class="total-price">{{ $subtotal = $orders->sum('total_price') }}</span></p>
                </div>
                <div class="con-sec3-rincian-pesanan">
                    <p>Total ongkos kirim</p>
                    <p>Rp.<span>{{ $shippingCost = $user->addres->district->shipping_cost }}</p>
                </div>
                {{-- <div class="con-sec3-rincian-pesanan">
                    <p>Diskon Voucher</p>
                    <p>Rp52.000</p>
                </div> --}}
                <div class="con-sec3-rincian-pesanan">
                    <p>Total Pembayaran</p>
                    <p>Rp.<span>{{ $subtotal + $shippingCost }}</span></p>
                </div>
                <button id="pay-button" class="btn-order">Hubungi Pembeli</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('orderStatusForm');
            const hiddenInput = document.getElementById('input-status-order');
            const statusButtons = document.querySelectorAll('.btn-status-orderlist');

            statusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const status = this.getAttribute('data-status');
                    hiddenInput.value = status;
                    console.log('Status changed to:', status);
                    form.submit();
                });
            });
        });


    </script>
@endsection