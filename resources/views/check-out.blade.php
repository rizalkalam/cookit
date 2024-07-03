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

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-server-qcwSPi9JWa2q1rbWKW_cu_m4"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

    <div class="section-keranjang">
        <p class="title-keranjang">Check Out</p>
        <div class="sec1-check-out">    
            <iconify-icon icon="zondicons:location" width="35"></iconify-icon>
            <p class="contact-check-out">{{ $addres->full_name }} (+62) {{ $addres->phone_address }}</p>
            <p class="addres-check-out">{{ $addres->complete_address }}</p>
            <a href="/alamat_saya">Ubah</a>
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
                @if (!empty($cart_products) && $cart_products->isNotEmpty())
                    <div class="list-checkout">
                        @foreach ($cart_products as $cart)
                            <div class="item-checkout">
                                <div class="left-list-bskt">
                                    <div class="image">
                                        <img src="/assets/1.jpg" alt="" />
                                    </div>
                                    <div class="description">
                                        <p class="title-menu-bskt">{{ $cart->menu->name }}</p>
                                        <p class="dsc-menu-bskt">{{ $cart->menu->description }}</p>
                                    </div>
                                </div>
                                <div class="right-list-checkout">
                                    <div class="price-check-out">Rp.<span class="price-bskt" data-unit-price="{{ $cart->menu->price }}">{{ $cart->menu->price }}</span></div>
                                    <p class="count-check-out">{{ $cart->qty }}</p>
                                    <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="{{ $cart->total_price }}">{{ $cart->total_price }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if (!empty($cart_bundlings) && $cart_bundlings->isNotEmpty())
                    <div class="list-checkout">
                        @foreach ($cart_bundlings as $cart)
                            <div class="item-checkout">
                                <div class="left-list-bskt">
                                    <div class="image">
                                        <img src="/assets/1.jpg" alt="" />
                                    </div>
                                    <div class="description">
                                        <p class="title-menu-bskt">{{ $cart->bundling->bundling_name }}</p>
                                        <div class="bundling-badge">
                                            <p>Bundling</p>
                                        </div>
                                        <p class="dsc-menu-bskt">Paket Bundling</p> <!-- Ganti dengan deskripsi bundling jika ada -->
                                    </div>
                                </div>
                                <div class="right-list-checkout">
                                    <div class="price-check-out">Rp.<span class="price-bskt" data-unit-price="{{ $cart->total_price }}">{{ $cart->total_price }}</span></div>
                                    <p class="count-check-out">{{ $cart->qty }}</p>
                                    <div class="sub-price-chek-out">Rp.<span class="price-bskt" data-unit-price="{{ $cart->total_price }}">{{ $cart->total_price }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="line-gap-checkout"></div>
                <div class="con-total-checkout">
                    <p>Total Pesanan (<span class="total-items">{{ $cart_products->sum('qty') + $cart_bundlings->sum('qty') }}</span> Produk)</p>
                    <p>Rp.<span class="total-price">
                        {{ number_format(
                            $cart_products->sum(function($item) { return $item->menu->price * $item->qty; }) +
                            $cart_bundlings->sum('total_price'), 0, ',', '.') }}
                    </span></p>
                </div>
            </div>
            <div class="line-gap-checkout"></div>
        </div>
        <div class="sec3-check-out">
            <p class="title-sec3-checkout">Ringkasan Pembayaran</p>
            <div class="line-gap-checkout"></div>
            <div class="content-sec3-checkout">
                <div class="con-sec3-checkout">
                    <p>Subtotal untuk Produk</p>
                    <p>Rp.<span class="total-price">
                        {{ number_format(
                            $subtotal = $cart_products->sum(function($item) { return $item->menu->price * $item->qty; }) +
                        $cart_bundlings->sum('total_price'), 0, ',', '.')  }}
                    </span></p>
                </div>
                <div class="con-sec3-checkout">
                    <p>Total ongkos kirim</p>
                    <p>Rp.<span>{{ $shippingCost = auth()->user()->addres->district->shipping_cost }}</span></p>
                </div>
                <div class="con-sec3-checkout">
                    <p>Total Pembayaran</p>
                    <p>Rp.<span>{{ $subtotal + $shippingCost }}</span></p>
                </div>
                <button id="pay-button" class="btn-order">Buat Pesanan</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              window.location.href = '/rincian_pesanan/{{ $order_id }}'
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
@endsection

{{-- <div class="item-checkout">
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
</div> --}}

{{-- <div class="con-voucher-checkout">
                <div class="voucher-checkout">
                    <iconify-icon icon="mdi:voucher-outline" width="40"></iconify-icon>
                    <a class="del-voucher" href="">Masukkan Voucher</a>
                </div>
                <a href="">Delete</a>
            </div> --}}