<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}</title>
    <meta name="description"
        content="{{ $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas. Luxury transportation for airport transfers, corporate events, and special occasions.' }}">
    <meta name="keywords"
        content="{{ $seo['keywords'] ?? 'Dallas black car service, Dallas limo service, luxury car service Dallas, airport transportation Dallas' }}">
        <link rel="shortcut icon" href="/img/dallas-black-car-service-favicon.webp">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}">
    <meta property="og:description"
        content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
    <meta property="og:image" content="{{ $seo['og_image'] ?? asset('assets/new_theme/img/logo.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

<link rel="canonical" href="{{ url()->current() }}/" /> 

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="{{ $seo['og_title'] ?? $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}">
    <meta name="twitter:description"
        content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
    <meta name="twitter:image" content="{{ $seo['og_image'] ?? asset('assets/new_theme/img/logo.png') }}">
    @php
        $isHome = request()->is('/');
        $needsBookingPicker = request()->is('booking*') || request()->is('bookRide*') || request()->is('submit-passengerInfo*');
        // Swiper + intl-tel load lazily via custom_new.js (below-fold / on focus)
        $needsSwiper = $isHome || request()->is('about-us*') || request()->is('our-fleet*') || request()->is('services*') || request()->is('airports*') || request()->is('locations*') || request()->is('cities*') || request()->is('city-to-city*');
    @endphp

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="https://maps.googleapis.com">

    {{-- Preload ONLY the LCP hero for the matching viewport (no logo competition) --}}
    @if ($isHome)
    <link rel="preload" as="image" type="image/webp" href="{{ asset('assets/new_theme/img/banner-1-mobile.webp') }}" media="(max-width: 767px)" fetchpriority="high">
    <link rel="preload" as="image" type="image/webp" href="{{ asset('assets/new_theme/img/banner-1.webp') }}" media="(min-width: 768px)" fetchpriority="high">
    @endif

    {{-- Critical above-the-fold CSS (keeps paint fast while full CSS loads async) --}}
    <style>
        *,*::before,*::after{box-sizing:border-box}
        body{margin:0;min-width:320px;font-family:Inter,system-ui,-apple-system,sans-serif;color:#6e7070;font-size:1rem;line-height:24px;background:#fff}
        a{color:#e52c43;text-decoration:none}
        img{max-width:100%;height:auto;vertical-align:middle}
        h1,h2,h3,.h1,.h2,.h3{color:#0b1422;font-family:"Plus Jakarta Sans",Inter,sans-serif;margin-top:0}
        .container{width:100%;padding-right:12px;padding-left:12px;margin-right:auto;margin-left:auto}
        @media(min-width:576px){.container{max-width:540px}}
        @media(min-width:768px){.container{max-width:720px}}
        @media(min-width:992px){.container{max-width:960px}}
        @media(min-width:1200px){.container{max-width:1140px}}
        .row{display:flex;flex-wrap:wrap;margin-right:-12px;margin-left:-12px}
        .row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:12px;padding-left:12px}
        .col-6{flex:0 0 auto;width:50%}.col-12{flex:0 0 auto;width:100%}
        @media(min-width:768px){.col-md-3{flex:0 0 auto;width:25%}.col-md-6{flex:0 0 auto;width:50%}.col-md-9{flex:0 0 auto;width:75%}.d-md-none{display:none!important}.d-md-block{display:block!important}}
        .d-none{display:none!important}.d-flex{display:flex!important}.align-items-center{align-items:center!important}.justify-content-end{justify-content:flex-end!important}.justify-content-center{justify-content:center!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.w-100{width:100%!important}.h-100{height:100%!important}.p-0{padding:0!important}.m-0{margin:0!important}.mb-0{margin-bottom:0!important}.mb-15{margin-bottom:15px}.fw-bold{font-weight:700!important}.fw-semibold{font-weight:600!important}.text-white{color:#fff!important}.text-center{text-align:center!important}.img-fluid{max-width:100%;height:auto}
        .py-15{padding-top:15px;padding-bottom:15px}
        header{background:#fff;position:relative;z-index:30;min-height:72px}
        header>.container{position:relative}
        .logo{max-width:77%;line-height:0}
        @media(min-width:992px){.logo{max-width:180px}}
        @media(min-width:1200px){.logo{max-width:200px}}
        .logo img{border-radius:0!important;width:auto;max-width:100%;height:auto;display:block}
        .ah-container{padding-left:18px!important;padding-right:18px!important}
        .ms-auto{margin-left:auto!important}
        .list-unstyled{list-style:none;padding-left:0}
        .text-dark{color:#0b1422!important}
        .text-decoration-none{text-decoration:none!important}
        .d-inline-flex{display:inline-flex!important}
        .gap-2{gap:.5rem}
        /* Header navbar — match final styles so async CSS does not flash */
        .custom-navbar.navbar{display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-end;position:static;padding:0}
        .custom-navbar .navbar-toggler{
            display:inline-flex;align-items:center;justify-content:center;
            border:0;border-radius:6px;cursor:pointer;
            background:linear-gradient(90deg,#e52c43,#ff6c00);
            padding:6px 10px;line-height:1
        }
        .custom-navbar .navbar-toggler:focus{outline:none;box-shadow:none}
        .custom-navbar .navbar-toggler svg{display:block}
        .custom-navbar .navbar-collapse{display:none!important;flex-basis:100%;flex-grow:1;align-items:center}
        .custom-navbar .navbar-collapse.show{display:block!important}
        .custom-navbar .navbar-nav{display:flex;flex-direction:column;list-style:none;margin:0;padding:5px 0;width:100%}
        .custom-navbar .nav-item{margin:0}
        .custom-navbar .nav-link{display:block;padding:5px 10px;color:#0b1422;font-weight:600;text-decoration:none}
        .custom-navbar .dropdown-menu{
            display:none!important;list-style:none;margin:0;padding:0;
            position:static;background:#fff;border:0;box-shadow:none
        }
        @media(max-width:991.98px){
            .custom-navbar .navbar-collapse.show{
                display:block!important;position:absolute;top:100%;left:0;z-index:21;
                padding:15px 12px 0;width:100%
            }
            .custom-navbar .navbar-collapse.show .navbar-nav{
                background:#fff;box-shadow:0 3px 5px rgba(0,0,0,.5);
                border-radius:0 0 5px 5px;overflow:hidden;padding:5px 0
            }
            .custom-navbar .navbar-collapse.show .dropdown-menu.show{
                display:block!important;opacity:1;visibility:visible;max-height:200px
            }
        }
        @media(min-width:992px){
            .custom-navbar.navbar-expand-lg .navbar-toggler{display:none!important}
            .custom-navbar.navbar-expand-lg .navbar-collapse{
                display:flex!important;flex-basis:auto;flex-grow:0;width:auto!important;
                position:static;padding:0
            }
            .custom-navbar .navbar-nav{
                flex-direction:row;flex-wrap:nowrap;align-items:center;
                width:auto;padding:0;font-size:.9375rem;background:transparent;box-shadow:none
            }
            .custom-navbar .navbar-nav .nav-item{margin-right:9px;position:relative}
            .custom-navbar .navbar-nav .nav-item>.nav-link{
                color:#0d0d0c;position:relative;padding:15px 5px;white-space:nowrap
            }
            .custom-navbar .navbar-nav .nav-item .dropdown-menu{
                display:block!important;position:absolute;right:0;top:100%;left:auto;
                width:240px;padding:0;margin:0;z-index:1000;
                background:#fff;border:1px solid #e6e6e6;border-radius:8px;
                box-shadow:0 3px 6px rgba(0,0,0,.3);overflow:hidden;font-size:.875rem;
                opacity:0;visibility:hidden;pointer-events:none;transform:translateY(20px)
            }
            .custom-navbar .navbar-nav .nav-item:hover>.dropdown-menu{
                opacity:1;visibility:visible;pointer-events:auto;transform:translateY(0)
            }
            .custom-navbar .dropdown-item{
                display:block;padding:6px 10px;color:#0b1422;font-weight:600;text-decoration:none
            }
        }
        @media(min-width:1400px){
            .custom-navbar .navbar-nav{font-size:1rem}
            .custom-navbar .navbar-nav .nav-item{margin-right:20px}
        }
        .search-form-mobile{position:relative;z-index:20;background:#fff;width:100%}
        .search-tab-wrap{background:#fff;border-radius:8px;box-shadow:0 0 4px #6e6e6e;padding:30px 50px;width:100%;max-width:450px;margin:auto;position:relative}
        .search-tab-wrap>.nav-tabs{display:flex;list-style:none;margin:0;padding:0 0 8px;border-bottom:none;position:relative;justify-content:start}
        .search-tab-wrap .nav-tabs .nav-item{flex:1}
        .search-tab-wrap .nav-tabs .nav-link{display:block;text-align:center;border:none!important;color:#232323!important;font-size:12px!important;font-weight:600;padding:8px 12px!important;text-decoration:none;border-bottom:2px solid transparent!important}
        .search-tab-wrap .nav-tabs .nav-link.active{color:#e52c43!important}
        .search-tab-wrap .nav-tabs::after{content:"";position:absolute;left:0;bottom:0;width:50%;height:2px;background:#e52c43}
        .search-tab-wrap .nav-tabs.hourly-active::after{left:50%}
        .tab-content>.tab-pane{display:none}.tab-content>.active{display:block}
        .search-form-box{margin-top:20px!important}
        .floating-bordered-input{position:relative;border:1px solid #c4c4c4;border-radius:4px;padding:0 6px 0 40px;background:#fff;margin-bottom:1.5rem}
        .floating-bordered-input .floating-label{position:absolute;top:-13px;left:7px;background:#fff;padding:0 4px 3px;font-size:10px;color:#3c3b3b}
        .floating-bordered-input .form-control{border:none!important;box-shadow:none!important;width:100%;padding:10px 0 12px;min-height:46px;font-size:16px;background:transparent}
        .floating-bordered-input .input-icon-left{position:absolute;left:12px;top:50%;transform:translateY(-50%);pointer-events:none}
        .form-control{display:block;width:100%;font-size:16px}
        @media(max-width:767px){
            .search-tab-wrap{padding:30px 1px!important;float:none!important;margin:0 auto!important;width:100%!important;max-width:100%!important;box-shadow:none!important}
            .home-banner-section{overflow-x:hidden;max-width:100%;margin-top:0!important}
            #hero-banner-container,.hero-banner-container{min-height:300px!important;height:300px!important;display:flex!important;align-items:center!important;justify-content:center!important;width:calc(100% - 36px)!important;max-width:calc(100% - 36px)!important;box-sizing:border-box!important;margin-left:18px!important;margin-right:18px!important;padding-top:25px!important;padding-bottom:0!important}
            #hero-banner-container .row,.hero-banner-container .row{width:100%;margin:0;justify-content:center!important;align-items:center!important}
            #home-text-content,.banner-text-content{justify-content:center!important;align-items:center!important;text-align:center!important}
            #home-text-content h1,.banner-text-content h1{text-align:center!important;white-space:normal!important;font-size:37px;line-height:normal;margin-bottom:10px}
            #home-text-content p,#home-text-content a{display:none!important}
        }
        .hero-banner-container{position:relative;overflow:hidden;background-color:#000}
        /* Inner pages: CSS bg only when no LCP <img> (home uses picture/img instead) */
        .hero-banner-container:not(:has(.hero-lcp-img)){
            background-image:url('{{ asset('assets/new_theme/img/banner-1-mobile.webp') }}');
            background-size:cover;background-position:center center;background-repeat:no-repeat
        }
        .hero-banner-container .hero-lcp-img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;pointer-events:none;opacity:.3}
        .home-banner-section .hero-banner-container:not(:has(.hero-lcp-img))::after,.home-banner-section .ah-container:not(:has(.hero-lcp-img))::after{position:absolute;content:"";inset:0;background:rgba(0,0,0,.7);z-index:1;pointer-events:none}
        .hero-banner-container:has(.hero-lcp-img)::after,.hero-banner-overlay{display:none!important}
        /* Keep banner text/form above the dark shade (::after); !important beats inline z-index:0 */
        #hero-banner-container>.row,
        .hero-banner-container>.row,
        .home-banner-section .ah-container>.row{position:relative;z-index:2!important}
        #hero-banner-container #home-text-content,
        .hero-banner-container #home-text-content,
        .home-banner-section .banner-text-content{position:relative;z-index:2!important}
        .hero-banner-container>#map{position:absolute!important;inset:0;width:100%!important;height:100%!important;z-index:1!important}
        .hero-banner-container.map-active .hero-lcp-img{opacity:0!important}
        .hero-banner-container.map-active::after{display:none!important}
        @media(min-width:768px){
            .hero-banner-container{min-height:570px}
            .hero-banner-container:not(:has(.hero-lcp-img)){background-image:url('{{ asset('assets/new_theme/img/banner-1.webp') }}')}
            .home-banner-section,.home-banner-section #hero-banner-container.ah-container,.home-banner-section .hero-banner-container.ah-container{max-width:100%!important;width:100%!important;margin-left:0!important;margin-right:0!important}
            #home-text-content{margin-top:130px}
            .search-form-wrapper-desktop{position:absolute;width:100%;z-index:10}
            .py-lg-20{padding-top:7px;padding-bottom:4px}
        }
        .companies-logo-marquee{overflow:hidden;mask-image:linear-gradient(to right,transparent,black 5%,black 95%,transparent);-webkit-mask-image:linear-gradient(to right,transparent,black 5%,black 95%,transparent)}
        .companies-logo-track{display:flex;align-items:center;width:max-content;animation:companies-logo-scroll 25s linear infinite}
        @keyframes companies-logo-scroll{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
        .companies-logo-marquee .img-holder{display:flex;justify-content:center;padding:30px;border-radius:20px;box-shadow:0 5px 8px rgba(0,0,0,.3);flex-shrink:0}
        .companies-logo-marquee .img-holder img{height:60px;max-width:90px;object-fit:contain}
        .bg-gray{background-color:#f4f6f8}.bg-blue{background:#000}
        .theme-color{background:linear-gradient(90deg,#e52c43,#ff6c00);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
    </style>

    {{-- Full theme CSS: non-blocking (was ~276KB render-blocking) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}?v={{ filemtime(public_path('assets/css/custom.css')) }}" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    </noscript>

    {{-- Non-critical CSS (async) --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        media="print" onload="this.media='all'">
    @if ($needsBookingPicker)
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material-datetimepicker.css') }}" media="print" onload="this.media='all'">
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </noscript>

    @yield('styles')
</head>

<body>
    @php
    $hideHeaderItems = request()->is('booking/point-to-point')
    || request()->is('booking/point-to-point/*')
    || request()->is('user-login/*/*')
    || request()->is('submit-passengerInfo')
    || request()->is('submit-passengerInfo/*')
    || request()->is('bookRide');
    @endphp
    <header class="py-15 py-lg-20">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-md-3">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/new_theme/img/logo.webp') }}" width="200" height="72"
                                alt="DALLAS LIMOS AND BLACK CAR SERVICE" class="img-fluid d-none d-md-block" decoding="async" loading="eager" fetchpriority="low">
                            <img src="{{ asset('img/dallas-black-limo-service-logo.webp') }}" width="200" height="72"
                                alt="DALLAS LIMOS AND BLACK CAR SERVICE" class="img-fluid d-md-none" decoding="async" loading="eager" fetchpriority="low">
                        </a>
                    </div>
                </div>
                @if($hideHeaderItems)
                <div class="col-6 col-lg-9 d-flex align-items-center justify-content-end">
                    <a href="tel:+14699612047"
                        class="text-dark fw-semibold text-decoration-none d-inline-flex align-items-center gap-2">
                        <i class="fa-solid fa-phone"></i>
                        <span>+1 469-961-2047</span>
                    </a>
                </div>
                @else
                <div class="col-6 col-md-9">
                    <nav class="custom-navbar navbar navbar-expand-lg p-0 position-static">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}"
                                        href="/about-us">About us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}"
                                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Our Service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/services/airport-transfers-dallas">Airport
                                                Transfers</a></li>
                                        <li><a class="dropdown-item" href="/services/chauffeur-service-dallas">Chauffeur
                                                Service</a></li>
                                        <li><a class="dropdown-item"
                                                href="/services/corporate-transportation-dallas">Corporate
                                                Transportation</a></li>
                                        <li><a class="dropdown-item"
                                                href="/services/executive-shuttle-services-dallas">Executive
                                                shuttle
                                                services</a></li>
                                        <li><a class="dropdown-item" href="/services/luxury-van-rental-dallas">Luxury
                                                van
                                                rental</a></li>
                                        <li><a class="dropdown-item"
                                                href="/services/private-car-service-in-dallas">Private
                                                car
                                                service</a></li>
                                        <li><a class="dropdown-item" href="/services/private-aviation-dallas">Private
                                                Aviation/FBO</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('booking') ? 'active' : '' }}"
                                        href="/booking">Book
                                        Now</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('our-fleet') ? 'active' : '' }}"
                                        href="/our-fleet">Our
                                        Fleet</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHelp" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Help
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownHelp">
                                        <li><a class="dropdown-item" href="/get-a-quote">Get a
                                                quote</a></li>
                                        <li><a class="dropdown-item" href="/contact-us">Contact
                                                us</a></li>
                                        {{-- <li><a class="dropdown-item" href="/faqs">FAQs</a></li> --}}
                                        <li><a class="dropdown-item" href="/terms-and-conditions">Terms
                                                &
                                                Conditions</a></li>
                                        <li><a class="dropdown-item" href="/privacy-policy">Privacy
                                                Policy</a></li>
                                        <li><a class="dropdown-item" href="/cancellation-policy">Cancellation
                                                Policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer bg-blue">
        <!-- pt-md-50 pb-md-20 py-lg-50 -->
        <div class="pt-40 pb-10">
            <div class="container">
                <div class="row footer-nav-list">
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Company</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="/booking">Book Now</a></li>
                            <li><a href="/contact-us">Contact us</a></li>
                            <li><a href="/our-fleet">Our Fleet</a></li>
                            <li><a href="/get-a-quote">Get A Quote</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Our Service</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/services/airport-transfers-dallas">Airport
                                    Transfers</a></li>
                            <li><a href="/services/chauffeur-service-dallas">Chauffeur
                                    Service</a></li>
                            <li><a href="/services/private-car-service-in-dallas">Private
                                    car service</a></li>
                            <li><a href="/services/luxury-van-rental-dallas">Luxury Sprinter
                                    Service</a></li>
                            <li><a href="/city-to-city-rides">City-to-city-rides</a>
                            </li>
                            <li><a href="/limousine-service-dallas">Limousine
                                    service</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Top Cities</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/texas/black-car-service-allen-tx">Allen</a>
                            </li>
                            <li><a href="/">Dallas</a></li>
                            <li><a href="/texas/black-car-service-fort-worth-tx">Fort
                                    Worth</a></li>
                            <li><a href="/texas/black-car-service-frisco-tx">Frisco</a>
                            </li>
                            <li><a href="/texas/black-car-service-college-station-tx">College Station</a>
                            </li>
                            <li><a href="/texas/black-car-service-oklahoma-city-ok">OKC</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">City-to-City Rides</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/dallas-to-austin-car-service">Dallas -
                                    Austin</a></li>
                            <li><a href="/dallas-to-houston-car-service">Dallas
                                    - Houston</a></li>
                            <li><a href="/city-to-city-ride/dallas-to-college-station">Dallas -
                                    College Station</a></li>
                            <li><a href="/dallas-to-oklahoma-city-ok">Dallas -
                                    OKC</a></li>
                            <li><a href="/dallas-to-tyler-car-service">Dallas -
                                    Tyler</a></li>
                            <li><a href="/dfw-to-waco-car-service">DFW - Waco</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Airports</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/airports/addison-airport-car-service">Addison
                                    Airport (ADS)</a></li>
                            <li><a href="/airports/dfw-car-service">Dallas/Fort Worth
                                    Airport (DFW)</a></li>
                            <li><a href="/airports/dallas-love-field-airport-car-service">Dallas
                                    Love Field Airport (DAL)</a></li>
                            <li><a href="/airports/dallas-executive-airport-car-service">Dallas Executive Airport (RBD)</a></li>
                            <li><a href="/airports/signature-flight-support-car-service">Signature
                                    Flight Support (DAL)</a></li>
                            <li><a href="/airports/waco-regional-airport-car-service/">Waco
                                    Regional Airport (ACT)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="t-policy">
            <div class="container py-20 c-policy">
                <a href="/cancellation-policy" class="last-p">Cancellation Policy</a>
                <a href="/terms-and-conditions"> - Terms &amp; Conditions</a>
                <a href="/privacy-policy"> - Privacy Policy</a>
            </div>
        </div>

        <div class="footer-area">
            <div class="container py-20">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-12 text-center">
                        <p class="font-sm mb-0"><a href="/">Dallas Black Limo Service</a> © 2026. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        window.APP_MAPS_KEY = @json(config('services.google_maps.api_key'));
        window.__LAZY_ASSETS = {
            swiperCss: @json(asset('assets/css/swiper-min.css')),
            swiperJs: @json(asset('assets/js/swiper-min.js')),
            intlCss: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css',
            intlJs: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js',
            intlUtils: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js',
            needsSwiper: @json((bool) $needsSwiper)
        };
    </script>

    {{-- Defer core JS so HTML/LCP are not blocked; Swiper + intl-tel lazy-loaded in custom_new.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}?v={{ filemtime(public_path('assets/js/custom.js')) }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap-min.js') }}" defer></script>
    @if ($needsBookingPicker)
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment.min.js" defer></script>
    <script src="{{ asset('assets/js/bootstrap-material-datetimepicker.js') }}" defer></script>
    @endif
    <script src="{{ asset('assets/js/custom_new.js') }}?v={{ filemtime(public_path('assets/js/custom_new.js')) }}" defer></script>

    {{-- Analytics after idle so it does not compete with LCP --}}
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        function loadGtag() {
            if (window.__gtagLoaded) return;
            window.__gtagLoaded = true;
            var s = document.createElement('script');
            s.src = 'https://www.googletagmanager.com/gtag/js?id=G-D87H3B4PXN';
            s.async = true;
            s.onload = function () {
                gtag('js', new Date());
                gtag('config', 'G-D87H3B4PXN', { send_page_view: true });
            };
            document.head.appendChild(s);
        }
        if ('requestIdleCallback' in window) {
            requestIdleCallback(loadGtag, { timeout: 4000 });
        } else {
            window.addEventListener('load', function () { setTimeout(loadGtag, 2000); });
        }
    </script>
    @stack('scripts')
    @yield('scripts')
</body>

</html>