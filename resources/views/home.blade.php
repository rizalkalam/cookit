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
    <div class="content-home-section-2">
        <div class="title-section-2">
            <p>Redy to Order</p>
        </div>
        <div class="link-weeklymenu">
            <a href="/weekly-menu">See Our Weekly Menu ></a>
        </div>
        <div class="container-carousel-home">
        <div class="carousel-view-home">
                <!-- Left Button -->
                <button id="prev-btn" class="prev-btn"><img src="/assets/icn-arrow-left.svg" alt=""></button>
                  <!-- List Container -->
                  <div id="item-list-home" class="item-list-home">
                    <!-- Items -->
                    @foreach ($menus as $menu)    
                    <div class="item-weekly-home">
                        <div class="item-img">
                            <img id="item" src="{{ $menu->img_menu }}"/>
                        </div>
                        <div class="dsc-card-section-2">
                            <p class="title-dsc-card-sec2">{{ $menu->menu_name }}</p>
                            <p class="txt-flavor-sec2">Manis</p>
                            <p class="price-sec2">${{ $menu->price }}</p>
                            <a href="/detail/{{ $menu->menu_name }}">
                                <button class="btn-ordernow-sec2">Order Now</button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                  </div>
                <!-- Right Button -->
                <button id="next-btn" class="next-btn"><img src="/assets/icn-arrow-right.svg" alt=""></button>
            </div>
        </div>
    </div>
    {{-- end-content-section-2 --}}

    {{-- additional-section --}}
    {{-- <div class="content-additional-section">
        <div class="title-section-2">
            <p>Go Saver With Bundle</p>
        </div>
        <div class="wrap-con-additional-section">
            <div class="con-left-additional-section">
                <div class="left-additional-section">
                    <div class="left-dsc-additional-section">
                        <a href="" class="title-bundle">Snack Attack</a>
                        <p class="left-dsc-bundle">4 Appetizer + 4 Dessert</p>
                        <div class="btn-additional-section">
                            <p class="left-dsc-bundle">only</p>
                            <a href="/detail/product">
                                <button class="btn-price-additional-section">Rp30.000</button>
                            </a>
                        </div>
                    </div>
                    <div class="line-gap-additional-section"></div>
                    <div class="left-total-menu-additional-section">
                        <p class="number-bundle">8</p>
                        <p class="txt-menu-bundle">Menu</p>
                    </div>
                </div>
                <div class="none-additional-section">
    
                </div>
            </div>
            <div class="con-right-additional-section">
                <div class="right-additional-section">
                    <div class="right-dsc-additional-section">
                        <a href="" class="title-bundle">Snack Attack</a>
                        <p class="right-dsc-bundle">4 Appetizer + 4 Dessert</p>
                        <div class="btn-additional-section">
                            <p class="right-dsc-bundle">only</p>
                            <a href="/detail/product">
                                <button class="btn-price-additional-section">Rp30.000</button>
                            </a>
                        </div>
                    </div>
                    <div class="line-gap-additional-section"></div>
                    <div class="right-total-menu-additional-section">
                        <p class="number-bundle">8</p>
                        <p class="txt-menu-bundle">Menu</p>
                    </div>
                </div>
                <div class="none-additional-section">
    
                </div>
            </div>
            <div class="con-left-additional-section">
                <div class="left-additional-section">
                    <div class="left-dsc-additional-section">
                        <a href="" class="title-bundle">Snack Attack</a>
                        <p class="left-dsc-bundle">4 Appetizer + 4 Dessert</p>
                        <div class="btn-additional-section">
                            <p class="left-dsc-bundle">only</p>
                            <a href="/detail/product">
                                <button class="btn-price-additional-section">Rp30.000</button>
                            </a>
                        </div>
                    </div>
                    <div class="line-gap-additional-section"></div>
                    <div class="left-total-menu-additional-section">
                        <p class="number-bundle">8</p>
                        <p class="txt-menu-bundle">Menu</p>
                    </div>
                </div>
                <div class="none-additional-section">
    
                </div>
            </div>
            <div class="con-right-additional-section">
                <div class="right-additional-section">
                    <div class="right-dsc-additional-section">
                        <a href="" class="title-bundle">Snack Attack</a>
                        <p class="right-dsc-bundle">4 Appetizer + 4 Dessert</p>
                        <div class="btn-additional-section">
                            <p class="right-dsc-bundle">only</p>
                            <a href="/detail/product">
                                <button class="btn-price-additional-section">Rp30.000</button>
                            </a>
                        </div>
                    </div>
                    <div class="line-gap-additional-section"></div>
                    <div class="right-total-menu-additional-section">
                        <p class="number-bundle">8</p>
                        <p class="txt-menu-bundle">Menu</p>
                    </div>
                </div>
                <div class="none-additional-section">
    
                </div>
            </div>
        </div>
    </div> --}}
    {{-- end-additional-section --}}

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
        
        <button class="btn-testi-sec3" onclick="openForm()">SENT A QUOTE</button>
        <div id="modal">
            <div id="exampleModal" class="reveal-modal">
                <button class="btn-close-modal" onclick="closeForm()"><img src="/assets/close-modal.svg" alt=""></button>
                <p class="title-modal">Give a Review</p>
                <form class="rating">
                    <label>
                      <input type="radio" name="stars" value="1" />
                      <span class="icon">★</span>
                    </label>
                    <label>
                      <input type="radio" name="stars" value="2" />
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                    </label>
                    <label>
                      <input type="radio" name="stars" value="3" />
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                      <span class="icon">★</span>   
                    </label>
                    <label>
                      <input type="radio" name="stars" value="4" />
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                    </label>
                    <label>
                      <input type="radio" name="stars" value="5" />
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                      <span class="icon">★</span>
                    </label>
                </form>
                <div class="detail-review">
                    <p class="title-review">Detail Review</p>
                    <div class="txt-review">
                        <p>Lorem ipsum dolor sit amet,  adipiscing elit.Sed at gravida nulla tempor, neque. Duis quam ut netus 
                            donec enim vitae ac diam. Lorem ipsum dolor sit amet,  adipiscing elit.Sed at gravida nulla tempor, neque. Duis quam ut netus donec enim vitae ac diam. Lorem ipsum dolor sit amet,  adipiscing elit.Sed at gravida nulla tempor, neque. Duis quam ut netus donec enim vitae ac diam. </p>
                    </div>
                </div>
                <form class="input-recomend" action="/action_page.php">
                    <div class="title-input-radio">
                        <p>Would you recomend CookIt to others?</p>
                    </div>
                    <div class="content-input-radio">
                        <div>
                            <label class="container">Yes
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <label class="container">No
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </form>
                <div class="btn-modal">
                    <a href="">
                        <button class="btn-send-review">Send Review</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- end-content-section-3 --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        // modal
        function openForm() {
        document.getElementById("modal").style.display = "block";
        }

        function closeForm() {
        document.getElementById("modal").style.display = "none";
        }
        // end-modal

        $(document).ready(function() {
        initializeSlick();
        $(window).on('resize', function() {
            initializeSlick();
        });

        const prev = document.getElementById('prev-btn');
        const next = document.getElementById('next-btn');
        const list = document.getElementById('item-list-home');

        const itemWidth = 150;
        const padding = 10;

        prev.addEventListener('click', () => {
            list.scrollLeft -= itemWidth + padding;
        });

        next.addEventListener('click', () => {
            list.scrollLeft += itemWidth + padding;
        });
        });
    </script>
@endsection