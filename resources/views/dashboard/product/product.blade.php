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
            <a href="/dashboard/review">
                <iconify-icon icon="solar:hand-stars-linear" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/customer">
                <iconify-icon icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/database">
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
    <p class="title-dashboard">Products</p>
    <div class="container-dshb-product">
        <p class="title-con-product">Live Product</p>
        <a class="edit-txt" href="/dashboard/edit_product">Edit</a>
        <div class="con-dshb-product">
            <div class="sec1-dshb-product">
                <ul class="dshb-monthly-links">                
                    @foreach ($months as $index => $month)    
                        <li class="dshb-monthly {{ $index === 0 ? 'selected' : '' }}">
                            <a href="javascript:void(0);" data-target="section_{{ $section_id[$index] }}">
                                <p class="dshb-month">{{ $month }}</p>
                                <p class="day">{{ $days[$index] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                @foreach ($sections as $index => $section)
                <div class="dshb-product-list" id="section_{{ $section->id }}" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                    @if (!$section->menu_appetizer && !$section->menu_maincourse && !$section->menu_dessert)
                        <div class="item-dshb-product">
                            <div class="dshb-product-list-null">
                                <div class="item-dshb-product">
                                    <h4 class="txt-ifnull">Data kosong</h4>
                                </div>
                            </div>
                        </div>
                    @else
                        @if ($section->menu_appetizer)
                            <div class="item-dshb-product">
                                <div class="item-dshb-product-img">
                                    <img src="/{{ $section->menu_appetizer->img_menu }}"/>
                                </div>
                                <div class="dsc-card-dshb-product">
                                    <p class="title-dsc-card-dshb-product">{{ $section->menu_appetizer->name }}</p>
                                    <p class="dsc-dshb-product">{{ $section->menu_appetizer->flavor->flavor }}</p>
                                    <p class="price-dshb-product">Rp{{ number_format($section->menu_appetizer->price, '0', ',', '.') }}</p>
                                    <a href="/dashboard/product/menu/{{ $section->id }}/{{ $section->menu_appetizer->type->name_type }}/{{ $section->menu_appetizer->id }}">
                                        <button class="btn-ordernow-dshb-product">Edit Product</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if ($section->menu_maincourse)
                            <div class="item-dshb-product">
                                <div class="item-dshb-product-img">
                                    <img src="/{{ $section->menu_maincourse->img_menu }}"/>
                                </div>
                                <div class="dsc-card-dshb-product">
                                    <p class="title-dsc-card-dshb-product">{{ $section->menu_maincourse->name }}</p>
                                    <p class="dsc-dshb-product">{{ $section->menu_maincourse->flavor->flavor }}</p>
                                    <p class="price-dshb-product">Rp{{ number_format($section->menu_maincourse->price, '0', ',', '.') }}</p>
                                    <a href="/dashboard/product/menu/{{ $section->id }}/{{ $section->menu_maincourse->type->name_type }}/{{ $section->menu_maincourse->id }}">
                                        <button class="btn-ordernow-dshb-product">Edit Product</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if ($section->menu_dessert)
                            <div class="item-dshb-product">
                                <div class="item-dshb-product-img">
                                    <img src="/{{ $section->menu_dessert->img_menu }}"/>
                                </div>
                                <div class="dsc-card-dshb-product">
                                    <p class="title-dsc-card-dshb-product">{{ $section->menu_dessert->name }}</p>
                                    <p class="dsc-dshb-product">{{ $section->menu_dessert->flavor->flavor }}</p>
                                    <p class="price-dshb-product">Rp{{ number_format($section->menu_dessert->price, '0', ',', '.') }}</p>
                                    <a href="/dashboard/product/menu/{{ $section->id }}/{{ $section->menu_dessert->type->name_type }}/{{ $section->menu_dessert->id }}">
                                        <a href="/dashboard/product/menu/{{ $section->id }}/{{ $section->menu_dessert->type->name_type }}/{{ $section->menu_dessert->id }}">
                                        <button class="btn-ordernow-dshb-product">Edit Product</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
                @endforeach
            </div>

            {{-- section-promotion --}}
            @if (isset($promotion) && !$promotion->isEmpty())
                @if (isset($promotion->menu))
                    <div class="sec2-dshb-product">
                        <p class="title-con-product">On Promotion</p>
                        <div class="item-dshb-product-img">
                            <img src="/{{ $promotion->menu->img_menu }}">
                        </div>
                        <div class="dsc-card-dshb-product-sec2">
                            <p class="title-dsc-card-dshb-product">{{ $promotion->menu->name }}</p>
                            <p class="dsc-dshb-product">{{ $promotion->menu->flavor->flavor }}</p>
                            <p class="price-dshb-product">Rp{{ number_format($promotion->menu->price, 0, ',', '.') }}</p>
                            <a href="/dashboard/product/live_to_promote">
                                <button class="btn-ordernow-dshb-product-sec2">Edit Product</button>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="sec2-dshb-product">
                        <p class="title-con-product">On Promotion</p>
                        <div class="dsc-card-dshb-product-sec2">
                            <h3>data kosong</h3>
                        </div>
                    </div>
                @endif
            @else
                <div class="sec2-dshb-product">
                    <p class="title-con-product">On Promotion</p>
                    <div class="dsc-card-dshb-product-sec2">
                        <h3>data kosong</h3>
                    </div>
                </div>
            @endif

            {{-- section-promotion --}}


            {{-- section-bundling --}}
            <div class="sec3-dshb-product">
                <p class="title-con-product">PaketBundling</p>
                <div class="container-sec3">
                    <div class="card-bundling-dshb">
                        <p class="title-card-bundling-dshb">{{ $snackattack->bundling->bundling_name ?? 'Snack Attack' }}</p>
                        <div class="content-bundling-dshb">
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Appetizer</p>
                                <ul class="a">
                                    @foreach ($snackattack_appetizer as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Main Course</p>
                                <ul class="a">
                                    @foreach ($snackattack_maincourse as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Dessert</p>
                                <ul class="a">
                                    @foreach ($snackattack_dessert as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                  </ul>
                            </div>
                        </div>
                        <div class="bottom-bundling-dshb">
                            <p class="price-bundling-dshb">Rp.{{ $snackattack->bundling->price ?? '0' }}</p>
                            <a href="/dashboard/bundling/{{ $snackattack->bundling->bundling_name ?? '#' }}">
                                <button class="btn-edit-bundle-dshb">Edit</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-bundling-dshb">
                        <p class="title-card-bundling-dshb">{{ $cooktheday->bundling->bundling_name ?? 'Cook The Day' }}</p>
                        <div class="content-bundling-dshb">
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Appetizer</p>
                                <ul class="a">
                                    @foreach ($cooktheday_appetizer as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Main Course</p>
                                <ul class="a">
                                    @foreach ($cooktheday_maincourse as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Dessert</p>
                                <ul class="a">
                                    @foreach ($cooktheday_dessert as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-bundling-dshb">
                            <p class="price-bundling-dshb">Rp.{{ $cooktheday->bundling->price ?? '0' }}</p>
                            <a href="/dashboard/bundling/{{ $cooktheday->bundling->bundling_name ?? '#' }}">
                                <button class="btn-edit-bundle-dshb">Edit</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-bundling-dshb">
                        <p class="title-card-bundling-dshb">{{ $cookitonce->bundling->bundling_name ?? 'Cook It Once' }}</p>
                        <div class="content-bundling-dshb">
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Appetizer</p>
                                <ul class="a">
                                    @foreach ($cookitonce_appetizer as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Main Course</p>
                                <ul class="a">
                                    @foreach ($cookitonce_maincourse as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Dessert</p>
                                <ul class="a">
                                    @foreach ($cookitonce_dessert as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-bundling-dshb">
                            <p class="price-bundling-dshb">Rp.{{ $cookitonce->bundling->price ?? '0' }}</p>
                            <a href="/dashboard/bundling/{{ $cookitonce->bundling->bundling_name ?? '#' }}">
                                <button class="btn-edit-bundle-dshb">Edit</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-bundling-dshb">
                        <p class="title-card-bundling-dshb">{{ $adorableweek->bundling->bundling_name ?? 'Adorable Week' }}</p>
                        <div class="content-bundling-dshb">
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Appetizer</p>
                                <ul class="a">
                                    @foreach ($adorableweek_appetizer as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Main Course</p>
                                <ul class="a">
                                    @foreach ($adorableweek_maincourse as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="con-bundling-dshb">
                                <p class="title-con-bundling-dshb">Dessert</p>
                                <ul class="a">
                                    @foreach ($adorableweek_dessert as $item)
                                    <li>{{ $item->qty ?? '' }} {{ $item->menu->name ?? '' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-bundling-dshb">
                            <p class="price-bundling-dshb">Rp.{{ $adorableweek->bundling->price ?? '0' }}</p>
                            <a href="/dashboard/bundling/{{ $adorableweek->bundling->bundling_name ?? '#' }}">
                                <button class="btn-edit-bundle-dshb">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- section-bundling --}}

            {{-- section-arsip --}}
            {{-- <div class="sec4-dshb-product">
                <h1 class="title-con-product">Archived</h1>
                <div class="table-warp">
                    <table id="customers">
                        <tr>
                          <th>Menu</th>
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
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Ernst Handel</td>
                          <td>06/09/2023</td>
                          <td>Austria</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Island Trading</td>
                          <td>06/09/2023</td>
                          <td>UK</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Königlich Essen</td>
                          <td>06/09/2023</td>
                          <td>Germany</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Laughing Bacchus Winecellars</td>
                          <td>06/09/2023</td>
                          <td>Canada</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Magazzini Alimentari Riuniti</td>
                          <td>06/09/2023</td>
                          <td>Italy</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">North/South</td>
                          <td>06/09/2023</td>
                          <td>UK</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                        <tr>
                          <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">Paris spécialités</td>
                          <td>06/09/2023</td>
                          <td>France</td>
                          <td><img class="icn-close" src="/assets/icn-close.svg" alt=""></td>
                        </tr>
                      </table>
                      <a href="">Show More ></a>
                </div>
            </div> --}}
            {{-- section-arsip --}}
        </div>
    </div>
</div>

<script src="/js/dashboard-product.js"></script>
<script>
    
</script>
@endsection