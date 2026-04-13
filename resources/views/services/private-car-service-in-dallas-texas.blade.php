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
                    <h1 class="text-white h1 fw-bold mb-15">Private Car Service in Dallas</h1>
                    <p class="mb-0 text-white font-lg fw-medium justify-class">
                        Reliable private car service in Dallas for airport transfers, business travel, and everyday luxury transportation. Ride with professional drivers, clean black cars, and punctual service to DFW, Love Field, Addison Airport, and throughout the Dallas area.
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

<section class="luxury-cars-section bg-gray pb-40 pb-sm-60 py-md-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-15 mb-sm-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Executive Fleet for <span class="theme-color br-css-tt">Comfort and Privacy</span></h2>
                    <p class="font-md mb-0 justify-mobile">Our fleet supports clients who rely on professional black car and <a href="/services/chauffeur-service-dallas/" class="theme-color"><b>chauffeur service for airport transfers</b></a>, corporate transportation, VIP travel, and group movement. Executive sedans are ideal for individual travelers and business schedules, luxury and premium SUVs provide added space and privacy for airport and VIP travel, and Sprinter vans accommodate corporate teams and group transfers. Every vehicle is professionally chauffeured, commercially insured, and maintained to consistent executive standards for a quiet, reliable experience.</p>
                </div>
            </div>
            <div class="row luxury-cars-item-holder justify-content-center d-none d-md-flex">
    <div class="col-12 col-lg-3 px-30 px-sm-15">
        <article class="text-center luxury-cars-item mx-auto">
            <div class="img-holder mb-15">
                <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/Sedan.webp" alt="Black car service Dallas luxury sedan" class="img-fluid" width="750" height="410">
            </div>
            <h3 class="fw-semibold h6 mb-3">Premier Sadan</h3>
            <p class="font-base mb-2">Mercedes S550, BMW 750 or similar</p>
            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                        </path>
                    </svg>
                    max 3
                </li>
                <li class="px-2"></li>
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                        </path>
                    </svg>
                    max 3
                </li>
            </ul>
        </article>
    </div>
    <div class="col-12 col-lg-3 px-30 px-sm-15">
        <article class="text-center luxury-cars-item mx-auto">
            <div class="img-holder mb-15">
                <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/suv.webp" alt="Luxury SUV black car service Dallas" class="img-fluid" width="750" height="410">
            </div>
            <h3 class="fw-semibold h6 mb-3">Premier SUV</h3>
            <p class="font-base mb-2">Chevrolet Suburban or similar</p>
            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                        </path>
                    </svg>
                    max 6
                </li>
                <li class="px-2"></li>
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                        </path>
                    </svg>
                    max 6
                </li>
            </ul>
        </article>
    </div>
    <div class="col-12 col-lg-3 px-30 px-sm-15">
        <article class="text-center luxury-cars-item mx-auto">
            <div class="img-holder mb-15">
                <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/luxury-suv.webp" alt="Premium SUV black car service Dallas" class="img-fluid" width="750" height="410">
            </div>
            <h3 class="fw-semibold h6 mb-3">Luxury SUV</h3>
            <p class="font-base mb-2">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                        </path>
                    </svg>
                    max 6
                </li>
                <li class="px-2"></li>
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                        </path>
                    </svg>
                    max 6
                </li>
            </ul>
        </article>
    </div>
    <div class="col-12 col-lg-3 px-30 px-sm-15">
        <article class="text-center luxury-cars-item mx-auto">
            <div class="img-holder mb-15">
                <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/sprinter.webp" alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
            </div>
            <h3 class="fw-semibold h6 mb-3">Busniess Sprinter</h3>
            <p class="font-base mb-2">Mercedes benz Sprinter Van or similar</p>
            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                        </path>
                    </svg>
                    max 12
                </li>
                <li class="px-2"></li>
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                        </path>
                    </svg>
                    max 30
                </li>
            </ul>
        </article>
    </div>
    <div class="col-12 col-lg-3 px-30 px-sm-15">
        <article class="text-center luxury-cars-item mx-auto">
            <div class="img-holder mb-15">
                <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/mini-bus.webp" alt="Spacious black SUV for Dallas black car service" class="img-fluid" width="750" height="410">
            </div>
            <h3 class="fw-semibold h6 mb-3">Mini Bus</h3>
            <p class="font-base mb-2">24-Seater Mini Bus</p>
            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                        </path>
                    </svg>
                    max 24
                </li>
                <li class="px-2"></li>
                <li class="d-flex gap-2 align-items-center">
                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                        </path>
                    </svg>
                    max 20
                </li>
            </ul>
        </article>
    </div>
</div>
<div class="row d-md-none">
    <div class="col-12">
        <div class="luxury-cars-slider-holder">
            <div>
                <article class="text-center luxury-cars-slider-item mx-auto">
                    <div class="img-holder mb-15">
                        <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/Sedan.webp" alt="Black car service Dallas luxury sedan" class="img-fluid" width="750" height="410">
                    </div>
                    <h3 class="fw-semibold h5 mb-2">Premier Sadan</h3>
                    <p class="font-base mb-2">Mercedes S550, BMW 750 or similar</p>
                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                </path>
                            </svg>
                            max 3
                        </li>
                        <li class="px-2"></li>
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                </path>
                            </svg>
                            max 3
                        </li>
                    </ul>
                </article>
            </div>
            <div>
                <article class="text-center luxury-cars-slider-item mx-auto">
                    <div class="img-holder mb-15">
                        <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/suv.webp" alt="Luxury SUV black car service Dallas" class="img-fluid" width="750" height="410">
                    </div>
                    <h3 class="fw-semibold h5 mb-2">Premier SUV</h3>
                    <p class="font-base mb-2">Chevrolet Suburban or similar</p>
                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                </path>
                            </svg>
                            max 6
                        </li>
                        <li class="px-2"></li>
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                </path>
                            </svg>
                            max 6
                        </li>
                    </ul>
                </article>
            </div>
            <div>
                <article class="text-center luxury-cars-slider-item mx-auto">
                    <div class="img-holder mb-15">
                        <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/luxury-suv.webp" alt="Premium SUV black car service Dallas" class="img-fluid" width="750" height="410">
                    </div>
                    <h3 class="fw-semibold h5 mb-2">Luxury SUV</h3>
                    <p class="font-base mb-2">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                </path>
                            </svg>
                            max 6
                        </li>
                        <li class="px-2"></li>
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                </path>
                            </svg>
                            max 6
                        </li>
                    </ul>
                </article>
            </div>
            <div>
                <article class="text-center luxury-cars-slider-item mx-auto">
                    <div class="img-holder mb-15">
                        <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/sprinter.webp" alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                    </div>
                    <h3 class="fw-semibold h5 mb-2">Busniess Sprinter</h3>
                    <p class="font-base mb-2">Mercedes benz Sprinter Van or similar</p>
                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                </path>
                            </svg>
                            max 12
                        </li>
                        <li class="px-2"></li>
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                </path>
                            </svg>
                            max 20
                        </li>
                    </ul>
                </article>
            </div>
            <div>
                <article class="text-center luxury-cars-slider-item mx-auto">
                    <div class="img-holder mb-15">
                        <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/mini-bus.webp" alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                    </div>
                     <h3 class="fw-semibold h6 mb-3">Mini Bus</h3>
            <p class="font-base mb-2">24-Seater Mini Bus</p>
                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                </path>
                            </svg>
                            max 24
                        </li>
                        <li class="px-2"></li>
                        <li class="d-flex gap-2 align-items-center">
                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                </path>
                            </svg>
                            max 20
                        </li>
                    </ul>
                </article>
            </div>
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
                        Travelers, executives, and families choose us for dependable private car service, punctual airport transfers, and comfortable black car transportation across Dallas.
                    </p>
                </div>
            </div>

            <div class="py-20 row">
                <div class="col-12 col-md-8 pr-xl-50">
               

                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Professional Drivers for Every Ride:</strong>
                                Every ride is handled by a trained, courteous, and experienced driver focused on safe, smooth, and dependable private transportation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">On-Time Pickups Across Dallas:</strong>
                                We schedule each trip carefully, monitor local traffic, and plan routes in advance to help you arrive on time for flights, meetings, and events.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Clean, Comfortable Black Cars:</strong>
                                Our vehicles are cleaned and inspected regularly to provide a quiet, comfortable, and professional travel experience from pickup to drop-off.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Private and Stress-Free Transportation:</strong>
                                Enjoy direct, private rides without the delays, crowding, or uncertainty of taxis and rideshare services.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Transparent Rates With No Hidden Fees:</strong>
                                Pricing is confirmed upfront so you can book with confidence for airport travel, corporate transportation, and private city rides.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong>Consistent Quality on Every Booking:</strong>
                                From airport pickups to executive transfers, every private car service booking follows the same professional standard of care.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async"
                            src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}"
                            width="406" height="233" class="img-fluid"
                            alt="Private black car service in Dallas with professional driver">
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
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers-mobile.webp" class="img-fluid" alt="private car service Dallas DFW airport luxury transportation">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Private Car Service in Dallas for DFW Airport & Love Field Transfers</h3>
                    <p class="font-base text-justify">Our private car service in Dallas provides reliable and luxury transportation to and from DFW Airport and Dallas Love Field Airport, ensuring a smooth and stress-free travel experience. Whether you are traveling for business or leisure, we offer timely pickups, professional chauffeurs, and comfortable vehicles designed to meet your needs. Serving Dallas, Irving, Plano, Frisco, and the entire DFW metroplex, we make airport travel convenient and efficient.

With real-time flight tracking and experienced drivers, we adjust schedules based on delays or early arrivals, ensuring you are never left waiting. Our fleet includes premium sedans and executive SUVs that offer privacy, comfort, and reliability. Whether heading to DFW or Love Field, we deliver a seamless travel experience. For dependable airport transportation, explore our <a href="/airports/dfw-car-service/"><b>DFW airport car service</b></a> for premium travel solutions.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Private Car Now</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers.webp" class="img-fluid" alt="Dallas private car luxury chauffeur service">
                    </div>
                </div>
            </div>
 
            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service-mobile.webp" class="img-fluid" alt="private car service Dallas corporate travel luxury vehicle">
                    </div>
                </div>
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Professional Private Car Service in Dallas for Business and Daily Travel</h3>
                    <p class="font-base text-justify">Our professional private car service in Dallas is designed for individuals and business professionals who require reliable, comfortable, and high-quality transportation for daily travel. Whether you need a ride to meetings, corporate offices, events, or personal appointments, we provide a seamless and stress-free experience. We serve key areas including Downtown Dallas, Plano, Frisco, Richardson, and Las Colinas, ensuring smooth connectivity across the DFW region.

Our luxury fleet includes well-maintained sedans and SUVs that provide a quiet and comfortable environment for work or relaxation during your journey. Our experienced chauffeurs focus on punctuality, safety, and professionalism, ensuring you always arrive on time. With flexible scheduling and dependable service, we are a trusted choice for daily transportation needs. Learn more about our <a href="/services/corporate-transportation-dallas/"><b>corporate transportation in Dallas</b></a> for business travel solutions.</p>
                    <a href="/get-a-quote/" class="btn btn-primary sm fw-medium fifa-btn-full">Get Private Car Quote</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service.webp" class="img-fluid" alt="Dallas private chauffeur service executive car">
                    </div>
                </div>
            </div>

            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas-mobile.webp" class="img-fluid" alt="Dallas private car service long distance travel">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Luxury Private Car Service in Dallas for City and Long-Distance Travel</h3>
                    <p class="font-base text-justify">Our luxury private car service in Dallas offers a personalized and comfortable transportation solution for both city travel and long-distance journeys. Whether you need a ride within Dallas or are traveling to nearby cities like Fort Worth, Austin, Houston, or McKinney, we provide a reliable and hassle-free experience. We cover all major areas including Irving, Plano, Frisco, and surrounding cities across the DFW metroplex.

Unlike rideshare services, our private car service ensures a dedicated vehicle, professional chauffeur, and flexible scheduling tailored to your needs. Our premium sedans and SUVs are designed for maximum comfort, privacy, and safety for both short and extended trips. With a strong focus on customer satisfaction, we deliver a consistent and high-quality experience every time. To explore more premium travel options, visit our <a href="/services/chauffeur-service-dallas/"><b>chauffeur service in Dallas</b></a> for reliable luxury transportation.</p>
                    <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Luxury Car Service</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas.webp" class="img-fluid" alt="luxury private car Dallas Texas">
                    </div>
                </div>
            </div>
            
        </div>
    </section>
   
    <section class="pt-50 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10">
                    <h2 class="mb-10 text-white h2 fw-bold">The Smarter Choice for Private Transportation</h2>
                    <p class="font-md justify-mobile text-white">
                        Professional private car service in Dallas for airport travelers, executives, families, and visitors who need punctual pickups, transparent pricing, and dependable black car transportation. Every ride is monitored for timing and routing to support smooth travel to DFW, Love Field, Addison Airport, and destinations across Dallas.
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
                            <b>ideal for airport rides, business travel, and private transportation planning.</b>
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
                            <b>strong knowledge of Dallas routes, airport access, and professional customer care</b>,
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
                            Each booking is reviewed for timing, route planning, and service reliability to reduce delays and keep every trip on schedule.
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
                        Providing private car service across the Dallas–Fort Worth Metroplex.
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
                                alt="Private car service in Dallas neighborhoods and nearby cities"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Cities &amp; Regional Communities</a></h3>
                        <p class="font-base">
                            Service is available in Dallas, Fort Worth, Plano, Frisco, McKinney, Allen, Irving,
                            Arlington, Grapevine, Southlake, Addison, and surrounding areas across DFW.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-06.jpg') }}"
                                alt="Airport private car transportation in Dallas"
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
                                alt="Private black car for business and lifestyle travel in Dallas"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Corporate &amp; Lifestyle Zones</a></h3>
                        <p class="font-base">
                            Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, The Star (Frisco),
                            Preston Hollow, Highland Park, and major business districts.
                        </p>
                    </article>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="#" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/image-08.jpg') }}"
                                alt="Private car pickup service for airport and event transportation"
                                class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="#">Sports &amp; Entertainment Venues</a></h3>
                        <p class="font-base">
                            Transportation is available for AT&amp;T Stadium, Globe Life Field, American Airlines
                            Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.
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
                        Our private car service is trusted by professionals who depend on reliable and well-managed transportation.
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
                <h2 class="h2 fw-bold text-white">Trusted by Airport Travelers, Corporate Clients, and Families</h2>
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
                                       I book airport transportation often, and their private car service to DFW is always on time, clean, and easy to manage.
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
                                        We use them every week for Dallas corporate transportation and airport rides. The service is consistent, professional, and dependable every time.
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
                                        Our driver adjusted to a delayed arrival without any confusion. That reliability is why we use them for private airport transportation in Dallas.
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
                                       We booked a private car from Dallas Love Field to Plano for a client. The pickup was prompt, the vehicle was spotless, and the ride was excellent.
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
                                    We booked a car for a family airport ride with our toddler. The service felt safe, comfortable, and much easier than using a rideshare.
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
                                      It was my first time in Dallas, and I booked their private car service for a game at AT&amp;T Stadium. Everything was smooth and stress-free.
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
                                What is private car service in Dallas?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Private car service is <b>pre-booked, direct transportation</b> with a professional driver, offering a more reliable, comfortable, and private alternative to taxis or rideshare apps.
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
                                Do you provide private car service to DFW and Love Field?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. We provide <b>private airport car service</b> to and from DFW International Airport, Dallas Love Field, Addison Airport, and other aviation terminals in the Dallas area.
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
                                Is private car service billed hourly or by trip?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Private car service can be arranged as <b>point-to-point transportation or hourly service</b>, depending on your itinerary, schedule, and travel needs.
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
                                Is private car service good for business travel?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Private car service is a strong option for <b>executives, assistants, and corporate travelers</b> who need punctual pickups, professional drivers, and dependable transportation between meetings, hotels, and airports.
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
                                Can I book private car service for multiple stops?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Private car service can be arranged for <b>multiple stops, meetings, shopping, dinners, or extended transportation needs</b> based on your schedule.
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
                                Is private car service suitable for personal travel?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Yes. Many clients use private car service for <b>dinners, date nights, family airport rides, shopping trips, hotel transportation, and special events</b> when comfort and reliability matter.
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
                                How far in advance should I book private car service?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">
                                    Advance booking is recommended for <b>airport transfers, corporate travel, and peak dates</b>, although same-day availability may be possible depending on schedule and vehicle demand.
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
                                    For <b>airport pickups, executive travel, or complex itineraries</b>, arrival timing may be adjusted based on location, flight status, or trip requirements.
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
                        Ride in Comfort <br><span class="theme-color">Book Your Private Car Now</span>
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">
                        Book Your Private Car Today
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
                            d="M12.649,31.760 C12.463,31.919 12.231,31.999 12.000,31.999 C11.769,31.999 11.537,31.919 11.351,31.760 C10.887,31.365 0.000,21.976 0.000,11.964 C0.000,5.363 5.383,-0.006 12.000,-0.006 C18.617,-0.006 24.000,5.363 24.000,11.964 C24.000,21.976 13.113,31.365 12.649,31.760 ZM12.000,1.989 C6.486,1.989 2.000,6.464 2.000,11.964 C2.000,19.724 9.687,27.493 12.000,29.654 C14.312,27.493 22.000,19.724 22.000,11.964 C22.000,6.464 17.514,1.989 12.000,1.989 ZM12.000,17.991 C8.691,17.991 6.000,15.306 6.000,12.006 C6.000,8.705 8.691,6.021 12.000,6.021 C15.309,6.021 18.000,8.705 18.000,12.006 C18.000,15.306 15.309,17.991 12.000,17.991 ZM12.000,8.016 C9.794,8.016 8.000,9.805 8.000,12.006 C8.000,14.206 9.794,15.996 12.000,15.996 C14.206,15.996 16.000,14.206 16.000,12.006 C16.000,9.805 14.206,8.016 12.000,8.016 Z"
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