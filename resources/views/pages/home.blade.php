@extends('master')

@section('content')
    <section class="d-md-none">
        <div class="ah-container">
            <div class="search-form-mobile">
                @include('partials.search', ['id_suffix' => '_mobile'])
            </div>
        </div>
    </section>

    <section class="home-banner-section">
        <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h2 fw-bold mb-15">Dallas Black Car Service</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Book reliable black car transportation for airport transfers, corporate travel, and special events across Dallas-Fort Worth. Our licensed chauffeurs are available 24/7, ensuring punctual pickups and a smooth, stress-free ride to DFW Airport, Love Field, and beyond.</p>
                     
                        <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                            Call Now: <a href="tel:+14699612047" class="mx-2 fw-bold font-lg theme-color">
+1 469-961-2047</a>
                        </p>
                    </div>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <!-- Booking Form -->
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="luxury-cars-section bg-gray pb-40 pb-sm-60 py-md-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-15 mb-sm-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Executive Fleet for <span class="theme-color br-css-tt">Comfort and Privacy</span></h2>
                    <p class="font-md mb-0 justify-mobile">Our fleet supports clients who rely on professional black car and <a href="/services/chauffeur-service-dallas/" class="theme-color"><b>chauffeur service for airport transfers</b></a>, corporate transportation, VIP travel, and group movement. Executive sedans are ideal for individual travelers and business schedules, luxury and premium SUVs provide added space and privacy for airport and VIP travel, and Sprinter vans accommodate corporate teams and group transfers. Every vehicle is professionally chauffeured, commercially insured, and maintained to consistent executive standards for a quiet, reliable experience.</p>
                </div>
            </div>
            @include('partials.fleet_grid')
        </div>
    </section>

    <section class="fifa-main-banner" style="background-image: url('https://dallasblackcarslimoservice.com/img/dallas-fifa-world-cup-black-car-service.webp'); background-position: center top; background-size: cover; background-repeat: no-repeat; min-height: 210px;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-12 h-100">
                  <a href="/fifa-world-cup-2026-car-service-dallas/" class="d-block w-100 h-100"> </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fifa-btnss text-center my-4">
                    <a href="/fifa-world-cup-2026-car-service-dallas/" class="btn btn-primary">Visit FIFA World Cup 2026 Page</a>
                </div>
            </div>
        </div>
    </div>

    <section class="detail-content-section pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                    <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Why Choose <span class="theme-color br-css-tt"> Dallas Black Limo Service</span></h2>
                    <p class="font-md">Executives trust us for trained chauffeurs, <a href="/services/airport-transfers-dallas/"><b>on-time airport transfers</b></a>, and consistently reliable black car service across Dallas.</p>
                </div>
            </div>
            <div class="row py-20">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('/img/black-car-service-dallas-mobile.webp') }}" width="100%" height="auto" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50 justify-mobile">
                    <h3 class="h5 fw-semibold">Why Executives Choose Dallas Black Car Service</h3>
                    <p class="font-md">Built for executives, corporate teams, and VIP travelers who need transportation done right, without excuses or guesswork.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Professional Chauffeurs You Can Trust:</strong> Our chauffeurs are background-checked, professionally trained, and chosen for executive travel experience. Every ride delivers consistent service, discretion, and polished professionalism.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Clean, Modern Vehicles Every Time:</strong> Late-model sedans, luxury SUVs, and executive vans are kept clean, comfortable, and presentable through scheduled inspections – never outdated, never improvised.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Airport Pickups That Match Your Flight:</strong> We use live flight tracking, smart buffer timing, and route monitoring to protect schedules at DFW and Love Field – even with early landings or long delays.
                            </p>
                        </li>

                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Easy Planning for Corporate Travel:</strong> Designed for executive assistants and <a href="/services/private-car-service-in-dallas/"><b>corporate planners managing meetings</b></a>, airport travel, roadshows, and multi-stop schedules without surprises.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('/img/black-car-service-dallas.webp') }}" width="100%" height="auto" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse py-20 d-none d-md-flex">
                <div class="col-12 col-md-6 pr-xl">
                     <h2 class="h2 fw-bold mb-10">Areas <span class="theme-color home-heading-style home-heading-style">We Serve</span></h2>
                    <p class="font-md">Executive black car service built around how professionals actually move across Dallas–Fort Worth.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Dallas Corporate Hub:</strong> Downtown, Uptown, and key business districts where executive travel demands precision timing and professional presentation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Airport-First Coverage:</strong> Daily operations to and from <a href="/airports/dfw-car-service/" class="theme-color"><b>DFW International Airport</b></a> and Dallas Love Field with flight-aware dispatch and schedule protection.
                            </p>
                        </li>
                        
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Fort Worth & Arlington:</strong> Reliable chauffeured transportation for conventions, corporate meetings, and professional events.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Major Event & Sports Venues:</strong> Coordinated arrivals and departures at AT&T Stadium, American Airlines Center, Globe Life Field, and Cotton Bowl Stadium.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">City-to-City Travel Across DFW:</strong> Chauffeur-driven service designed for multi-stop itineraries, executive schedules, and regional travel consistency.
                            </p>
                        </li>
                    </ul>
                </div>
                
                <div class="col-12 col-md-6 h-100 d-none d-md-flex">
                    <div class="only-d">
                        <img loading="lazy" decoding="async" src="{{ asset('/img/dallas-limo-service.webp') }}" width="100%" height="auto" class="img-fluid" alt="Black car service Dallas city transportation">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 h-100 d-none d-md-flex">
                    <div class="only-m">
                        <img loading="lazy" decoding="async" src="{{ asset('/img/dallas-limo-service-mobile.webp') }}" width="100%" height="auto" class="img-fluid" alt="Black car service Dallas city transportation">
                    </div>
                </div>
                
                
            </div>

            <div class="container">
                <div class="row align-items-center flex-row-reverse py-20 d-md-none justify-mobile">
                    <div class="col-12 col-md-6 pr-xl">
                         <h2 class="h2 fw-bold mb-10">Areas <span class="theme-color">We Serve</span></h2>
                        <p class="font-md">Executive black car service built around how professionals actually move across Dallas–Fort Worth.</p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Dallas Corporate Hub:</strong> Downtown, Uptown, and key business districts where executive travel demands precision timing and professional presentation.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Airport-First Coverage:</strong> Daily operations to and from <a href="/airports/dfw-car-service/" class="theme-color"><b>DFW International Airport</b></a> and Dallas Love Field with flight-aware dispatch and schedule protection.
                                </p>
                            </li>
                            
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Fort Worth & Arlington:</strong> Reliable chauffeured transportation for conventions, corporate meetings, and professional events.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Major Event & Sports Venues:</strong> Coordinated arrivals and departures at AT&T Stadium, American Airlines Center, Globe Life Field, and Cotton Bowl Stadium.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">City-to-City Travel Across DFW:</strong> Chauffeur-driven service designed for multi-stop itineraries, executive schedules, and regional travel consistency.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="bg-gray pt-40 pb-15 justify-mobile">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                     <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Our <span class="theme-color">Services</span></h2>
                    <p class="font-md">Professional black car and chauffeur services designed for executives, corporate teams, and VIP travelers across the Dallas Fort Worth Metroplex. Every service is built around reliability, control, and accountability – never improvisation.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/services/private-aviation-dallas/" class=" mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/private-aviation.webp') }}" alt="Executive black SUV transportation Dallas" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/services/private-aviation-dallas/">Private Aviation & FBO Transportation</a></h3>
                        <p class="font-base">Discreet chauffeur service for private aviation passengers, providing seamless ground transportation to and from Dallas-area FBOs, including Signature Flight Support. Designed for privacy, precision timing, and executive-level professionalism.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/airports/dfw-car-service/" class=" mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/airport-transfers.webp') }}" alt="Black car service Dallas airport transfer" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/airports/dfw-car-service/">Executive Airport Transfers (DFW & DAL)</a></h3>
                        <p class="font-base">Flight-aware black car service for executives and frequent flyers, with monitored pickups, buffer-time dispatching, and professional chauffeurs ensuring on-time arrivals and stress-free departures at Dallas Fort Worth International Airport and Dallas Love Field.
                        </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/airports/dallas-executive-airport-car-service/" class=" mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/corporate-transportation.webp') }}" alt="DFW Airport black car service pickup" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/services/corporate-transportation-dallas/">Corporate & Executive Transportation</a></h3>
                        <p class="font-base">Reliable corporate black car service for meetings, roadshows, client transportation, and daily executive travel throughout Dallas business districts. Ideal for executives, executive assistants, and corporate travel coordinators who require consistency and accountability.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-none d-sm-block">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/fifa-world-cup-2026-car-service-dallas/" class=" mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/sports-and-entertainment-venues.webp') }}" alt="Premium black sedan with chauffeur in Dallas" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/fifa-world-cup-2026-car-service-dallas/">VIP Events & Sports Transportation</a></h3>
                        <p class="font-base">Professional black car service for executives and VIP guests attending high-profile events and major sports venues, including AT&T Stadium, American Airlines Center, Globe Life Field, Toyota Stadium, and Dos Equis Pavilion.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-none d-none d-lg-block">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/services/private-car-service-in-dallas/" class=" mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/hourly-as-directed.webp') }}" alt="Premium car service serving Dallas" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/services/private-car-service-in-dallas/">Hourly Black Car Service</a></h3>
                        <p class="font-base">Flexible, as-directed chauffeur service for executives who need control over their schedule. Perfect for multi-stop itineraries, extended meetings, site visits, and on-demand transportation with a dedicated professional chauffeur.
                        </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-none d-none d-lg-block">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/services/corporate-transportation-dallas/" class=" mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/corporate-shuttle-service.webp') }}" alt="Executive black car service Dallas area" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/services/corporate-transportation-dallas/">Corporate Shuttle Service</a></h3>
                        <p class="font-base">Scheduled and on-demand corporate shuttle transportation for employees, meetings, conferences, and client movement. Designed for reliability, punctuality, and professional presentation managed with the same standards as executive-level service.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="h4 fw-semibold mb-20">
                        <span class="theme-color">Reliable Corporate Black Car Service Across </span> <br>Dallas–Fort Worth
                    </h4>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Reserve Chauffeur Service Now</a>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-40 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-white home-heading-style">The Smarter Choice for Corporate Transportation</h2>
                    <p class="font-md justify-mobile">Professional black car service in Dallas for executives and executive assistants who require punctual pickups, transparent pricing, and zero uncertainty. Every ride is professionally chauffeured, actively monitored by dispatch, and backed by contingency planning for business-critical travel to DFW, Love Field, and across Dallas.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Booking"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Upfront Corporate Pricing</h3>
                        <p class="font-md text-white"> Flat, pre-set rates with no surge fees or hidden charges -<b> clear invoicing designed for corporate travel approvals and expense reporting.</b></p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/car-steering.svg') }}" alt="Confirmation"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Career Chauffeurs</h3>
                        <p class="font-md text-white"> Professionally trained, background-checked chauffeurs with <b>dedicated executive and airport transfer experience</b>, selected for discretion, punctuality, and consistency.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/dimond.svg') }}" alt="Driver"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Executive-Grade Fleet</h3>
                        <p class="font-md text-white">Late-model sedans and luxury SUVs maintained on a <b>scheduled inspection cycle</b> for quiet comfort, clean presentation, and reliable business travel.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
  <section class="intercity-ride-section bg-gray pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Top Cities & <span class="theme-color">Top Routes</span></h2>
                    <p class="font-md justify-mobile">Travel across Dallas and nearby cities effortlessly. From busy routes to
                        airport pickups and event destinations, our professional chauffeurs ensure every ride is
                        seamless, comfortable, and tailored to your schedule.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-austin-car-service">
                         
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/austin.webp') }}" alt="Top City" class="img-fluid">
                       
                       <div class="city-details position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Austin
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">195 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 54m</p>
                             </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-houston-car-service/">
                        
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/houston.webp') }}" alt="Top City" class="img-fluid">
                       
                       <div class="city-details position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Houston
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">239 miles &nbsp;&nbsp;|&nbsp;&nbsp; 3 hr 28 min</p>
                             </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/city-to-city-ride/dallas-to-college-station/">
                        
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/college-station.webp') }}" alt="Top City" class="img-fluid">
                    
                  <div class="city-details position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Colleg Station
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">181 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2 hr 49 min</p>
                             </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-oklahoma-city-ok/">
                        
                            <img loading="lazy" width="416" height="199" decoding="async" src="{{ asset('assets/new_theme/img/oklahoma-city.webp') }}"
                                alt="Top City" class="img-fluid">
                        
                      <div class="city-details position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Oklahoma City
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">206 miles &nbsp;&nbsp;|&nbsp;&nbsp; 3 hr 10 min</p>
                             </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-tyler-car-service">
                       
                            <img loading="lazy" width="416" height="199" decoding="async" src="{{ asset('assets/new_theme/img/tyler.webp') }}"
                                alt="Top City" class="img-fluid">
                  
                      <div class="city-details position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Tyler
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">98.9 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1 hr 50 min</p>
                             </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dfw-to-waco-car-service">
                         
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/waco.webp') }}" alt="Top City" class="img-fluid">
                
                       <div class="city-details position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Waco
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">93.8 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1 hr 27 min</p>
                             </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonial-section bg-blue py-40">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-10">
                    <h2 class="h2 fw-bold text-white home-heading-style">Trusted by Corporate Teams and Executive Assistants</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <p class="font-lg fw-medium text-center text-white">
                                           As an executive assistant, I need airport transportation frequently. Flights are tracked and drivers arrive on time always, making them my first choice.
                                        </p>
                                    </blockquote>
                                    <cite class="name fw-semibold font-lg text-center d-block text-white"> - Emily Carter, Executive Assistant</cite>
                                    <span class="location fw-semibold font-lg text-center d-block">Dallas, TX</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <p class="font-lg fw-medium text-center text-white">
                                            We use them every week for Dallas area corporate travel, including airport runs. Same standards every ride – no surprises, no follow-ups.
                                        </p>
                                    </blockquote>
                                    <cite class="name fw-semibold font-lg text-center d-block text-white"> - James Sasser, Managing Partner</cite>
                                    <span class="location fw-semibold font-lg text-center d-block">Fort Worth, TX</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <p class="font-lg fw-medium text-center text-white">
                                            Early departures or delayed arrivals – they adjust without calls or confusion, which is why we trust them for executive transportation in Dallas.
                                        </p>
                                    </blockquote>
                                    <cite class="name fw-semibold font-lg text-center d-block text-white">- David Ramirez, VP of Operations</cite>
                                    <span class="location fw-semibold font-lg text-center d-block">Plano, TX</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <p class="font-lg fw-medium text-center text-white">
                                           We booked a car from DAL to Plano for a client visit. The pickup was on time, the driver was professional, and everything went exactly as scheduled.
                                        </p>
                                    </blockquote>
                                    <cite class="name fw-semibold font-lg text-center d-block text-white">- Michael Turner, Corporate Client</cite>
                                    <span class="location fw-semibold font-lg text-center d-block">Dallas, TX</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <p class="font-lg fw-medium text-center text-white">
                                        We booked a car for a family ride with our 16 month old. The driver was professional, and the ride felt safe and comfortable throughout.
                                        </p>
                                    </blockquote>
                                    <cite class="name fw-semibold font-lg text-center d-block text-white">- Rachel Moore</cite>
                                    <span class="location fw-semibold font-lg text-center d-block">New York City, NY</span>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <p class="font-lg fw-medium text-center text-white">
                                          It was my first time in Dallas, and I booked their service for a game at AT&T Stadium. The ride was comfortable, and getting around was completely stress-free.
                                        </p>
                                    </blockquote>
                                    <cite class="name fw-semibold font-lg text-center d-block text-white">- David Ramirez, Amelia C.</cite>
                                    <span class="location fw-semibold font-lg text-center d-block">Philadelphia, PA</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="detail-content-section bg-gray py-40 py-sm-50 py-md-50 py-lg-40 seciononeheading">
        <div class="ah-container">
            
            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers-mobile.webp" class="img-fluid" alt="luxury black car service in Dallas Texas with professional chauffeur">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Premier Black Car Service for DFW & Love Field Airport Transfers</h3>
                    <p class="font-base text-justify">Airport travel should always be comfortable, reliable, and hassle-free. Our premium black car service for DFW Airport and Dallas Love Field Airport offers timely, professional, and luxury transportation throughout the Dallas–Fort Worth region. Whether you’re heading to DFW International Airport or Dallas Love Field (DAL), our skilled chauffeurs ensure prompt pickups, smooth routes, and a first-class travel experience.

At Dallas Limo and Black Cars, we provide high-end sedans, executive SUVs, and spacious vehicles tailored for comfort, privacy, and convenience. Our <a href="/services/private-car-service-in-dallas/"><b>airport black car service in Dallas</b></a> is perfect for business travelers, families, and corporate clients seeking dependable transportation.

We track flight schedules in real-time to ensure accurate pickups and drop-offs without delays. Covering Downtown Dallas, Plano, Frisco, Irving, McKinney, and the entire DFW metroplex, we guarantee safe, private, and luxury airport transportation every time.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Reliable Airport Car Service Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers.webp" class="img-fluid" alt="premium Dallas limo and black car airport transfer service">
                    </div>
                </div>
            </div>
 
            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service-mobile.webp" class="img-fluid" alt="DFW airport black car service luxury chauffeur pickup">
                    </div>
                </div>
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Luxury Executive Corporate Travel with Professional Chauffeur Service</h3>
                    <p class="font-base text-justify">For professionals who prioritize timeliness, comfort, and dependability, our executive corporate travel service with professional chauffeurs delivers a premium transportation experience across the Dallas–Fort Worth area. At Dallas Limo and Black Cars, we provide top-tier <a href="/services/corporate-transportation-dallas/"><b>corporate black car services in Dallas</b></a>, offering luxury vehicles and highly trained chauffeurs committed to excellence.

Our corporate transportation service is perfect for business meetings, executive travel, corporate events, airport transfers, and VIP client services. Whether you require transportation for an individual executive or an entire team, our fleet of luxury sedans and executive SUVs ensures a smooth, private, and efficient journey.

Our experienced chauffeurs focus on punctuality, professionalism, and discretion, making us a reliable partner for corporate travel. Serving Dallas, Plano, Frisco, Irving, Richardson, and the wider DFW metroplex, we help business professionals travel with confidence while maintaining a refined and professional image.
</p>
                    <a href="/get-a-quote/" class="btn btn-primary sm fw-medium fifa-btn-full">Get Corporate Travel Quote Now</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service.webp" class="img-fluid" alt="luxury chauffeur service for business meetings Dallas">
                    </div>
                </div>
            </div>
               <div class="py-20 row align-items-center">
                  <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas-mobile.webp" class="img-fluid" alt="luxury sedan black car service Dallas Texas">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Private City-to-City Black Car Service from Dallas</h3>
                    <p class="font-base text-justify">Enjoy a comfortable and hassle-free journey between cities with our private city-to-city black car service from Dallas, tailored for travelers who seek luxury, privacy, and dependable long-distance transportation. At Dallas Limo and Black Cars, we offer <a href="/services/chauffeur-service-dallas/"><b>professional chauffeur services</b></a> for passengers looking for smooth and stress-free travel between Dallas and nearby cities across Texas and the DFW metroplex.

Our Dallas city-to-city transportation service is perfect for business professionals, families, and individuals who prefer a more comfortable alternative to flights or rideshare options. Whether you’re traveling from Dallas to Austin, Houston, Fort Worth, Plano, Frisco, McKinney, or surrounding areas, our premium vehicles ensure a safe and relaxing ride.

With a fleet of luxury sedans and executive SUVs, we provide exceptional comfort, privacy, and convenience for long-distance travel. Our experienced chauffeurs and reliable door-to-door service guarantee a seamless and dependable travel experience every time.</p>
                  <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Your City-to-City Ride Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas.webp" class="img-fluid" alt="stretch limousine service Dallas Texas luxury limo ride">
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    
    <section class="py-40">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                 
                <div class="col-12 col-md-6">
                    <h5 class="h2 fw-bold seciononeheading">Finest Corporate Travel Experience</h5>
                    
                    <p class="font-md">Our Dallas Black Car Service delivers a high-end transportation solution tailored for business professionals who prioritize punctuality, comfort, and reliability. Whether you're traveling to corporate meetings, conferences, business events, or airport transfers, our experienced chauffeurs ensure a seamless and stress-free journey throughout the Dallas–Fort Worth area.</p>
                    <ul class="list-unstyled custom-unorder-list no-bullets pr-lg-80 mb-20 mb-md-0">
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">Highly professional chauffeurs trained for executive travel.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">Premium luxury vehicles designed for comfort and style.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                               On-time service for meetings, events, and airport transfers.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                                Safe, private, and hassle-free transportation experience.</p>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <form id="corporate-support-form" class="news-letter-form mx-auto me-md-0 px-15 py-25" action="{{ route('corporate_support_post') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <h3 class="font-md fw-bold mb-0">Need Corporate Support?</h3>
                            <p class="font-sm">Fill out the form and our team will take care of the rest</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="full_name" class="form-label mb-1 fw-medium">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" id="full_name" placeholder="" value="{{ old('full_name') }}" required>
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="Email" class="form-label mb-1 fw-medium">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="Email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-15">
                                <label for="contact_no" class="form-label mb-1 fw-medium">Contact No</label>
                                <input id="contact_no" name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-15">
                                <label for="message" class="form-label mb-1 fw-medium">Message</label>
                                <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray pt-40 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Chosen by People at <span class="theme-color br-css-tt">Top Companies</span></h2>
                    <p class="font-md justify-mobile">Executives rely on our black car service Dallas for on-time, comfortable transportation that keeps their schedules on track, making business trips and corporate events effortless and stress-free.</p>
                </div>
                <div class="col-12">
                    <div class="companies-logo-marquee">
                        <div class="companies-logo-track">
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                            <div class="py-10 px-15">
                                <span class="">
                                    <img loading="lazy" width="90" height="60" decoding="async"
                                        src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="Logo" class="img-fluid">
                                </span>
                            </div>
                            @endforeach
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                            <div class="py-10 px-15">
                                <span class="">
                                    <img loading="lazy" width="90" height="60" decoding="async"
                                        src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="" class="img-fluid">
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="h4 fw-semibold mb-20">
                        <span class="theme-color">Luxury Transportation for</span> <br>Business, Events & VIP Travel
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Ride in Minutes</a>
                </div>
            </div>
        </div>
    </div>

    <section class="faqs-section py-40">
        <div class="container">
            <div class="row">
                 <div class="col-12 text-center mb-20">
                    <h2 class="h2 fw-bold home-heading-style home-heading-style">Frequently Asked <span class="theme-color br-css-tt">Questions</span></h2>
                </div>
            </div>
            <div class="row" id="faqAccordion">
                <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                Do you provide FBO pickups (Signature, Atlantic, Million Air, etc.)?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide professional FBO pickup and drop-off service at all major private aviation terminals across Dallas–Fort Worth, including Signature Flight Support, Atlantic Aviation, and Million Air. Chauffeur arrivals are coordinated discreetly around flight timing and FBO protocols to ensure smooth, on-time transfers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Do you offer corporate accounts and monthly invoicing?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We offer corporate accounts with consolidated monthly invoicing for companies, executive assistants, and travel managers. Billing is itemized and structured for clear reporting, internal tracking, and ongoing executive travel throughout the Dallas–Fort Worth area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Do you offer hourly as-directed service for executives and roadshows?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide hourly as-directed black car service for executives and roadshows, supporting flexible, multi-stop itineraries. Chauffeurs remain on standby while dispatch actively monitors timing and routing to support assistant-managed schedules, meetings, and investor roadshow logistics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingFour">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                How early will the driver arrive before my pickup time?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">For most Dallas–Fort Worth pickups, chauffeurs arrive 10–15 minutes early. This arrival buffer supports smooth loading, schedule protection, and reliable on-time departures for airport transfers, corporate meetings, and executive appointments.</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingFive">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Can I request a specific driver?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. You may request a preferred chauffeur when available, particularly for recurring corporate travel or airport transportation in Dallas–Fort Worth. Advance requests help maintain consistency, familiarity, and efficient pickups for executives and executive assistants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingSix">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Do you offer VIP airport service for executives?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide VIP airport service at Dallas Fort Worth International Airport and Dallas Love Field. Service includes discreet coordination, real-time flight monitoring, and schedule-focused handling designed for senior executives and visiting leaders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingSeven">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                How much wait time is included for DFW airport pickups?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Included wait time depends on your reservation type and arrival details. Grace periods are designed to accommodate deplaning and baggage claim at DFW, with trips monitored in real time to support smooth coordination in the event of early arrivals or delays.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingEight">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                                Do you provide round-trip service to AT&T Stadium?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide round-trip chauffeur service to major Dallas–Fort Worth venues, including AT&T Stadium. Drop-off and return pickup planning is coordinated in advance to simplify arrival, post-event departures, and overall event transportation logistics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="h4 fw-semibold mb-20">
                       Arrive With Confidence <br><span class="theme-color">Book Your Chauffeur Now</span>
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Chauffeur Today</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
(function () {
    @if (session('corporate_support_success'))
    Swal.fire({
        title: 'Success!',
        text: @json(session('corporate_support_success')),
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then(function (result) {
        if (result.isConfirmed) {
            var f = document.getElementById('corporate-support-form');
            if (f) f.reset();
        }
    });
    @endif

    @if (session('corporate_support_error'))
    Swal.fire({
        title: 'Error',
        text: @json(session('corporate_support_error')),
        icon: 'error',
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
    @endif

    @if ($errors->any())
    Swal.fire({
        title: 'Please check the form',
        html: @json('<ul class="text-start mb-0 small">' . collect($errors->all())->map(function ($m) {
            return '<li>' . e($m) . '</li>';
        })->implode('') . '</ul>'),
        icon: 'error',
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
    @endif
})();
</script>
@endsection
