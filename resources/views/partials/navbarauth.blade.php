<div class="warp-nav">
    <div class="logo-nav">
        <a href="/home">
            <img src="/assets/logo-v2.svg" alt="" class="img-nav">
        </a>
    </div>
    <div id="nav-links">
        {{-- <div class="nav-con">
            <li>
                <a href="/weekly-menu">
                    <img src="/assets/map-marker.svg">
                    <div class="txt-location-nav">
                        <p>Your Current Location</p>
                        <p class="city-name">Surabaya</p>
                    </div>
                </a>
            </li>
        </div> --}}
        <div class="right-nav">
            <form action="/action_page.php">
                <img class="search" src="/assets/icn-search.svg" alt="">
                <input type="text" placeholder="Search Food" name="search">
              {{-- <button type="submit"><i class="fa fa-search"></i></button> --}}
            </form>
            <a href="/keranjang" class="shipping_cart">
                <img src="/assets/shipping_cart.svg" alt="">
            </a>
            <div class="dropdown">
                <a class="nav-auth-name" href="/logout">
                    Hi, {{ auth()->user()->name }}!
                </a>
                <div class="dropdown-content">
                    <a class="option-profile" href="/myaccount">Akun Saya</a>
                    @if (Auth::user()->hasRole('admin'))
                    <a class="option-profile" href="/dashboard/produk">Dashboard</a>
                    @endif
                    <form action="/logout" method="post">
                        @csrf
                        <button class="option-out" type="submit">Keluar</button>
                    </form>
                </div>
              </div>
        </div>
    </div>
    <div class="nav-right">
        <a href="javascript:void(0);" onclick="navPopup()">
            <label for="menu-btn-nav" class="btn menu-btn-nav"
          ><iconify-icon
            icon="pajamas:hamburger"
            style="color: #F46A45"
            width="22"
          ></iconify-icon
        ></label>
        </a>
    </div>
</div>