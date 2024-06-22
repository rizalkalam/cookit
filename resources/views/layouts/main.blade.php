<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookItUp</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/auth.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/weekly_menu.css">
    <link rel="stylesheet" href="/css/bundling.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/keranjang.css">
    <link rel="stylesheet" href="/css/check-out.css">
    <link rel="stylesheet" href="/css/alamat.css">
    <link rel="stylesheet" href="/css/rincian-pesanan.css">
    <link rel="stylesheet" href="/css/dashboard-home.css">
    <link rel="stylesheet" href="/css/dashboard-product.css">
    <link rel="stylesheet" href="/css/dashboard-detail-paket.css">
    <link rel="stylesheet" href="/css/dashboard-edit-product.css">
    <link rel="stylesheet" href="/css/dashboard-edit-menu.css">
    <link rel="stylesheet" href="/css/dashboard-edit-live-to-promote.css">
    <link rel="stylesheet" href="/css/dashboard-archived-menu.css">
    <link rel="stylesheet" href="/css/dashboard-orderlist.css">
    <link rel="stylesheet" href="/css/dashboard-review.css">
    <link rel="stylesheet" href="/css/dashboard-customer.css">
    <link rel="stylesheet" href="/css/dashboard-detail-customer.css">
    <link rel="stylesheet" href="/css/dashboard-db.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <!-- icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <meta property="og:title" content="Dealer Toyota Nasmoco Jawa Tengah" />
    <meta
      property="og:description"
      content="Jawa Tengah. Toyota Nasmoco Jateng. PROMO BULAN INI. Pelayanan marketing yang cepat dan siap 24 jam; Persyaratan bisa disesuaikan; Bonus Melimpah; Bisa cash maupun kredit"
    />
    <meta
      property="og:image"
      content="https://azizwira.github.io/otomotif1/assets/promo/img-promo1.jpg"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <!--  -->
</head>
<body>
    
    @if (Route::is('no-partials'))
      @yield('content')
    @elseif(Route::is('prefix-dashboard'))
      @auth
          @include('partials.navbarauth')
      @else
          @include('partials.navbar')      
      @endauth
      @yield('content')
    @else
      @auth
          @include('partials.navbarauth')
      @else
          @include('partials.navbar')      
      @endauth
      @yield('content')
      @include('partials.footer')
    @endif
    
    <script src="/js/script.js"></script>
</body>
</html>