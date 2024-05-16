<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookItUp</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/weekly_menu.css">
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
    <!--  -->
</head>
<body>
    @auth
        @include('partials.navbarauth')
    @else
        @include('partials.navbar')      
    @endauth
    @yield('content')
    @include('partials.footer')
    
    <script src="/js/script.js"></script>
</body>
</html>