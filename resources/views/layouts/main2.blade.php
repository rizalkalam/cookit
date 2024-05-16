<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookItUp</title>
    <link rel="stylesheet" href="/css/style2.css">
</head>
<body>
    @include('partials.navbar1')
    <div class="header">
        <div class="con-header">
            <div class="header-left">
                <p class="text-head-1">MEET AFFORDABLE MEAL</p>
                <p class="text-head-2">Make affordable, crowd-pleasing meals at home.</p>
                <a href="">
                    <button class="btn-get">GET RP15.000/MEAL</button>
                </a>
            </div>
            <div class="header-right">
                <img src="assets/gudeg.png" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <h1>How It Works</h1>
        <div class="con-intro">
            <div class="card-intro">
                <img src="assets/img1.png" alt="">
                <p class="con-title">Content-1</p>
                <p class="con-desc">Lorem ipsum dolor sit amet consectetur ipsum dolor sit consectetur ipsum dolor sit</p>
            </div>
            <div class="card-intro">
                <img src="assets/img2.png" alt="">
                <p class="con-title">Content-2</p>
                <p class="con-desc">Lorem ipsum dolor sit amet consectetur ipsum dolor sit consectetur ipsum dolor sit</p>
            </div>
            <div class="card-intro">
                <img src="assets/img3.png" alt="">
                <p class="con-title">Content-3</p>
                <p class="con-desc">Lorem ipsum dolor sit amet consectetur ipsum dolor sit consectetur ipsum dolor sit</p>
            </div>
        </div>
    </div>

    <div class="reason">
        <div class="reason-title">
            <h1>Why EveryPlate</h1>
        </div>
        <div class="reason-content">
            <div class="img-reason">
                <img class="icon-reason" src="assets/icon-park_time.svg" alt="">
            </div>
            <div class="txt-reason">
                <p class="title-reason">SAVE TIME</p>
                <p class="desc-reason">Skip the tedious trips to the grocery store</p>
            </div>
        </div>
        <div class="reason-content">
            <div class="img-reason">
                <img class="icon-reason" src="assets/solar_wallet-money-bold-duotone.svg" alt="">
            </div>
            <div class="txt-reason">
                <p class="title-reason">SAVE MONEY</p>
                <p class="desc-reason">Enjoy tasty dinners that won't break the bank, at only RP15.000 per saving</p>
            </div>
        </div>
        <div class="reason-content">
            <div class="img-reason">
                <img class="icon-reason" src="assets/icon-park_cook.svg" alt="">
            </div>
            <div class="txt-reason">
                <p class="title-reason">EASY TO COOK</p>
                <p class="desc-reason">Our recipe only 6 simple steps and will turn you into a chef</p>
            </div>
        </div>
        <div class="btnget-reason">
            <a href="">
                <button>GET RP15.000/MEAL</button>
            </a>
            <p>Skip or cancel any time</p>
        </div>
    </div>

    <div class="next-menu">
        <div class="menu-title">
            <h1>Next week's menu</h1>
            <p>Choose from 30 delicious and affordable recipes that change with every week</p>
        </div>
        <div class="container-carousel">
            <div class="carousel-view">
                <!-- Left Button -->
                <button id="prev-btn" class="prev-btn"><img src="assets/prev.svg" alt=""></button>
                  <!-- List Container -->
                  <div id="item-list" class="item-list">
                    <!-- Items -->
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle32.png"/>
                        <div class="txt-carousel">
                            <p>Content-1 Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle33.png"/>
                        <div class="txt-carousel">
                            <p>Content-2 Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle34.png"/>
                        <div class="txt-carousel">
                            <p>Content-3 Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle35.png"/>
                        <div class="txt-carousel">
                            <p>Content-4 Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle33.png"/>
                        <div class="txt-carousel">
                            <p>Content-5 Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle34.png"/>
                        <div class="txt-carousel">
                            <p>Content-6 Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img id="item" class="item" src="assets/Rectangle35.png"/>
                        <div class="txt-carousel">
                            <p>Content-7 Lorem ipsum dolor</p>
                        </div>
                    </div>
                  </div>
                <!-- Right Button -->
                <button id="next-btn" class="next-btn"><img src="assets/next.svg" alt=""></button>
              </div>
            </div>
        </div>
        <div class="btnget-reason">
            <a href="">
                <button>SEE THE MENU</button>
            </a>
            <p>Simply select recipes after signing up</p>
        </div>
    </div>
    <script src="/js/script.js"></script>
</body>
</html>