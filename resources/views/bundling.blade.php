@extends('layouts.main')
@section('content')
    <div class="section-1">
        <p class="title-product">{{ $title }}</p>
    </div>
    <div class="section-content-bundling">
        <div class="con-list-bundling">
            <div class="container-bundling">
                @foreach ($bundlings as $item)    
                <div class="card-bundling">
                    <div class="img-bundling">
                        <img src="/{{ $item->menu->img_menu }}" alt="">
                    </div>
                    <div class="dsc-bundling">
                        <div class="dsc-bundling-top">
                            <p class="title-dsc-bundling">{{ $item->menu->name }}</p>
                            <p>x {{ $item->qty }}</p>
                        </div>
                        <P class="txt-dsc-bundling">{{ $item->menu->flavor->flavor }}</P>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="sec-button-bundling">
                <form action="/cart/bundling_create" method="POST">
                    @csrf
                    <input type="hidden" name="bundling_id" value="{{ $input_data->id }}">
                    <input type="hidden" name="bundling_qty" value="{{ $input_data->qty }}">
                    <input type="hidden" name="bundling_price" value="{{ $input_data->price }}">
                    <button type="submit" class="btn-order-bundling">Order Now Only Rp30.000</button>
                </form>
            </div>
        </div>
    </div>

    {{-- modal-popup-cart --}}
    <div id="successModalBundling" style="display: none;">
        <div id="editTosentModal" class="reveal-modal-tutorial">
            <span class="btn-close-modal" id="close-modal-carthome"><img src="/assets/close-modal.svg" alt="Close"></span>
            <p>Menu berhasil ditambahkan ke keranjang</p>
            <a href="/keranjang">
                <button class="btn-delete">Lihat keranjang</button>
            </a>
        </div>
    </div>
    {{-- modal-popup-cart --}}

    <script>
       $(document).ready(function() {
            @if(session('show_modal'))
                $('#successModalBundling').show();
            @endif

            $('#close-modal-carthome').on('click', function() {
                $('#successModalBundling').hide();
            });
        });
    </script>
@endsection