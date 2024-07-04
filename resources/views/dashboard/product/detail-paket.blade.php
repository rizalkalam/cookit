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
            <form action="/logout" method="post">
                @csrf
                <button type="submit"><iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout</button>
            </form>
        </div>
    </div>
</div>
{{-- end-sidebar --}}

<div class="dashboard-content">
    <div class="head-con-dshb-detail-paket">
        <p class="title-dashboard">Cook The Day</p>
        <a href="/detail/product">
            <button class="btn-sv-dshb-detail-paket">Save</button>
        </a>
    </div>
    
    <div class="head-sec-table-dshb-detail-paket">
        <p class="txt-left-head-dshb-detail-paket">Live Menu</p>
        <p class="txt-right-head-dshb-detail-paket">5 / 8 Menu Chosen</p>
    </div>
    <div class="line-gap-dshb-detail-paket"></div>
    <div class="child-sec-table-dshb-detail-paket">
        <div class="table-wrap-dshb-detail-paket">
            <table id="detail-paket-dshb">
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
              </table>
        </div>
        <div class="table-wrap-dshb-detail-paket">
            <table id="detail-paket-dshb">
                <tr>
                    <th>Main Course</th>
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
              </table>
        </div>
        <div class="table-wrap-dshb-detail-paket">
            <table id="detail-paket-dshb">
                <tr>
                    <th>Dessert</th>
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
              </table>
        </div>
    </div>
    <div class="bottom-dshb-detail-paket">
        <p class="txt-total-dshb-detail-paket">Total Paket(5 Produk)</p>
        <p class="txt-price-dshb-detail-paket">Rp93.000</p>
    </div>
    
</div>

<script>
        
</script>
@endsection