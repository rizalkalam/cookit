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
    <p class="title-dashboard">Live to Promote</p>
    <div class="container-livetopromote">
        <div class="content-livetopromote">
            <div class="head-con-livetopromote">
                <div class="line-left-livetopromote"></div>
                <div class="line-mid-livetopromote">
                    <p class="title-head-livetopromote">Appetizer</p>
                </div>
                <div class="line-right-livetopromote"></div>
            </div>
            @if ($menu_appetizer->isEmpty())
            <div class="con-list-livetopromote">
                <h3>data kosong</h3>
            </div>
            @else    
            @foreach ($menu_appetizer as $menu)    
                <div class="con-list-livetopromote">
                    <div class="left-list-livetopromote">
                        <div class="img-list-livetopromote">
                            <img src="/{{ $menu->img_menu }}" alt="">
                        </div>
                        <div class="txt-list-livetopromote">
                            <p class="title-list-livetopromote">{{ $menu->name }}</p>
                            <p class="dsc-list-livetopromote">{{ $menu->flavor->flavor }}</p>
                            <p class="price-list-livetopromote">Rp. {{ $menu->price }}</p>
                        </div>
                    </div>
                    <button class="btn-promote-livetopromote" onclick="openForm('{{ $menu->id }}')">Promote</button>
                </div>
            @endforeach
            @endif
        </div>
        <div class="content-livetopromote">
            <div class="head-con-livetopromote">
                <div class="line-left-livetopromote"></div>
                <div class="line-mid-livetopromote">
                    <p class="title-head-livetopromote">Main Course</p>
                </div>
                <div class="line-right-livetopromote"></div>
            </div>
            @if ($menu_maincourse->isEmpty())
            <div class="con-list-livetopromote">
                <h3>data kosong</h3>
            </div>
            @else    
            @foreach ($menu_maincourse as $menu)    
                <div class="con-list-livetopromote">
                    <div class="left-list-livetopromote">
                        <div class="img-list-livetopromote">
                            <img src="/{{ $menu->img_menu }}" alt="">
                        </div>
                        <div class="txt-list-livetopromote">
                            <p class="title-list-livetopromote">{{ $menu->name }}</p>
                            <p class="dsc-list-livetopromote">{{ $menu->flavor->flavor }}</p>
                            <p class="price-list-livetopromote">Rp. {{ $menu->price }}</p>
                        </div>
                    </div>    
                <button class="btn-promote-livetopromote" onclick="openForm('{{ $menu->id }}')">Promote</button>
                </div>
            @endforeach
            @endif
        </div>
        <div class="content-livetopromote">
            <div class="head-con-livetopromote">
                <div class="line-left-livetopromote"></div>
                <div class="line-mid-livetopromote">
                    <p class="title-head-livetopromote">Dessert</p>
                </div>
                <div class="line-right-livetopromote"></div>
            </div>
            @if ($menu_dessert->isEmpty())
            <div class="con-list-livetopromote">
                <h3>data kosong</h3>
            </div>
            @else    
            @foreach ($menu_dessert as $menu)
                <div class="con-list-livetopromote">
                    <div class="left-list-livetopromote">
                        <div class="img-list-livetopromote">
                            <img src="/{{ $menu->img_menu }}" alt="">
                        </div>
                        <div class="txt-list-livetopromote">
                            <p class="title-list-livetopromote">{{ $menu->name }}</p>
                            <p class="dsc-list-livetopromote">{{ $menu->flavor->flavor }}</p>
                            <p class="price-list-livetopromote">Rp. {{ $menu->price }}</p>
                        </div>
                    </div>    
                <button class="btn-promote-livetopromote" onclick="openForm('{{ $menu->id }}')">Promote</button>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

{{-- modal --}}
<form action="" method="POST" id="promotionForm">
    @csrf
    <div id="modal-livetopromote" style="display: none;">
        <div id="exampleModal" class="reveal-modal-livetopromote">
            <button class="btn-close-modal" type="button" onclick="closeForm()"><img src="/assets/close-modal.svg" alt=""></button>
            <p class="title-modal">Warning</p>
            <p class="dsc-modal-livetopromote">Only one menu can be displayed in the promotion banner. The last promotion will automatically end</p>
            <div class="">
                <button type="submit" class="btn-modal-livetopromote">Start Promotion</button>
            </div>
        </div>
    </div>
</form>
{{-- modal --}}

<script>
        // modal
        function openForm(menuId) {
            console.log(menuId)
            document.getElementById("promotionForm").action = "/change/promotion/" + menuId;
            document.getElementById("modal-livetopromote").style.display = "block";
        }

        function closeForm() {
            document.getElementById("modal-livetopromote").style.display = "none";
        }
        // end-modal
</script>
@endsection