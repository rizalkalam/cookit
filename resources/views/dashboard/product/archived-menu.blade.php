@extends('layouts.main')
@section('content')   

{{-- sidebar --}}
<div class="wrap-side">
    <div class="sidebar">
        <div class="side-menu" id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/home">
                <iconify-icon icon="radix-icons:dashboard" width="20"></iconify-icon>
                Dashboard
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a class="active" href="/dashboard/product">
                <iconify-icon class="active" icon="fluent:box-multiple-checkmark-24-regular" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/order_list">
                <iconify-icon icon="hugeicons:note-03" width="20"></iconify-icon>
                Order
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="solar:hand-stars-linear" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="iconoir:database" width="20"></iconify-icon>
                Database
            </a>
        </div>
        <div class="line-gap-sidebar"></div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="mage:settings" width="20"></iconify-icon>
                Settings
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout
            </a>
        </div>
    </div>
</div>
{{-- end-sidebar --}}

<div class="dashboard-content">
    <p class="title-dashboard">Cook The Day</p>
        <div class="table-wrap-dshb-archived-menu">
            <table id="archived-menu-dshb">
                <tr>
                    <th>Appetizer</th>
                    <th>Last Modified</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Alfreds Futterkiste</td>
                    <td>06/09/2023</td>
                    <td>Germany</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                    <td>06/09/2023</td>
                    <td>Sweden</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Centro comercial Moctezuma</td>
                    <td>06/09/2023</td>
                    <td>Mexico</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                    <td>06/09/2023</td>
                    <td>Sweden</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Centro comercial Moctezuma</td>
                    <td>06/09/2023</td>
                    <td>Mexico</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                    <td>06/09/2023</td>
                    <td>Sweden</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
                  <tr>
                    <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Centro comercial Moctezuma</td>
                    <td>06/09/2023</td>
                    <td>Mexico</td>
                    <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                  </tr>
              </table>
        </div>    
</div>

<script>
        
</script>
@endsection