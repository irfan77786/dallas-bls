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
                    <h1 class="text-white h1 fw-bold mb-15">City to City Rides Service in Dallas</h1>
                    <p class="mb-0 text-white font-lg fw-medium justify-class">
                        City to city rides service in Dallas for airport transfers, business travel, family trips, and private long-distance transportation. Ride with professional drivers, clean luxury vehicles, and reliable service from Dallas to Fort Worth, Austin, Houston, and other nearby cities.
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
                        Travelers, executives, and families choose us for dependable city to city rides, comfortable long-distance travel, and professional private transportation from Dallas.
                    </p>
                </div>
            </div>

            <div class="py-20 row">
                <div class="col-12 col-md-8 pr-xl-50">
               

                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Professional Drivers for Long-Distance Travel:</strong>
                                Every ride is managed by an experienced, courteous driver focused on safe, smooth, and dependable city to city transportation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Direct Private Transportation Between Cities:</strong>
                                Our service provides private rides without unnecessary stops, delays, or the inconvenience of shared transportation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Comfortable, Clean Luxury Vehicles:</strong>
                                Vehicles are kept clean, quiet, and well-maintained to deliver a more relaxing experience on longer trips.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Ideal for Business, Airport, and Personal Travel:</strong>
                                City to city rides service is a practical solution for executive travel, airport connections, family trips, college transportation, and private out-of-town travel.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Transparent Rates With No Hidden Fees:</strong>
                                Pricing is confirmed upfront so you can plan long-distance transportation confidently for work trips, airport transfers, and personal rides.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong>Consistent Service on Every Booking:</strong>
                                From short regional routes to extended private travel, every city to city ride follows the same professional standard of care.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async"
                            src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}"
                            width="406" height="233" class="img-fluid"
                            alt="City to city rides service in Dallas with professional driver">
                    </div>
                </div>
            </div>
        </div>

       
    </section>

    <section class="bg-gray pt-50 pb-25 pb-md-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/dimond.svg') }}" alt="Booking"
                                class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Book Online or by Phone</h3>
                        <p class="font-md">Reserve your city to city rides service in Dallas using our booking form or by calling our team directly.</p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/icon-02.svg') }}" alt="Confirmation"
                                class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Receive Trip Confirmation</h3>
                        <p class="font-md">Get your driver, vehicle, and trip details by text or email before pickup.</p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/icon-01.svg') }}" alt="Driver"
                                class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Ride With a Professional Driver</h3>
                        <p class="font-md">Your driver arrives on time and provides smooth, professional city to city transportation from Dallas.</p>
                    </article>
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
                    <h3 class="h5 fw-semibold">Premier Black Car Service for DFW &amp; Love Field Airport Transfers</h3>
                    <p class="font-base text-justify">Airport travel should always be comfortable, reliable, and hassle-free. Our premium black car service for DFW Airport and Dallas Love Field Airport offers timely, professional, and luxury transportation throughout the Dallas–Fort Worth region. Whether you’re heading to DFW International Airport or Dallas Love Field (DAL), our skilled chauffeurs ensure prompt pickups, smooth routes, and a first-class travel experience.

At Dallas Black Limo Service, we provide high-end sedans, executive SUVs, and spacious vehicles tailored for comfort, privacy, and convenience. Our <a href="/services/private-car-service-in-dallas/"><b>airport black car service in Dallas</b></a> is perfect for business travelers, families, and corporate clients seeking dependable transportation.

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
                    <p class="font-base text-justify">For professionals who prioritize timeliness, comfort, and dependability, our executive corporate travel service with professional chauffeurs delivers a premium transportation experience across the Dallas–Fort Worth area. At Dallas Black Limo Service, we provide top-tier <a href="/services/corporate-transportation-dallas/"><b>corporate black car services in Dallas</b></a>, offering luxury vehicles and highly trained chauffeurs committed to excellence.

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
                    <p class="font-base text-justify">Enjoy a comfortable and hassle-free journey between cities with our private city-to-city black car service from Dallas, tailored for travelers who seek luxury, privacy, and dependable long-distance transportation. At Dallas Black Limo Service, we offer <a href="/services/chauffeur-service-dallas/"><b>professional chauffeur services</b></a> for passengers looking for smooth and stress-free travel between Dallas and nearby cities across Texas and the DFW metroplex.

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

    <section class="pt-50 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10">
                    <h2 class="mb-10 text-white h2 fw-bold">The Smarter Choice for Long-Distance Private Transportation</h2>
                    <p class="font-md justify-mobile text-white">
                        Professional city to city rides service in Dallas for airport travelers, executives, families, and private clients who need punctual pickups, transparent pricing, and dependable long-distance transportation. Every ride is monitored for timing and routing to support smooth travel from Dallas to Fort Worth, Austin, Houston, DFW, Love Field, Addison Airport, and surrounding cities.
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
                            <b>ideal for long-distance travel, airport transfers, and private city to city transportation planning.</b>
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
                        <h3 class="text-white h6 fw-semibold">Professional Drivers</h3>
                        <p class="text-white font-md">
                            Experienced, background-checked drivers with
                            <b>strong knowledge of Dallas routes, highway travel, airport access, and private transportation service</b>,
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
                            Each booking is reviewed for timing, route planning, and service reliability to reduce delays and keep every long-distance trip on schedule.
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
                        Providing city to city rides service across Dallas and surrounding regional destinations.
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
                                alt="City to city rides service from Dallas to nearby cities"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Cities &amp; Regional Routes</a></h3>
                        <p class="font-base">
                            Service is available from Dallas to Fort Worth, Austin, Houston, Waco, Arlington, Plano,
                            Frisco, McKinney, Irving, Southlake, Addison, and surrounding destinations across Texas.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-06.jpg') }}"
                                alt="Airport-connected city to city rides service in Dallas"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Airports &amp; Aviation Access</a></h3>
                        <p class="font-base">
                            We serve DFW International Airport, Dallas Love Field, Addison Airport, McKinney National
                            Airport, Fort Worth Alliance Airport, and private aviation terminals.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-07.jpg') }}"
                                alt="City to city business and private travel from Dallas"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Corporate &amp; Lifestyle Travel</a></h3>
                        <p class="font-base">
                            Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, major hotels,
                            medical districts, universities, business centers, and regional travel corridors.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-08.jpg') }}"
                                alt="Private long-distance transportation for events and airport service"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Events &amp; Special Travel Needs</a></h3>
                        <p class="font-base">
                            Transportation is available for conventions, family events, college travel, sporting events,
                            weddings, hotel transfers, and other private long-distance travel needs.
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
                        Our city to city rides service is trusted by professionals who depend on reliable and well-managed long-distance transportation.
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
                                       We booked a city to city ride from Dallas to Austin for a business meeting, and the trip was comfortable, punctual, and very easy to manage.
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
                                        We use them for regional corporate transportation between Dallas and Fort Worth. The service is consistent, professional, and dependable every time.
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
                                        Our travel schedule changed at the last minute, but the driver adjusted without confusion. That reliability is why we use them for city to city transportation from Dallas.
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
                                       We booked a city to city ride from Dallas to Houston for a client. The vehicle was spotless, the pickup was prompt, and the ride was excellent.
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
                                    We booked a private long-distance ride for a family trip, and it was far more comfortable and easier than driving ourselves.
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
                                      It was my first time traveling between Dallas and Fort Worth without renting a car, and their city to city rides service made everything smooth and stress-free.
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
                                What is city to city rides service in Dallas?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    City to city rides service is <b>pre-booked private long-distance transportation</b> with a professional driver, offering a more comfortable and dependable alternative to buses, trains, or driving yourself.
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
                                Do you provide city to city rides from Dallas to other Texas cities?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. We provide <b>private city to city transportation</b> from Dallas to Fort Worth, Austin, Houston, Waco, and other surrounding destinations based on your travel needs.
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
                                Is city to city rides service good for business and personal travel?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. City to city rides service is ideal for <b>business travelers, families, airport travelers, students, and private clients</b> who want direct, reliable, and comfortable long-distance transportation.
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
                                Can city to city rides be booked for airport connections?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Many clients use city to city rides for <b>airport-connected travel, regional transfers, hotel pickups, and private transportation to or from DFW, Love Field, and Addison Airport</b>.
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
                                Can I book city to city rides service for one-way or round trips?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. City to city rides service can be arranged for <b>one-way trips, round trips, multi-stop travel, airport transfers, and extended private transportation needs</b>.
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
                                Is city to city rides service suitable for family travel?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Many clients use city to city rides service for <b>family visits, college travel, airport transportation, special occasions, and private long-distance trips</b> when comfort and convenience matter.
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
                                How far in advance should I book city to city rides service?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Advance booking is recommended for <b>long-distance travel, airport schedules, corporate trips, and peak dates</b>, although same-day availability may be possible depending on schedule and vehicle demand.
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
                                How early does the driver arrive for scheduled service?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    For most scheduled bookings, the driver typically arrives <b>10–15 minutes early</b> to ensure the vehicle is ready and your trip begins on time.<br>
                                    For <b>airport pickups, long-distance travel, or complex itineraries</b>, arrival timing may be adjusted based on location, traffic, or trip requirements.
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
                        Travel in Comfort <br><span class="theme-color">Book Your City to City Ride Now</span>
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">
                        Book Your City to City Ride Today
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