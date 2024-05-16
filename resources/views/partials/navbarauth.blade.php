<nav>
    <div class="wrapper-nav">
        <ul class="nav-left">
            <a href="/home">
                <img src="/assets/cookitup-logo.svg" alt="">
            </a>
            <li><a href="/weekly-menu">Menu Mingguan</a></li>
            <li><a href="">Tentang Kami</a></li>
        </ul>
        <ul class="nav-right">
            <div class="chart">
                <img src="/assets/chart.svg" alt="">
            </div>
            <div class="dropdown">
                <div class="profile-picture">
                    <img src="{{ auth()->user()->photo_profile }}" alt="">
                </div>
                <div class="dropdown-content">
                    <a class="option-profile" href="/myaccount">Akun Saya</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="option-out" type="submit">Keluar</button>
                    </form>
                </div>
              </div>
        </ul>
    </div>
</nav>