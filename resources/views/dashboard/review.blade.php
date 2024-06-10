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
            <div id="mark"></div>
            <a href="/dashboard/product">
                <iconify-icon icon="material-symbols:window-outline-sharp" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#contact">
                <iconify-icon icon="lucide:notebook-pen" width="20"></iconify-icon>
                Order
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a href="#about" class="active">
                <iconify-icon class="active" icon="typcn:messages" width="20"></iconify-icon>
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
    <p class="title-dashboard">Reviews and Quote</p>
    <div class="container-review">
        <div class="con-left-review">
            <p class="name-reviewers">Jullu Jalal</p>
            <p class="return-review">Would like to recomend CookIt to others</p>
            <div class="btn-review">
                <a href="/detail/product">
                    <button class="btn-show-on">Show on Dashboard</button>
                </a>
            </div>
        </div>
        <div class="con-right-review">
            <div class="star-dshb-review">
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
            </div>
            <div class="dsc-review">
                <p>panjang ato pendek quotenya ttp segini ukurannya.. cuman batas maksimal pesan yg dikirim tu 280 karakter</p>
            </div>
        </div>
    </div>
    <div class="container-review">
        <div class="con-left-review">
            <p class="name-reviewers">Jullu Jalal</p>
            <p class="return-review">Would NOT 
                like to recomend CookIt to others</p>
            <div class="btn-review">
                <a href="/detail/product">
                    <button class="btn-get-contact">Get Contact</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-delete-review">Delete</button>
                </a>
            </div>
        </div>
        <div class="con-right-review">
            <div class="star-dshb-review">
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
            </div>
            <div class="dsc-review">
                <p>panjang ato pendek quotenya ttp segini ukurannya.. cuman batas maksimal pesan yg dikirim tu 280 karakter</p>
            </div>
        </div>
    </div>
    <div class="container-review">
        <div class="con-left-review">
            <p class="name-reviewers">Jullu Jalal</p>
            <p class="return-review">Would NOT 
                like to recomend CookIt to others</p>
            <div class="btn-review">
                <a href="/detail/product">
                    <button class="btn-get-contact">Get Contact</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-delete-review">Delete</button>
                </a>
            </div>
        </div>
        <div class="con-right-review">
            <div class="star-dshb-review">
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
            </div>
            <div class="dsc-review">
                <p>panjang ato pendek quotenya ttp segini ukurannya.. cuman batas maksimal pesan yg dikirim tu 280 karakter</p>
            </div>
        </div>
    </div>    
    <div class="container-review">
        <div class="con-left-review">
            <p class="name-reviewers">Jullu Jalal</p>
            <p class="return-review">Would NOT 
                like to recomend CookIt to others</p>
            <div class="btn-review">
                <a href="/detail/product">
                    <button class="btn-get-contact">Get Contact</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-delete-review">Delete</button>
                </a>
            </div>
        </div>
        <div class="con-right-review">
            <div class="star-dshb-review">
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star checked" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
                <span class="fa fa-star" style="font-size:28px"></span>
            </div>
            <div class="dsc-review">
                <p>panjang ato pendek quotenya ttp segini ukurannya.. cuman batas maksimal pesan yg dikirim tu 280 karakter</p>
            </div>
        </div>
    </div>    
</div>

<script>
    
</script>
@endsection