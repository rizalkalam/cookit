<div class="warp-nav">
    <div class="logo-nav">
        <a href="/home">
            <img src="/assets/logo-v2.svg" alt="" class="img-nav">
        </a>
    </div>
    <nav>
        <ul class="nav-con" id="nav-links">
            <li>
                <a href="/weekly-menu">
                    <img src="/assets/map-marker.svg">
                    <div class="txt-location-nav">
                        <p>Your Current Location</p>
                        <p class="city-name">Surabaya</p>
                    </div>
                </a>
            </li>
            <div class="right-nav">
                <form action="/action_page.php">
                    <img src="/assets/icn-search.svg" alt="">
                    <input type="text" placeholder="Search Food" name="search">
                  {{-- <button type="submit"><i class="fa fa-search"></i></button> --}}
                </form>
                <a href="">
                    <button class="nav-btn-login"><img src="/assets/icn-user.svg" alt="">Login</button>
                </a>
            </div>
        </ul>
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
    </nav>
</div>