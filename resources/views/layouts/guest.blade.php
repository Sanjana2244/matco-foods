<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '685246819244951');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=685246819244951&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Matco Foods Limited is the largest basmati rice exporter from Pakistan. Its flagship brand 'Falak Rice'​ is available in more than 65 countries worldwide.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="matcofoods">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.matcofoods.com/">
    <meta property="og:image" content="https://matcofoods.com/frontend-assets/img/logo.png">
    <meta property="og:description" content="Matco Foods Limited is the largest basmati rice exporter from Pakistan. Its flagship brand 'Falak Rice'​ is available in more than 65 countries worldwide.">
    <meta property="og:site_name" content="matco foods">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Matco Foods",
          "url": "https://matcofoods.com/",
          "logo": "https://matcofoods.com/frontend-assets/img/logo.png",
          "sameAs": [
            "https://www.facebook.com/matcofoods/",
            "https://www.instagram.com/matcofoods/",
            "https://www.linkedin.com/company/matco-foods/",
            "https://www.youtube.com/c/FalakRiceChannel"
          ]
        }
    </script>
    {{-- canonical --}}
    <link rel="canonical" href="https://matcofoods.com/" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/select2.min.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    @include('layouts.inc.header')

    <section class="home-section">
        {{ $slot }}
    </section>

    @include('layouts.inc.footer')

    <!-- Scripts -->
    <script src="{{ asset('frontend-assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/app.js') }}"></script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

    @yield('afterScripts')

</body>

</html>
