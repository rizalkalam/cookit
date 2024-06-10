@extends('layouts.main')
@section('content')
<div class="head-weekly">
    <div class="left-con1">
        <p><span class="cook-it">Cook It</span> and <span class="eat">Eat</span> on Your Day!</p>
    </div>
    <div class="right-con1">
        <ul class="monthly-links">
            <li class="monthly selected">
                <a href="">
                    <p class="month">May</p>
                    <p class="day">6</p>
                </a>
            </li>
            <li class="monthly">
                <a href="">
                    <p class="month">May</p>
                    <p class="day">7</p>
                </a>
            </li>
            <li class="monthly">
                <a href="">
                    <p class="month">May</p>
                    <p class="day">7</p>
                </a>
            </li>
            <li class="monthly">
                <a href="">
                    <p class="month">May</p>
                    <p class="day">7</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container-weekly">

    {{-- section-1 --}}
    <div class="section-weekly" id="right">
        <div class="left-con-week">
            <div class="txt-con">
                <p class="title-week"><span>Best deals</span> Crispy Sandwiches</p>
                <p class="dsc-week">Enjoy the large size of sandwiches. Complete perfect slice of sandwiches.</p>
            </div>
            <a href="">
                <button class="btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
            </a>
        </div>
        <div class="con-img">
            <img class="img-week-right" src="/assets/weekly-1.png" alt="">
        </div>
    </div>
    {{-- end-section-1 --}}

    {{-- section-2 --}}
    <div class="section-weekly" id="left">
        <div class="con-img">
            <img class="img-week-left" src="/assets/weekly-2.png" alt="">
        </div>
        <div class="right-con-week">
            <div class="txt-con">
                <p class="title-week"><span>Celebrate  parties with</span> Fried Chicken</p>
                <p class="dsc-week">Enjoy the large size of sandwiches. Complete perfect slice of sandwiches.</p>
            </div>
            <a href="">
                <button class="btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
            </a>
        </div>
    </div>
    {{-- end-section-2 --}}

    {{-- section-3 --}}
    <div class="section-weekly" id="right">
        <div class="left-con-week">
            <div class="txt-con">
                <p class="title-week"><span>Wanna eat hot 
                    & spicy</span> Pizza?</p>
                <p class="dsc-week">Enjoy the large size of sandwiches. Complete perfect slice of sandwiches.</p>
            </div>
            <a href="">
                <button class="btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
            </a>
        </div>
        <div class="con-img">
            <img class="img-week-right" src="/assets/weekly-3.png" alt="">
        </div>
    </div>
    {{-- end-section-3 --}}

</div>
@endsection