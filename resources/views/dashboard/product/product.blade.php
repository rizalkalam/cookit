@extends('layouts.main')
@section('content')   

{{-- sidebar --}}
<div class="wrap-side">
    <div class="sidebar">
        <div class="side-menu" id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/home">
                <iconify-icon icon="mingcute:dashboard-3-line" width="20"></iconify-icon>
                Dashboard
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a href="/dashboard/product" class="active">
                <iconify-icon class="active" icon="material-symbols:window-outline-sharp" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/order_list">
                <iconify-icon icon="lucide:notebook-pen" width="20"></iconify-icon>
                Order
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="typcn:messages" width="20"></iconify-icon>
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
    <p class="title-dashboard">Products</p>
    <div class="container-dshb-product">
        <p class="title-con-product">Live Product</p>
        <a class="edit-txt" href="/dashboard/product/edit_product">Edit</a>
        <div class="con-dshb-product">
            <div class="sec1-dshb-product">
                <ul class="dshb-monthly-links">
                    <li class="dshb-monthly selected">
                        <a href="">
                            <p class="dshb-month">May</p>
                            <p class="day">6</p>
                        </a>
                    </li>
                    <li class="dshb-monthly">
                        <a href="">
                            <p class="dshb-month">May</p>
                            <p class="day">7</p>
                        </a>
                    </li>
                    <li class="dshb-monthly">
                        <a href="">
                            <p class="dshb-month">May</p>
                            <p class="day">7</p>
                        </a>
                    </li>
                    <li class="dshb-monthly">
                        <a href="">
                            <p class="dshb-month">May</p>
                            <p class="day">7</p>
                        </a>
                    </li>
                </ul>
                <div class="dshb-product-list">
                    <div class="item-dshb-product">
                        <img class="item-dshb-product-img" src="/img_menu/card1-sec2.png"/>
                        <div class="dsc-card-dshb-product">
                            <p class="title-dsc-card-dshb-product">Cheese Burger</p>
                            <p class="dsc-dshb-product">Pedas, Gurih</p>
                            <p class="price-dshb-product">388</p>
                            <a href="/detail/product">
                                <button class="btn-ordernow-dshb-product">Edit Product</button>
                            </a>
                        </div>
                    </div>
                    <div class="item-dshb-product">
                        <img class="item-dshb-product-img" src="/img_menu/card1-sec2.png"/>
                        <div class="dsc-card-dshb-product">
                            <p class="title-dsc-card-dshb-product">Cheese Burger</p>
                            <p class="dsc-dshb-product">Pedas, Gurih</p>
                            <p class="price-dshb-product">388</p>
                            <a href="/detail/product">
                                <button class="btn-ordernow-dshb-product">Edit Product</button>
                            </a>
                        </div>
                    </div>
                    <div class="item-dshb-product">
                        <img class="item-dshb-product-img" src="/img_menu/card1-sec2.png"/>
                        <div class="dsc-card-dshb-product">
                            <p class="title-dsc-card-dshb-product">Cheese Burger</p>
                            <p class="dsc-dshb-product">Pedas, Gurih</p>
                            <p class="price-dshb-product">388</p>
                            <a href="/detail/product">
                                <button class="btn-ordernow-dshb-product">Edit Product</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec2-dshb-product">
                <p class="title-con-product">On Promotion</p>
                <img class="item-dshb-product-img-sec2" src="/img_menu/card1-sec2.png"/>
                <div class="dsc-card-dshb-product-sec2">
                    <p class="title-dsc-card-dshb-product">Cheese Burger</p>
                    <p class="dsc-dshb-product">Pedas, Gurih</p>
                    <p class="price-dshb-product">388</p>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product-sec2">Edit Product</button>
                    </a>
                </div>
            </div>
            <div class="sec3-dshb-product">
                <h1 class="title-con-product">Archived</h1>
                <div class="table-warp">
                    <table id="customers">
                        <tr>
                          <th>Company</th>
                          <th>Contact</th>
                          <th>Country</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Alfreds Futterkiste</td>
                          <td>Maria Anders</td>
                          <td>Germany</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Berglunds snabbköp</td>
                          <td>Christina Berglund</td>
                          <td>Sweden</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Centro comercial Moctezuma</td>
                          <td>Francisco Chang</td>
                          <td>Mexico</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Ernst Handel</td>
                          <td>Roland Mendel</td>
                          <td>Austria</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Island Trading</td>
                          <td>Helen Bennett</td>
                          <td>UK</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Königlich Essen</td>
                          <td>Philip Cramer</td>
                          <td>Germany</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Laughing Bacchus Winecellars</td>
                          <td>Yoshi Tannamuri</td>
                          <td>Canada</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Magazzini Alimentari Riuniti</td>
                          <td>Giovanni Rovelli</td>
                          <td>Italy</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">North/South</td>
                          <td>Simon Crowther</td>
                          <td>UK</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Paris spécialités</td>
                          <td>Marie Bertrand</td>
                          <td>France</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                      </table>
                      <a href="">Show More ></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
</script>
@endsection