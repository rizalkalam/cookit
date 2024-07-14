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
    <div class="title-section-edit-product">
        <p class="title-dashboard">Edit Live Product / Add New</p>
        <a href="/dashboard/product">
            <button class="btn-save-edit-product">Back</button>
        </a>
    </div>
    <div class="container-edit-product">
        @foreach ($live_products as $live_product)    
        <div class="edit-dshb-sec">
            <div class="wrap-con-liveproduct">
                <div class="head-sec-edit-product">
                    <p class="title-con-product">#Section {{ $live_product->section_id }}</p>
                    @if ($live_product->status === App\Enums\LiveProductStatus::Live)
                    <ul>
                        <li id="live">{{ ucfirst($live_product->status) }}</li>
                    </ul>
                    @else
                    <li id="empty">{{ ucfirst($live_product->status) }}</li>
                    @endif
                </div>
                <div class="warp-row-edit-product">
                    <div class="row1-edit-product">
                        <p>Delivery Date</p>
                        <p>Pre Order Opens</p>
                    </div>
                    <div class="row2-edit-product">
                        <input type="date" disabled value="{{ $live_product->delivery }}" />
                        <div class="con-inpt-date">
                            <div class="from-date">
                                <p>From</p>
                                <input type="date" disabled value="{{ $live_product->pre_order_from }}" />
                            </div>
                            <div class="until-date">
                                <p>Until</p>
                                <input type="date" disabled value="{{ $live_product->pre_order_until }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row3-edit-product"></div>
                    <p class="row4-edit-product">Menu</p>
                    <div class="row5-edit-product">
                        @if ($live_product->sectionProduct->menu_appetizer)
                            <input type="hidden" value="{{ $live_product->sectionProduct->menu_appetizer->name }}" disabled>
                            <a href="/dashboard/product/menu/{{ $live_product->section_id }}/{{ $live_product->sectionProduct->menu_appetizer->type->name_type }}/{{ $live_product->sectionProduct->menu_appetizer->id }}">
                                <button class="btn-ordernow-dshb-edit-product">Appetizer</button>
                            </a>
                        @else
                        <a href="/dashboard/product/tambah_menu/{{ $live_product->section_id }}/{{ 'Appetizer' }}">
                            <button id="order-empty" class="btn-ordernow-dshb-edit-product">Appetizer</button>
                        </a>
                        @endif
                        @if ($live_product->sectionProduct->menu_maincourse)
                            <input type="hidden" value="{{ $live_product->sectionProduct->menu_maincourse->name }}" disabled>
                            <a href="/dashboard/product/menu/{{ $live_product->section_id }}/{{ $live_product->sectionProduct->menu_maincourse->type->name_type }}/{{ $live_product->sectionProduct->menu_maincourse->id }}">
                                <button class="btn-ordernow-dshb-edit-product">Main Course</button>
                            </a>
                        @else
                        <a href="/dashboard/product/tambah_menu/{{ $live_product->section_id }}/{{ 'Main Course' }}">
                            <button id="order-empty" class="btn-ordernow-dshb-edit-product">Main Course</button>
                        </a>
                        @endif
                        @if ($live_product->sectionProduct->menu_dessert)
                            <input type="hidden" value="{{ $live_product->sectionProduct->menu_dessert->name }}" disabled>
                            <a href="/dashboard/product/menu/{{ $live_product->section_id }}/{{ $live_product->sectionProduct->menu_dessert->type->name_type }}/{{ $live_product->sectionProduct->menu_dessert->id }}">
                                <button class="btn-ordernow-dshb-edit-product">Dessert</button>
                            </a>
                        @else
                        <a href="/dashboard/product/tambah_menu/{{ $live_product->section_id }}/{{ 'Dessert' }}">
                            <button id="order-empty" class="btn-ordernow-dshb-edit-product">Dessert</button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="btn-edit-liveproduct" id="editLiveproduct" 
            data-id-liveproduct="{{ $live_product->id }}"
            data-section_name-liveproduct="{{ $live_product->section_id }}"
            data-delivery-liveproduct="{{ $live_product->delivery }}"
            data-from-liveproduct="{{ $live_product->pre_order_from }}"
            data-until-liveproduct="{{ $live_product->pre_order_until }}"
            data-status-liveproduct="{{ $live_product->status }}"
            >
                <a href="">
                    Edit
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- modal-edit-liveproduct --}}
@foreach ($live_products as $live_product)    
<form action="/dashboard/live_product/{{ $live_product->id }}" method="POST" id="editLiveproductForm">
@csrf
<div id="modal-edit-liveproduct" style="display:none;">
    <div id="editTosentModal" class="reveal-modal-edit-liveproduct">
        <span class="btn-close-modal" id="close-modal-liveproduct"><img src="/assets/close-modal.svg" alt="Close"></span>
        <h2 id="section_name"></h2>
        <input type="hidden" name="liveproductId" id="liveproductId">
        <div class="con-input-liveproduct">
            <div class="input-modal-liveproduct">
                <label class="label-input-liveproduct" for="deliveryDate">Delivery Date</label>
                <input type="date" name="deliveryDate" id="deliveryDate">
            </div>
            <div class="input-modal-liveproduct">
                <label class="label-input-liveproduct" for="fromDate">From</label>
                <input type="date" name="fromDate" id="fromDate">
            </div>
            <div class="input-modal-liveproduct">
                <label class="label-input-liveproduct" for="untilDate">Until</label>
                <input type="date" name="untilDate" id="untilDate">
            </div>
            <div class="input-modal-liveproduct">
                <select name="statusLive" id="statusLive" required>
                    @foreach(App\Enums\LiveProductStatus::getValues() as $status)
                        <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                    @endforeach
                </select>
            </div>
                <button class="btn-modal-livetopromote" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
@endforeach
{{-- modal-edit-liveproduct --}}


<script src="/js/modal-form-product.js"></script>
<script>
    
</script>
@endsection