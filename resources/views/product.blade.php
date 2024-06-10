@extends('layouts.main')
@section('content')
    <div class="container-product">
        {{-- section-1 --}}
        <div class="section-1">
            <p class="title-product">{{ $menu->menu_name }}</p>
            <div class="publisher">
                <img src="/assets/gyj.jpeg">
                <p>by Go Yoon Jung</p>
            </div>
            <iframe src="https://www.youtube.com/embed/tSDtNCp51s4?si=U-Bq6VHbuzJhOeGL"></iframe>            
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
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card1-sec2.png"/>
                            <p>250 g
                                Tepung Terigu Protein Sedang</p>
                        </div>
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card2-sec2.png"/>
                            <p>1 sdt
                                Ragi Instan</p>
                        </div>
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card3-sec2.png"/>
                            <p>Tes 12345</p>
                        </div>
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card4-sec2.png"/>
                            <p>Tes 12345</p>
                        </div>
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card5-sec2.png"/>
                            <p>Tes 12345</p>
                        </div>
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card2-sec2.png"/>
                            <p>Tes 12345</p>
                        </div>
                        <div class="material">
                            <img id="material" class="material-img" src="/assets/card4-sec2.png"/>
                            <p>Tes 12345</p>
                        </div>
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
                        <p class="dsc-txt-sec3">Tusukan kayu/sate Lap bersih Blender Chopper</p>
                    </div>
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Tingkat Kesusahan</p>
                        <p class="dsc-txt-sec3">Sedang</p>
                    </div>
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Bahan yang dibutuhkan</p>
                        <p class="dsc-txt-sec3">200 mL Air Tepung terigu Es batu</p>
                    </div>
                    <div class="txt-sec3">
                        <p class="title-txt-sec3">Waktu Penyajian</p>
                        <p class="dsc-txt-sec3">30 menit</p>
                    </div>
                </div>
                <div class="nutritions-facts">
                    <h3>Nutritions Facts!</h3>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Karbohidrat</p>
                        <p class="dsc-txt-nutritions-facts">tes 1231abc</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Lemak</p>
                        <p class="dsc-txt-nutritions-facts">tes 23u2u83iu234</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Protein</p>
                        <p class="dsc-txt-nutritions-facts">tes 1231abc</p>
                    </div>
                    <div class="txt-nutritions-facts">
                        <p class="title-txt-nutritions-facts">Serat</p>
                        <p class="dsc-txt-nutritions-facts">tes 1231abc</p>
                    </div>
                </div>
            </div>
            <div class="btn-section-34">
                <a href="">
                    <button class="btn-order-now">Pesan Sekarang</button>
                </a>
            </div>
        </div>
        {{-- end-section-3 --}}

        {{-- section-4 --}}
        <div class="section-4">
            <p class="title-section">Langkah Penyajian</p>
            <div class="container-section-4">
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/assets/3.jpg">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">1. Persiapan adonan</p>
                        <p class="list-dsc-sec4">Campurkan air hangat dan gula, aduk hingga tercampur rata. Tuangkan ragi, aduk hingga tercampur rata. Masukkan tepung terigu dan garam. Aduk hingga adonan menyatu dan kalis. Tutup dan biarkan adonan mengembang hingga 2 kali lipat (sekitar 1-2 jam).</p>
                    </div>
                </div>
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/assets/5.jpg">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">2. Persiapan sosis dan keju</p>
                        <p class="list-dsc-sec4">Potong sosis menjadi 2 dan 4 bagian. Tusuk sosis dan keju mozzarella di tusukan kayu.  Lap sosis dan keju agar adonan menempal dengan baik.</p>
                    </div>
                </div>
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/assets/7.jpg">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">3. Persiapan kentang</p>
                        <p class="list-dsc-sec4">Potong kentang berbentuk dadu. Rebus kentang selama 2 menit. Tiris dan bilas dengan air. Keringkan dengan tisu dapur. Lapisi dengan tepung terigu.</p>
                    </div>
                </div>
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/assets/8.jpg">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">4. Pencampuran bahan</p>
                        <p class="list-dsc-sec4">Lapisi tusukan sosis dengan adonan yang telah mengembang. Putar-putar tusukan sehingga semua tertutupi dengan adonan, lalu lapisi dengan potongan kentang. Lapisi kembali corndog dengan tepung roti. Ulangi sampai sosis terbalur dengan adonan.</p>
                    </div>
                </div>
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/assets/10.jpg">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">5. Penggorengan</p>
                        <p class="list-dsc-sec4">Panaskan minyak dengan api sedang. Goreng corndog dengan api sedang sampai warna cokelat keemasan.</p>
                    </div>
                </div>
                <div class="list-sec4">
                    <div class="list-img-sec4">
                        <img src="/assets/2.jpg">
                    </div>
                    <div class="list-content-sec4">
                        <p class="chapter">6. Penyajian</p>
                        <p class="list-dsc-sec4">Lapisi corndog dengan gula pasir. Beri saus tomat dan saus mustard diatas corndog.</p>
                    </div>
                </div>
            </div>
            <div class="btn-section-34">
                <a href="/pay/{{ $menu->menu_name }}">
                    <button class="btn-order-now">Pesan Sekarang</button>
                </a>
            </div>
        </div>
        {{-- end-section-4 --}}
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
@endsection