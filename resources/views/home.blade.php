@extends('layouts.main')
@section('content')
    <div class="container-home">
        <p class="title-home">[tawaran paket 
            yang lagi live]</p>
        <p class="dsc-home">CookIt For Good Eat!</p>
        <a href="">
            <button class="btn-mulai-sekarang">CookIt for Rp.20k</button>
        </a>
    </div>

    {{-- content-section-1 --}}
    <div class="content-section-1">
        <div class="title-section-1">
            <p>How Does It Work</p>
        </div>
        <div class="con-section-1">
            <div class="card-section-1">
                <div class="img-content-section-1">
                    <img src="/assets/icn-order.svg" alt="">
                </div>
                <div class="txt-content-sec1">
                    <p class="title-card-section-1">Choose order</p>
                    <p class="desc-card-section-1">Check over hundreds of menus to pick your favorite food</p>
                </div>
            </div>
            <div class="card-section-1">
                <div class="img-content-section-1">
                    <img src="/assets/icn-pay.svg" alt="">
                </div>
                <div class="txt-content-sec1">
                    <p class="title-card-section-1">Pay advanced</p>
                    <p class="desc-card-section-1">It's quick, safe, and simple. Select several methods of payment</p>
                </div>
            </div>
            <div class="card-section-1">
                <div class="img-content-section-1">
                    <img src="/assets/map-marker.svg" alt="">
                </div>
                <div class="txt-content-sec1">
                    <p class="title-card-section-1">Select location</p>
                    <p class="desc-card-section-1">Choose the location where your food will be delivered.</p>
                </div>
            </div>
            <div class="card-section-1">
                <div class="img-content-section-1">
                    <img src="/assets/icn-cookenjy.svg" alt="">
                </div>
                <div class="txt-content-sec1">
                    <p class="title-card-section-1">Enjoy cook</p>
                    <p class="desc-card-section-1">Food preparations are delivered directly to your home.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- end-content-section-1 --}}

    {{-- content-section-2 --}}
    <div class="content-section-2">
        <div class="title-section-2">
            <p>Redy to Order</p>
        </div>
        <div class="container-carousel">
            <div class="carousel-view">
                <!-- Left Button -->
                <button id="prev-btn" class="prev-btn"><img src="/assets/icn-arrow-left.svg" alt=""></button>
                  <!-- List Container -->
                  <div id="item-list" class="item-list">
                    <!-- Items -->
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card1-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Cheese Burger</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Burger Arena</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card2-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Toffe’s Cake</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Top Sticks</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card3-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Dancake</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Cake World</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card4-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Crispy Sandwitch</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Fastfood Dine</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card5-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Thai  Soup</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Foody man</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card2-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Toffe’s Cake</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Top Sticks</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item-img" src="/assets/card4-sec2.png"/>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">Crispy Sandwitch</p>
                            <div class="location-section-2">
                                <img src="/assets/map-marker.svg">
                                <p class="txt-map-sec2">Fastfood Dine</p>
                            </div>
                            <p class="price-sec2">$4.00</p>
                            <a href="">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                  </div>
                <!-- Right Button -->
                <button id="next-btn" class="next-btn"><img src="/assets/icn-arrow-right.svg" alt=""></button>
            </div>
        </div>
    </div>
    {{-- end-content-section-2 --}}

    {{-- content-section-3 --}}
    <div class="content-section-3">
        <div class="txt1-section-3">
            <p>TESTIMONIALS</p>
        </div>
        <div class="txt2-section-3">
            <p>What our cookers say about us.</p>
        </div>
        <div class="con-section-3">
            <div id="item-list" class="card-list-sec3">
                <div class="card-section-3">
                    <div class="img-testi-sec3">
                        <img src="/assets/1.jpg" alt="">
                    </div>
                    <p class="name-testi-sec3">Skuukzky</p>
                    <div class="star-sec3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="coment-testi-sec3">“Vestibulum, cum nam non amet consectetur morbi aenean condimentum eget. Ultricies integer nunc neque accumsan laoreet. Viverra nibh ultrices.”</p>
                </div>
                <div class="card-section-3">
                    <div class="img-testi-sec3">
                        <img src="/assets/gyj.jpeg" alt="">
                    </div>
                    <p class="name-testi-sec3">YoonJung</p>
                    <div class="star-sec3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="coment-testi-sec3">“Lobortis leo pretium facilisis amet nisl at nec. Scelerisque risus tortor donec ipsum consequat semper consequat adipiscing ultrices.”</p>
                </div>
                <div class="card-section-3">
                    <div class="img-testi-sec3">
                        <img src="/assets/2.jpg" alt="">
                    </div>
                    <p class="name-testi-sec3">Sarah</p>
                    <div class="star-sec3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <p class="coment-testi-sec3">“Lobortis leo pretium facilisis amet nisl at nec. Scelerisque risus tortor donec ipsum consequat semper consequat adipiscing ultrices.”</p>
                </div>
            </div>
            
            
            
        </div>
        <a href="">
            <button class="btn-testi-sec3">SENT A QUOTE</button>
        </a>
    </div>
    {{-- end-content-section-3 --}}

    {{-- content-section-4 --}}
    <div class="content-section-4">
        <img class="img-background-sec4" src="/assets/img-sec4-res.png" alt="">
        <div class="con-section-4">
            <p class="txt-sec4">Are you ready to order with the best deals?</p>
            <a href="">
                <button class="btn-check-menu">CHECK OUR MENU<img src="/assets/icn-next.svg"></button>
            </a>
        </div>
    </div>
    {{-- end-content-section-4 --}}
@endsection