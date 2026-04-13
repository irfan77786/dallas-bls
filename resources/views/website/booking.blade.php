@extends('master')

@section('content')
    <section class="home-banner-section">
        <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="h1 fw-bold text-white mb-15">Book Your Dallas Black Car Service</h1>
                    <p class="font-lg fw-medium text-white mb-0 justify-class">Reserve your luxury black car service in Dallas–Fort Worth with confidence. Whether you need airport transportation, corporate travel, event transfers, or private chauffeur service, our booking process is quick, secure, and designed for a smooth travel experience.</p>
                    <p class="font-md text-white d-flex align-items-center mt-3">
                        Call Now: <a href="tel:+14699612047" class="fw-bold font-lg theme-color mx-2 text-underline">+1 469-961-2047</a>
                    </p>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-content-section pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                    <h2 class="h2 fw-bold mb-10 text-center">Easy Online Booking for <span class="theme-color br-css-tt">Luxury Chauffeur Service in Dallas</span></h2>
                    <p class="font-md">Book your ride in minutes for <a href="/services/airport-transfers-dallas/"><b>airport transfers</b></a>, business travel, and private transportation across Dallas with comfort, reliability, and professional service.</p>
                </div>
            </div>
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50 justify-mobile">
                    <h3 class="h5 fw-semibold">Why Book With Our Dallas Black Car Service</h3>
                    <p class="font-md">Built for executives, corporate teams, travelers, and private clients who want a fast, simple, and dependable reservation experience.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li><p class="mb-0"><strong class="br-css-tts">Quick and Simple Reservations:</strong> Our booking process is easy to use, helping you reserve your chauffeur service in just a few steps.</p></li>
                        <li><p class="mb-0"><strong class="br-css-tts">Instant Booking Confidence:</strong> Receive clear trip details and reliable service for airport pickups, business rides, and private travel.</p></li>
                        <li><p class="mb-0"><strong class="br-css-tts">Scheduled Around Your Needs:</strong> Book in advance for DFW, Love Field, meetings, events, or hourly transportation with flexible planning.</p></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur">
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="pt-40 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-white">A Smooth and Reliable Booking Experience</h2>
                    <p class="font-md justify-mobile">Our Dallas black car booking experience is designed for clients who value speed, clarity, and professionalism. From selecting your ride to confirming your trip details, every reservation is handled with care to ensure dependable chauffeur service for airport transportation, corporate travel, and private bookings across Dallas.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/money.svg" alt="Booking" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Transparent Pricing</h3>
                        <p class="font-md text-white">Flat, pre-set rates with no hidden charges, giving you <b>clear pricing before you confirm your reservation.</b></p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/car-steering.svg" alt="Confirmation" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Fast Booking Confirmation</h3>
                        <p class="font-md text-white">Receive prompt confirmation and dependable scheduling for <b>airport transfers, business rides, and private chauffeur bookings.</b></p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/dimond.svg" alt="Driver" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Secure and Professional Service</h3>
                        <p class="font-md text-white">Every booking is backed by a professional team, a well-maintained fleet, and <b>service you can trust from reservation to drop-off.</b></p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    @include('partials.top-cities')
    @include('partials.testimonials')
    @include('partials.faq')
@endsection