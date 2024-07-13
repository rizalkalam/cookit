@extends('layouts.main')
@section('content')
<form action="/cart/create" method="POST">
    @csrf
    {{-- data-input-to-cart --}}
    <input type="hidden" name="id" value="{{ $menu->id }}">
    <input type="hidden" name="qty" value="1">
    <input type="hidden" name="total_price" value="{{ $menu->price }}">
    {{-- data-input-to-cart --}}
    <div class="container-product">
        {{-- section-1 --}}
        <div class="section-1">
            <p class="title-product">{{ $menu->name }}</p>
            {{-- <div class="publisher">
                <img src="/assets/gyj.jpeg">
                <p>by Go Yoon Jung</p>
            </div> --}}
            <iframe src="https://www.youtube.com/embed/{{ $youtube }}"></iframe>            
        </div>
        {{-- end-section-1 --}}

        {{-- section-2 --}}
        <div class="section-2">
            <p class="title-section">Yang kami kirim</p>
            <div class="contaniner-carousel-product">
                <div class="carousel-view-product">
                    <!-- Left Button -->
                    <button id="prev-btn-mtrl" class="prev-btn-mtrl"><img src="/assets/icn-arrow-left.svg" alt=""></button>
                      <!-- List Container -->
                      <div id="material-list" class="material-list">
                        <!-- Items -->
                        @foreach ($to_sents as $to_sent)    
                        <div class="material">
                            <div class="material-img">
                                <img id="material" src="/{{ $to_sent->material->material_img }}">
                            </div>
                            <p>{{ $to_sent->qty }} {{ $to_sent->unit->unit }} 
                                {{ $to_sent->material->material_name }}</p>
                        </div>
                        @endforeach
                      </div>
                    <!-- Right Button -->
                    <button id="next-btn-mtrl" class="next-btn-mtrl"><img src="/assets/icn-arrow-right.svg" alt=""></button>
                </div>
            </div>
        </div>
        {{-- end-section-2 --}}

        {{-- section-3 --}}
        <div class="section-3">
            <p class="title-section">Further Information</p>
            <div class="container-section-3">
                <div class="con-left-product">
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Alat yang dibutuhkan</p>
                        <p class="dsc-txt-sec3">{{ $further_information->tools  ?? '  ' }}</p>
                    </div>
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Tingkat Kesusahan</p>
                        <p class="dsc-txt-sec3">{{ $further_information->difficulty  ?? '  ' }}</p>
                    </div>
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Bahan yang dibutuhkan</p>
                        <p class="dsc-txt-sec3">{{ $further_information->material  ?? '  ' }}</p>
                    </div>
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Waktu Penyajian</p>
                        <p class="dsc-txt-sec3">{{ $further_information->serving_time  ?? '  ' }} {{ $further_information->time_format  ?? '  ' }}</p>
                    </div>
                </div>
                <div class="nutritions-facts">
                    <h3>Nutritions Facts!</h3>
                    @foreach ($nutritions as $nutrition)
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Karbohidrat</p>
                        <p class="dsc-txt-nutritions-facts">{{ $nutrition->karbohidrat }} {{ $nutrition->karbohidrat_unit->unit }}</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Lemak</p>
                        <p class="dsc-txt-nutritions-facts">{{ $nutrition->lemak }} {{ $nutrition->lemak_unit->unit }}</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Protein</p>
                        <p class="dsc-txt-nutritions-facts">{{ $nutrition->protein }} {{ $nutrition->protein_unit->unit }}</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Serat</p>
                        <p class="dsc-txt-nutritions-facts">{{ $nutrition->serat }} {{ $nutrition->serat_unit->unit }}</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Natrium</p>
                        <p class="dsc-txt-nutritions-facts">{{ $nutrition->natrium }} {{ $nutrition->natrium_unit->unit }}</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Kalori</p>
                        <p class="dsc-txt-nutritions-facts">{{ $nutrition->kalori }} {{ $nutrition->kalori_unit->unit }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            @auth
            <div class="btn-section-34">
                <button class="btn-order-now" type="submit">Pesan Sekarang</button>
            </div>
            @else
            <div class="btn-section-34">
                <button class="btn-bundle-guest btn-order-now" type="button">Pesan Sekarang</button>
            </div>
            @endauth
        </div>
        {{-- end-section-3 --}}

        {{-- section-4 --}}
        <div class="section-4">
            <p class="title-section">Langkah Penyajian</p>
            <div class="container-section-4">
                @foreach ($tutorials as $tutorial)    
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/{{ $tutorial->image }}">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">{{ $tutorial->step_number }}. {{ $tutorial->title_instruction }}</p>
                        <p class="list-dsc-sec4">{{ $tutorial->instruction }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @auth    
            <div class="btn-section-34">
                    <button class="btn-order-now" type="submit">Pesan Sekarang</button>
            </div>
            @else
            <div class="btn-section-34">
                <button class="btn-bundle-guest btn-order-now" type="button">Pesan Sekarang</button>
            </div>
            @endauth
        </div>
        {{-- end-section-4 --}}
    </div>
</form>

{{-- modal-popup-guest --}}
<div id="guestModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-modal-guest"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Silahkan login terlebih dahulu</p>
    </div>
</div>
{{-- modal-popup-guest --}}

{{-- modal-popup-cart --}}
<div id="successModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-delete-tutorial"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Menu berhasil ditambahkan ke keranjang</p>
        <a href="/keranjang">
            <button class="btn-delete">Lihat keranjang</button>
        </a>
    </div>
</div>
{{-- modal-popup-cart --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function() {
            // Menampilkan modal ketika tombol diklik
            $('.btn-bundle-guest').on('click', function() {
                $('#guestModal').show();
            });

            // Menutup modal ketika tombol close diklik
            $('#close-modal-guest').on('click', function() {
                $('#guestModal').hide();
            });
        });
    $(document).ready(function() {
        @if(session('show_modal'))
            $('#successModal').show();
        @endif

        $('#close-delete-tutorial').on('click', function() {
            $('#successModal').hide();
        });
    });
</script>
@endsection