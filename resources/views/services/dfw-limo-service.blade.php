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
        <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
            style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">

            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content"
                    class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center"
                    style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h1 fw-bold mb-15">Limousine Service Dallas</h1>
                    <p class="mb-0 text-white font-lg fw-medium justify-class">
                        Limousine service Dallas for airport transfers, chauffeur service, corporate transportation, executive shuttle services, luxury van rental, and private car service airport travel. Ride with professional chauffeurs and luxury vehicles for Addison Airport (ADS), Dallas/Fort Worth Airport (DFW), Dallas Love Field Airport (DAL), business meetings, hotel pickups, and special events across Dallas.
                    </p>
                    <p class="text-white font-md d-flex align-items-center">
                        Call Now:
                        <a href="tel:+14699612047" class="mx-2 fw-bold font-lg theme-color text-underline">+1 469-961-2047</a>
                    </p>
                </div>

                <div class="d-none col-12 col-md-6 d-md-block"
                    style="pointer-events: auto; position: relative; z-index: 2;">
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-20 detail-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                    <h2 class="mb-10 text-center h2 fw-bold">
                        Why Choose <span class="theme-color br-css-tt">Dallas Black Limo Service</span>
                    </h2>
                    <p class="font-md justify-mobile">
                        Business travelers, airport passengers, and local clients choose us for dependable limousine service in Dallas, professional chauffeurs, and luxury transportation tailored to every trip.
                    </p>
                </div>
            </div>

            <div class="py-20 row">
                <div class="col-12 col-md-8 pr-xl-50">
               

                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Professional Chauffeurs for Every Ride:</strong>
                                Every trip is handled by an experienced, courteous chauffeur focused on punctual pickups, smooth travel, and reliable limousine service in Dallas.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Airport Transportation With On-Time Service:</strong>
                                We provide dependable service to and from DFW Airport, Dallas Love Field, and Addison Airport for arrivals, departures, and private aviation travel.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Luxury Vehicles for Business and Personal Travel:</strong>
                                Our fleet includes clean, comfortable luxury sedans, SUVs, executive transportation options, and luxury van rental service for groups and families.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Ideal for Corporate and Executive Transportation:</strong>
                                From corporate transportation and executive shuttle services to client pickups and hotel transfers, our service is designed for comfort, privacy, and professionalism.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Transparent Rates With No Hidden Fees:</strong>
                                Pricing is confirmed upfront so you can plan airport transfers, chauffeur service, and luxury transportation in Dallas with confidence.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong>Consistent Luxury Service Across Dallas:</strong>
                                Whether you need a private car service airport transfer or full-day limousine service in Dallas, every booking follows the same professional standard of care.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async"
                            src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}"
                            width="406" height="233" class="img-fluid"
                            alt="Limousine service Dallas with professional chauffeur">
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
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers-mobile.webp" class="img-fluid" alt="DFW limo service airport luxury black car">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">DFW Limo Service for Airport Transfers to DFW & Love Field</h3>
                    <p class="font-base text-justify">Our DFW limo service provides reliable and luxury transportation for travelers heading to and from DFW Airport and Dallas Love Field Airport. Whether you are arriving in the Dallas–Fort Worth area or planning your departure, we ensure timely pickups, smooth routes, and a stress-free travel experience. Serving key locations such as Irving, Grapevine, Plano, and Downtown Dallas, our airport limo service is designed for both business and leisure travelers who value comfort and punctuality.

With real-time flight tracking and professional chauffeurs, we adjust schedules based on delays or early arrivals, ensuring seamless coordination every time. Our fleet of luxury sedans and executive SUVs offers privacy, comfort, and reliability for every journey. For dependable airport transportation, explore our <a href="/airports/dfw-car-service/"><b>DFW airport car service</b></a> and enjoy a premium limo experience.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book DFW Limo Service</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers.webp" class="img-fluid" alt="DFW limo luxury transportation Dallas Texas">
                    </div>
                </div>
            </div>
 
            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service-mobile.webp" class="img-fluid" alt="DFW executive limo service corporate travel">
                    </div>
                </div>
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Executive DFW Limo Service for Business and Corporate Travel</h3>
                    <p class="font-base text-justify">Our executive DFW limo service is tailored for business professionals and corporate clients who require punctual, professional, and high-end transportation across the Dallas–Fort Worth metroplex. Whether you are attending meetings, corporate events, or hosting important clients, our chauffeur-driven limo service ensures a smooth and impressive travel experience. We cover major business hubs including Dallas, Plano, Frisco, Las Colinas, and Richardson.

Our fleet includes luxury sedans and executive SUVs designed to provide a comfortable and quiet environment for work or relaxation. Our experienced chauffeurs focus on professionalism, discretion, and time management, ensuring you always arrive on schedule. With flexible booking options and reliable service, we are a trusted partner for corporate transportation. Discover our <a href="/services/corporate-transportation-dallas/"><b>corporate transportation in Dallas</b></a> for complete business travel solutions.</p>
                    <a href="/get-a-quote/" class="btn btn-primary sm fw-medium fifa-btn-full">Get Executive Limo Quote</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service.webp" class="img-fluid" alt="DFW corporate limo chauffeur service">
                    </div>
                </div>
            </div>

            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas-mobile.webp" class="img-fluid" alt="DFW private limo service city to city travel">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Private DFW Limo Service for City and Long-Distance Travel</h3>
                    <p class="font-base text-justify">Our private DFW limo service offers a personalized and luxury transportation experience for individuals, families, and travelers who prefer comfort and privacy. Whether you need transportation within Dallas–Fort Worth or long-distance travel to nearby cities like Austin, Houston, or Fort Worth, our limo service provides a reliable and stress-free solution. We serve areas including Irving, Plano, McKinney, Arlington, and surrounding cities.

Unlike standard rideshare options, our limo service guarantees a dedicated vehicle, professional chauffeur, and flexible scheduling tailored to your needs. Our fleet is designed for both short and extended trips, offering maximum comfort, safety, and convenience. With a focus on customer satisfaction and premium service, we ensure every ride meets the highest standards. For more luxury travel options, visit our <a href="/services/private-car-service-in-dallas/"><b>private car service in Dallas</b></a> and experience top-tier transportation.</p>
                    <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Private Limo Ride</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas.webp" class="img-fluid" alt="DFW luxury limo service Texas">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="pt-50 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10">
                    <h2 class="mb-10 text-white h2 fw-bold">The Smarter Choice for Luxury Transportation in Dallas</h2>
                    <p class="font-md justify-mobile text-white">
                        Professional limousine service Dallas for airport travelers, executives, families, and private clients who need punctual pickups, transparent pricing, and dependable chauffeur service. Every ride is monitored for timing and routing to support smooth travel to DFW Airport, Love Field, Addison Airport, downtown Dallas, hotels, offices, and surrounding destinations.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Corporate Pricing"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Upfront Flat-Rate Pricing</h3>
                        <p class="text-white font-md">
                            Clear, pre-set pricing with no hidden fees —
                            <b>ideal for airport transfers, chauffeur service, corporate transportation, and private luxury travel planning.</b>
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/car-steering.svg') }}" alt="Career Chauffeurs"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Professional Chauffeurs</h3>
                        <p class="text-white font-md">
                            Experienced, background-checked chauffeurs with
                            <b>strong knowledge of Dallas routes, airport access, executive transportation, and private luxury service</b>,
                            selected for punctuality and consistency.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/dimond.svg') }}" alt="Managed Service"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Reliable Trip Management</h3>
                        <p class="text-white font-md">
                            Each booking is reviewed for timing, route planning, airport scheduling, and service reliability to reduce delays and keep every trip on schedule.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-25">
                        Where We <span class="theme-color">Serve</span>
                    </h2>
                    <p class="font-md">
                        Providing limousine service across Dallas and surrounding destinations.
                        Throughout the region our service covers:
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-05.jpg') }}"
                                alt="Limousine service Dallas and surrounding cities"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Cities &amp; Local Routes</a></h3>
                        <p class="font-base">
                            Service is available throughout Dallas, Fort Worth, Addison, Plano, Frisco, McKinney, Irving,
                            Arlington, Southlake, and surrounding destinations for private and executive travel.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-06.jpg') }}"
                                alt="Airport limousine service in Dallas"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Airports &amp; Aviation Access</a></h3>
                        <p class="font-base">
                            We serve Dallas/Fort Worth Airport, Dallas Love Field, Addison Airport, McKinney National
                            Airport, Fort Worth Alliance Airport, and private aviation terminals.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-07.jpg') }}"
                                alt="Corporate transportation and chauffeur service in Dallas"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Corporate &amp; Business Travel</a></h3>
                        <p class="font-base">
                            Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, major hotels,
                            business centers, convention venues, and office districts for executive transportation.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-08.jpg') }}"
                                alt="Luxury transportation for events and private airport service in Dallas"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Events &amp; Special Travel Needs</a></h3>
                        <p class="font-base">
                            Transportation is available for weddings, conventions, private events, family travel,
                            hotel transfers, luxury van rental, and other special transportation needs.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-50 pt-sm-60 pt-md-70 pt-lg-80 pb-30 pb-sm-40 pb-md-50 pb-lg-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-15 mb-md-20 mb-lg-30">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">
                        Chosen By People At <span class="theme-color">Top Companies</span>
                    </h2>
                    <p class="font-md">
                        Our limousine service in Dallas is trusted by professionals who depend on reliable, private, and well-managed luxury transportation.
                    </p>
                </div>

                <div class="col-12">
                    <div class="companies-logo-marquee">
                        <div class="companies-logo-track">
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                                <div class="py-10 px-15">
                                    <span class="img-holder">
                                        <img loading="lazy" width="90" height="60" decoding="async"
                                            src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}"
                                            alt="Company logo" class="img-fluid">
                                    </span>
                                </div>
                            @endforeach

                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                                <div class="py-10 px-15">
                                    <span class="img-holder">
                                        <img loading="lazy" width="90" height="60" decoding="async"
                                            src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}"
                                            alt="Company logo" class="img-fluid">
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="testimonial-section bg-blue py-40">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-10">
                <h2 class="h2 fw-bold text-white">Trusted by Business Travelers, Families, and Private Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-1e866948f743288f" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-3948px, 0px, 0px); transition-delay: 0ms;">
                        <div class="swiper-slide" style="width: 1296px; margin-right: 20px;" role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                       We booked limousine service in Dallas for an early DFW Airport transfer, and the chauffeur was punctual, professional, and easy to work with.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white"> - Emily Carter, Executive Assistant</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Dallas, TX</span>
                            </div>
                        </div>

                        <div class="swiper-slide" style="width: 1296px; margin-right: 20px;" role="group" aria-label="2 / 6" data-swiper-slide-index="1">
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                        We use them for corporate transportation in Dallas and executive airport pickups. The service is consistent, professional, and dependable every time.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white"> - James Sasser, Managing Partner</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Fort Worth, TX</span>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-prev" style="width: 1296px; margin-right: 20px;" role="group" aria-label="3 / 6" data-swiper-slide-index="2">
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                        Our travel schedule changed at the last minute, but the chauffeur adjusted without confusion. That reliability is why we use them for private transportation in Dallas.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- David Ramirez, VP of Operations</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Plano, TX</span>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-active" style="width: 1296px; margin-right: 20px;" role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                       We booked limousine service Dallas for a corporate client. The vehicle was spotless, the pickup was prompt, and the ride quality was excellent.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- Michael Turner, Corporate Client</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Dallas, TX</span>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-next" style="width: 1296px; margin-right: 20px;" role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                    We booked a luxury van rental for family airport transportation, and it was far more comfortable and easier than arranging multiple rides.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- Rachel Moore</cite>
                                <span class="location fw-semibold font-lg text-center d-block">New York City, NY</span>
                            </div>
                        </div>

                        <div class="swiper-slide" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 1296px; margin-right: 20px;">
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                      It was my first time booking a private car service airport ride in Dallas, and their chauffeur service made everything smooth and stress-free.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- David Ramirez, Amelia C.</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Philadelphia, PA</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1e866948f743288f"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1e866948f743288f"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>
</section>

    <section class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                    <div class="fifa-image-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/fifa-image.png') }}"
                            class="img-fluid" alt="FIFA Image">
                    </div>
                    <a href="{{ url('/fifa-world-cup-2026-car-service-dallas') }}"
                        class="btn btn-primary w-100 fw-medium text-capitalize">
                        Visit our FIFA World Cup 2026 page
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs-section py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold">Frequently Asked Questions</h2>
                </div>
            </div>

            <div class="row" id="faqAccordion">
                <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                What is limousine service Dallas?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Limousine service Dallas is <b>pre-booked private luxury transportation</b> with a professional chauffeur for airport transfers, corporate transportation, executive travel, events, and personal rides.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Do you provide airport limousine service in Dallas?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. We provide <b>airport transfers and private car service airport transportation</b> to and from Dallas/Fort Worth Airport, Dallas Love Field, Addison Airport, and other nearby aviation facilities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Is limousine service in Dallas good for business and corporate travel?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Our service is ideal for <b>corporate transportation, executive shuttle services, client pickups, meetings, hotel transfers, and professional chauffeur service</b> across Dallas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Do you offer luxury van rental in Dallas?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Many clients book our <b>luxury van rental service for airport groups, executive transportation, family travel, events, and private group rides</b> when comfort and space matter.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Can I book limousine service Dallas for one-way or round trips?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Limousine service can be arranged for <b>one-way trips, round trips, hourly chauffeur service, airport transfers, and extended private transportation needs</b>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Is limousine service suitable for families and private clients?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Many clients use limousine service for <b>family airport transportation, hotel pickups, special occasions, private events, and comfortable local or regional travel</b>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                How far in advance should I book limousine service in Dallas?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Advance booking is recommended for <b>airport transportation, executive travel, luxury van rental, corporate trips, and peak dates</b>, although same-day availability may be possible depending on schedule and vehicle demand.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button
                                class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                                How early does the chauffeur arrive for scheduled service?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    For most scheduled bookings, the chauffeur typically arrives <b>10–15 minutes early</b> to ensure the vehicle is ready and your ride begins on time.<br>
                                    For <b>airport pickups, executive transportation, or complex itineraries</b>, arrival timing may be adjusted based on location, traffic, or trip requirements.
                                </p>
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
                <div class="text-center col-12">
                    <h3 class="mb-20 h4 fw-semibold">
                        Travel in Comfort <br><span class="theme-color">Book Your Dallas Limousine Service Now</span>
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">
                        Book Your Limousine Service Today
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-gray py-30">
        <div class="container">
            <div class="flex-row-reverse row">
                <div class="col-12 col-md-5 mb-15 mb-md-0">
                    <ul class="gap-4 mb-0 list-unstyled footer-social-list d-flex justify-content-center justify-content-md-end">
                        <li>
                            <a href="#">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                    aria-label="Facebook logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>Facebook logo</title>
                                    <path d="M17 2v4h-2c-.7 0-1 .8-1 1.5V10h3v4h-3v8h-4v-8H7v-4h3V6a4 4 0 014-4h3z"
                                        fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                    aria-label="Instagram logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>Instagram logo</title>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8A5.8 5.8 0 012 16.2V7.8C2 4.6 4.6 2 7.8 2zm-.2 2A3.6 3.6 0 004 7.6v8.8A3.6 3.6 0 007.6 20h8.8a3.6 3.6 0 003.6-3.6V7.6A3.6 3.6 0 0016.4 4H7.6zm10.9 2.75a1.25 1.25 0 10-2.5 0 1.25 1.25 0 002.5 0zM12 7a5 5 0 110 10 5 5 0 010-10zm-3 5a3 3 0 116 0 3 3 0 01-6 0z"
                                        fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                    aria-label="YouTube logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>YouTube logo</title>
                                    <path
                                        d="M21.58 7.2a2.5 2.5 0 00-1.76-1.77C18.26 5 12 5 12 5s-6.26 0-7.83.41c-.84.23-1.53.92-1.76 1.78C2 8.76 2 12 2 12s0 3.26.41 4.8c.23.87.9 1.54 1.76 1.77C5.76 19 12 19 12 19s6.26 0 7.82-.41a2.5 2.5 0 001.76-1.76c.42-1.57.42-4.81.42-4.81s.01-3.26-.42-4.83zM10 15V9l5.2 3-5.2 3z"
                                        fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.21 2H21L14.01 10.2L22 22H15.99L11.13 15.37L5.5 22H2.74L10.14 13.26L2 2H8.13L12.48 8.09L18.21 2ZM16.34 20.33H18L7.73 3.49H5.94L16.34 20.33Z"
                                        fill="#97999E" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                    aria-label="TikTok logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>TikTok logo</title>
                                    <path
                                        d="M12.75 2h2.02c.15 1.2.84 2.32 1.94 3.04a5.2 5.2 0 002.8.82v2.02a7.1 7.1 0 01-4.74-1.78v7.26a5.37 5.37 0 11-5.37-5.37c.35 0 .7.04 1.03.12v2.2a3.36 3.36 0 00-1.03-.17 3.35 3.35 0 103.35 3.35V2z"
                                        fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="gap-2 col-12 col-md-7 d-flex justify-content-center justify-content-md-start align-items-start">
                    <svg class="mt-1" fill="#000000" width="20px" height="20px" viewBox="-4 0 32 32"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                        <path
                            d="M12.649,31.760 C12.463,31.919 12.231,31.999 12.000,31.999 C11.769,31.999 11.537,31.919 11.351,31.760 C10.887,31.365 0.000,21.976 0.000,11.964 C0.000,5.363 5.383,-0.006 12.000,-0.006 C18.617,-0.006 24.000,5.363 24.000,11.964 C24.000,21.976 13.113,31.365 12.649,31.760 ZM12.000,1.989 C6.486,1.989 2.000,6.464 2.000,11.964 C2.000,19.724 9.687,27.493 12.000,29.654 C14.312,27.493 22.000,19.724 22.000,11.964 C22.000,6.464 17.514,1.989 12.000,1.989 ZM12.000,17.991 C8.691,17.991 6.000,15.306 6.000,12.006 C6.000,8.705 8.691,6.021 12.000,6.021 C15.309,6.021 18.000,8.705 18.000,12.006 C18.000,15.306 15.309,17.991 12.000,17.991 ZM12.000,8.016 C9.794,8.016 8.000,9.805 8.000,12.006 C8.000,14.206 9.794,15.996 C12.000,15.996 C14.206,15.996 16.000,14.206 16.000,12.006 C16.000,9.805 14.206,8.016 12.000,8.016 Z"
                            fill="#97999E" />
                    </svg>
                    <address class="mb-0 font-md single-line-ellipses">
                        Dallas, Texas, United States, 75001
                    </address>
                </div>
            </div>
        </div>
    </section>
@endsection