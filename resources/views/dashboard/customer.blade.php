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
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="typcn:messages" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a href="#about" class="active">
                <iconify-icon class="active" icon="humbleicons:users" width="20"></iconify-icon>
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
    <p class="title-dashboard">Contact</p>  
    <div class="container-customer">
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/gyj.jpeg" alt="">
            </div>
            <p class="name-customer">Go YoonJung</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/1.jpg" alt="">
            </div>
            <p class="name-customer">Bae Suzy</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/gyj.jpeg" alt="">
            </div>
            <p class="name-customer">Go YoonJung</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/1.jpg" alt="">
            </div>
            <p class="name-customer">Bae Suzy</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/gyj.jpeg" alt="">
            </div>
            <p class="name-customer">Go YoonJung</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/1.jpg" alt="">
            </div>
            <p class="name-customer">Bae Suzy</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/gyj.jpeg" alt="">
            </div>
            <p class="name-customer">Go YoonJung</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/1.jpg" alt="">
            </div>
            <p class="name-customer">Bae Suzy</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
        <div class="card-customer">
            <div class="img-customer">
                <img src="/assets/5.jpg" alt="">
            </div>
            <p class="name-customer">Lee Ji-eun</p>
            <div class="btn-dshb-customer">
                <a href="/detail/product">
                    <button class="btn-message">Message</button>
                </a>
                <a href="/detail/product">
                    <button class="btn-detail-dshb-contact">Details</button>
                </a>
            </div>
        </div>
    </div> 
</div>

<script>
    
</script>
@endsection