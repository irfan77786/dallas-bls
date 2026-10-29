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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://maps.googleapis.com" crossorigin>

    {{-- Preload LCP hero image (responsive) --}}
    <link rel="preload" as="image" href="{{ asset('assets/new_theme/img/banner-1-mobile.webp') }}"
        media="(max-width: 767px)" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('assets/new_theme/img/banner-1.webp') }}"
        media="(min-width: 768px)" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('assets/new_theme/img/logo.webp') }}" type="image/webp">

    {{-- Critical CSS only (render path) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    {{-- Non-critical CSS: load async so they don't block first paint --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material-datetimepicker.css') }}" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"
        media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material-datetimepicker.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </noscript>

    <!-- Page banner responsive styles (matches home screen design) -->
    <style>
        /* Responsive LCP hero — class only so pages with custom #hero banners stay intact */
        .hero-banner-container {
            background-image: url('{{ asset('assets/new_theme/img/banner-1-mobile.webp') }}') !important;
            background-size: cover !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
        }

        @media (min-width: 768px) {
            .hero-banner-container {
                background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}') !important;
                min-height: 570px;
            }

            #home-text-content {
                margin-top: 130px;
            }

            .search-form-wrapper-desktop {
                position: absolute;
                width: 100%;
                z-index: 10;
            }
        }

        @media (max-width: 767px) {
            .home-banner-section {
                overflow-x: hidden;
                max-width: 100%;
            }

            #hero-banner-container,
            .hero-banner-container {
                min-height: 300px !important;
                height: 300px !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                width: calc(100% - 36px) !important;
                max-width: calc(100% - 36px) !important;
                box-sizing: border-box !important;
            }

            #hero-banner-container .row,
            .hero-banner-container .row {
                width: 100%;
                max-width: 100%;
                margin: 0;
                justify-content: center !important;
                align-items: center !important;
            }

            #home-text-content,
            .banner-text-content {
                justify-content: center !important;
                align-items: center !important;
                text-align: center !important;
                max-width: 100%;
            }

            #home-text-content h1,
            .banner-text-content h1 {
                text-align: center !important;
                white-space: normal !important;
                max-width: 100%;
            }
        }

        /* Companies logo marquee - horizontal auto-scroll */
        .companies-logo-marquee {
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
        }
        .companies-logo-track {
            display: flex;
            align-items: center;
            width: max-content;
            animation: companies-logo-scroll 25s linear infinite;
        }
        @keyframes companies-logo-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .companies-logo-marquee .img-holder {
            display: flex;
            justify-content: center;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
            flex-shrink: 0;
        }
        .companies-logo-marquee .img-holder img {
            height: 60px;
            max-width: 90px;
            object-fit: contain;
            object-position: center;
        }
    </style>

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
                                alt="DALLAS LIMOS AND BLACK CAR SERVICE" class="img-fluid d-none d-md-block" fetchpriority="high" decoding="async">
                            
                            
                            <img src="{{ asset('img/dallas-black-limo-service-logo.webp') }}" width="200" height="72"
                                alt="DALLAS LIMOS AND BLACK CAR SERVICE" class="img-fluid d-md-none" fetchpriority="high" decoding="async">
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

    {{-- Single jQuery + booking/map logic (no duplicate DataTables / jQuery / custom.js) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/custom.js') }}?v={{ filemtime(public_path('assets/js/custom.js')) }}"></script>

    {{-- Maps async so it does not block parsing; callback needs custom.js already loaded --}}
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&libraries=places&loading=async&callback=initAutocomplete"
        async defer></script>

    <script src="{{ asset('assets/js/bootstrap-min.js') }}" defer></script>
    <script src="{{ asset('assets/js/swiper-min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" defer></script>
    <script src="{{ asset('assets/js/slick-min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment.min.js" defer></script>
    <script src="{{ asset('assets/js/bootstrap-material-datetimepicker.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom_new.js') }}?v={{ filemtime(public_path('assets/js/custom_new.js')) }}"
        defer></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-D87H3B4PXN');
        const originalWarn = console.warn;
        console.warn = function(msg, ...args) {
            if (typeof msg === 'string' && (msg.includes('google.maps.places.PlacesService') || msg.includes('google.maps.places.AutocompleteService') || msg.includes('google.maps.Marker'))) {
                return;
            }
            originalWarn.apply(console, [msg, ...args]);
        };
    </script>
    @yield('scripts')
</body>

</html>