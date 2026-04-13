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
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h1 fw-bold mb-15">Addison Airport Car Service</h1>
                    <p class="mb-0 text-white font-lg fw-medium justify-class">Our Addison Airport car service provides punctual, private, and professional airport transportation for executives, business travelers, and local residents across Dallas, Addison, Plano, Frisco, and nearby cities. Enjoy a refined black car experience with trained chauffeurs, luxury vehicles, and dependable airport service available day and night.</p>
                    <p class="text-white font-md d-flex align-items-center">
                        Call Now: <a href="tel:+14699612047" class="mx-2 fw-bold font-lg theme-color text-underline">+1 469-961-2047</a>
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

    <section class="pb-40 luxury-cars-section bg-gray pb-sm-60 py-md-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-15 mb-sm-25 mb-md-30 mb-lg-40">
                    <h2 class="mb-10 text-center h2 fw-bold">Airport Transportation Built <span class="theme-color br-css-tt">Around Executive Expectations</span></h2>
                    <p class="mb-0 font-md justify-mobile">Our airport fleet is built for travelers, executives, private aviation clients, and executive assistants who need reliable ground transportation without delays or uncertainty. Executive sedans offer a quiet, polished ride for solo travelers and corporate pickups, while premium SUVs provide additional passenger space and luggage capacity with an executive-ready presence. Sprinter vans and larger buses support coordinated group transfers, private aviation arrivals, and event transportation. Every vehicle is chauffeur-driven, professionally maintained, and selected for comfort and schedule awareness, helping travelers move smoothly to and from Addison Airport, Dallas business districts, and the surrounding DFW region.</p>
                </div>
            </div>
            <div class="row luxury-cars-item-holder justify-content-center d-none d-md-flex">
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="mx-auto text-center luxury-cars-item">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/Sedan.webp" alt="Black car service Dallas luxury sedan"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="mb-3 fw-semibold h6">Premier Sadan</h3>
                        <p class="mb-2 font-base">Mercedes S550, BMW 750 or similar</p>
                        <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                </svg>
                                max 3
                            </li>
                            <li class="px-2"></li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                    <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                </svg>
                                max 3
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="mx-auto text-center luxury-cars-item">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/suv.webp') }}" alt="Luxury SUV black car service Dallas"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="mb-3 fw-semibold h6">Premier SUV</h3>
                        <p class="mb-2 font-base">Chevrolet Suburban or similar</p>
                        <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                </svg>
                                max 6
                            </li>
                            <li class="px-2"></li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                    <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                </svg>
                                max 6
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="mx-auto text-center luxury-cars-item">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/luxury-suv.webp') }}" alt="Premium SUV black car service Dallas"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="mb-3 fw-semibold h6">Luxury SUV</h3>
                        <p class="mb-2 font-base">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                        <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                </svg>
                                max 6
                            </li>
                            <li class="px-2"></li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                    <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                </svg>
                                max 6
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="mx-auto text-center luxury-cars-item">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/sprinter.webp') }}" alt="Black SUV chauffeur service in Dallas"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="mb-3 fw-semibold h6">Busniess Sprinter</h3>
                        <p class="mb-2 font-base">Mercedes benz Sprinter Van or similar</p>
                        <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                </svg>
                                max 12
                            </li>
                            <li class="px-2"></li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                    <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                </svg>
                                max 30
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="mx-auto text-center luxury-cars-item">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/mini-bus.webp') }}" alt="Spacious black SUV for Dallas black car service"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="mb-3 fw-semibold h6">Mini Bus</h3>
                        <p class="mb-2 font-base">24-Seater Mini Bus</p>
                        <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                </svg>
                                max 24
                            </li>
                            <li class="px-2"></li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                    <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
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
                            <article class="mx-auto text-center luxury-cars-slider-item">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/sedan.webp') }}" alt="Black car service Dallas luxury sedan" class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="mb-2 fw-semibold h5">Premier Sadan</h3>
                                <p class="mb-2 font-base">Mercedes S550, BMW 750 or similar</p>
                                <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                        </svg>
                                        max 3
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                        </svg>
                                        max 3
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="mx-auto text-center luxury-cars-slider-item">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/suv.webp') }}" alt="Luxury SUV black car service Dallas" class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="mb-2 fw-semibold h5">Premier SUV</h3>
                                <p class="mb-2 font-base">Chevrolet Suburban or similar</p>
                                <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                        </svg>
                                        max 6
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                        </svg>
                                        max 6
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="mx-auto text-center luxury-cars-slider-item">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/luxury-suv.webp') }}" alt="Premium SUV black car service Dallas" class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="mb-2 fw-semibold h5">Luxury SUV</h3>
                                <p class="mb-2 font-base">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                                <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                        </svg>
                                        max 6
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                        </svg>
                                        max 6
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="mx-auto text-center luxury-cars-slider-item">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/sprinter.webp') }}" alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="mb-2 fw-semibold h5">Busniess Sprinter</h3>
                                <p class="mb-2 font-base">Mercedes benz Sprinter Van or similar</p>
                                <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                        </svg>
                                        max 12
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                        </svg>
                                        max 20
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="mx-auto text-center luxury-cars-slider-item">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/mini-bus.webp') }}" alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="mb-3 fw-semibold h6">Mini Bus</h3>
                                <p class="mb-2 font-base">24-Seater Mini Bus</p>
                                <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                        </svg>
                                        max 24
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="gap-2 d-flex align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
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
                    <h2 class="mb-10 text-center h2 fw-bold">Why Choose <span class="theme-color br-css-tt"> Dallas Black Limo Service</span></h2>
                    <p class="font-md justify-mobile">Our <a href="https://www.dallasblacklimoservice.com/services/airport-transfers-dallas/"><b>airport car service</b></a> is built for real airport logistics, not guesswork. Our Addison Airport transportation follows how private aviation, executive travel, and time-sensitive ground service actually work, with every ride monitored from dispatch to pickup and final drop-off.</p>
                </div>
            </div>
            <div class="py-20 row">
                <div class="col-12 col-md-8 pr-xl-50">
                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Professional Chauffeur Service:</strong> Experienced chauffeurs provide polished, discreet, and dependable transportation for airport pickups, departures, and executive travel throughout Addison and Dallas.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Private Airport Transfers:</strong> Our service is direct, comfortable, and reserved in advance, making it a stronger alternative to rideshare and last-minute transportation options.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Executive and Corporate Focus:</strong> We support business travelers, executives, private aviation passengers, and executive assistants who need consistent timing and professional presentation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Coverage Across Top Dallas Areas:</strong> We serve Addison, Dallas, Plano, Frisco, Allen, Irving, Richardson, and nearby cities with dependable airport transportation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Luxury Sedans and SUVs:</strong> Choose from executive sedans, premium SUVs, luxury SUVs, and group vehicles based on your comfort, luggage, and travel requirements.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Reliable Scheduling for Time-Sensitive Travel:</strong> Every reservation is managed with schedule awareness to support departures, arrivals, business meetings, and private aviation transfers.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray py-30 d-md-none">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12">
                        <div class="fifa-image-holder">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/fifa-image.png') }}" class="img-fluid" alt="FIFA Image" width="380" height="100%">
                        </div>
                        <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World Cup 2026 page</a>
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
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers-mobile.webp" class="img-fluid" alt="professional airport transfers Dallas luxury black car service">
                    </div>
                </div>

                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Addison Airport Car Service for Executives, Private Flyers, and Travelers Who Need Dependable Ground Transportation</h3>
                    <p class="font-base text-justify">Our Addison Airport Car Service is built for travelers who expect privacy, punctuality, and a professional experience from pickup to drop-off. Addison Airport serves a unique travel profile compared with commercial terminals, and that means transportation must be handled with more precision, stronger communication, and a higher level of service. We work with executives, private aviation passengers, corporate guests, and local travelers who need a polished ride to or from Addison Airport without depending on rideshare uncertainty. Whether you are heading to a hotel in Dallas, a meeting in Plano, an office in Frisco, or a residence in Allen, our chauffeurs provide a premium transfer that feels calm, efficient, and professionally managed. This page is also optimized for local intent around Black Car Service Dallas, airport car service, and airport car service me so the content matches what nearby clients are actually searching for. If you also need service to major regional airports, you can explore our <a href="https://www.dallasblacklimoservice.com/airports/dfw-car-service/"><b>dfw car service DFW</b></a> page for commercial airport transportation options across the Dallas area.</p>
                    <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Addison Airport Car Service</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/premier-black-car-service-for-dfw-and-love-field-airport-transfers.webp" class="img-fluid" alt="Dallas airport transfer luxury chauffeur service">
                    </div>
                </div>
            </div>

            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service-mobile.webp" class="img-fluid" alt="airport chauffeur service Dallas executive travel">
                    </div>
                </div>
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Professional Airport Car Service in Addison with Luxury Vehicles, Private Transfers, and Local Coverage Across Dallas, Plano, Frisco, and Allen</h3>
                    <p class="font-base text-justify">Travelers booking airport transportation in Addison are often looking for more than a simple ride. They want a vehicle that arrives on time, a chauffeur who knows the area, and a service that reflects the professionalism of their schedule. That is exactly where our airport car service stands apart. We provide executive sedans, luxury SUVs, and larger vehicles for travelers who need comfortable and direct transportation from Addison Airport to Dallas business districts, nearby suburbs, hotels, event venues, and residential communities. Our service is especially useful for business travelers, corporate pickups, VIP guests, and clients arranging transportation for visiting executives. Because many users search for airport car service me when they need a trusted option nearby, this page is written to match that real local demand while still supporting strong on-page SEO. Clients who need broader luxury transportation beyond airport pickups can also review our <a href="https://www.dallasblacklimoservice.com/services/chauffeur-service-dallas/"><b>chauffeur service dallas</b></a> page and our <a href="https://www.dallasblacklimoservice.com/services/private-car-service-in-dallas/"><b>private car service in Dallas</b></a> page for additional premium travel solutions.</p>
                    <a href="/get-a-quote/" class="btn btn-primary sm fw-medium fifa-btn-full">Request Addison Airport Quote</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/luxury-executive-corporate-travel-with-professional-chauffeur-service.webp" class="img-fluid" alt="VIP airport transfer Dallas chauffeur service">
                    </div>
                </div>
            </div>

            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas-mobile.webp" class="img-fluid" alt="private airport transfer Dallas luxury vehicle service">
                    </div>
                </div>

                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Black Car Service Dallas Connections for Addison Airport Transfers, Regional Airport Rides, and City to City Transportation</h3>
                    <p class="font-base text-justify">Addison Airport transportation often connects to a broader travel plan, which is why this page is structured to support both airport-specific bookings and wider regional service needs. Some travelers need a quick executive transfer into Dallas, while others need a luxury ride to Plano, Frisco, Allen, Irving, or even a longer intercity route. Our Black Car Service Dallas is designed to support those needs with the same professional standard across every route. We provide private airport transfers, executive pickups, and scheduled rides for business meetings, private aviation arrivals, hotel transportation, and local events. That makes this page useful for clients searching airport car service, private airport transportation, or a dependable chauffeur alternative near Addison Airport. We also strengthen internal linking for on-page SEO by connecting this page with core service pages such as <a href="https://www.dallasblacklimoservice.com/services/airport-transfers-dallas/"><b>airport transfers Dallas</b></a> and our <a href="https://www.dallasblacklimoservice.com/city-to-city-rides/"><b>city to city rides</b></a> page. If your itinerary includes another airport in the area, you can also visit our <a href="https://www.dallasblacklimoservice.com/airports/dallas-love-field-airport-car-service/"><b>Dallas Love Field Airport car service</b></a> page for another airport-focused option.</p>
                    <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Reserve Your Airport Car Service</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/private-city-to-city-black-car-service-from-dallas.webp" class="img-fluid" alt="Dallas private airport transportation luxury black car">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-50 pb-25 pb-md-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-03.svg') }}" alt="Booking" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Book Airport Ride</h3>
                        <p class="font-md">Schedule online or call in seconds.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Professional Scheduling</h3>
                        <p class="font-md">Pickup timing is managed for smooth departures and arrivals.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-01.svg') }}" alt="Driver" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Arrive Stress-Free</h3>
                        <p class="font-md">Relax while we handle airport and local travel.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-25">Where We <span class="theme-color"> Serve</span></h2>
                    <p class="font-md">Providing professional transportation services across the Dallas–Fort Worth Metroplex. Throughout the region our service covers:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-05.jpg') }}" alt="Premium black car service for airport, hotel, and event travel" class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="">Cities & Regional Communities</a></h3>
                        <p class="font-base">Service is available in Dallas, Addison, Fort Worth, Plano, Frisco, McKinney, Allen, Irving, Arlington, Grapevine, Southlake, and surrounding areas across DFW.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-06.jpg') }}" alt="Chauffeur service providing safe and comfortable city transportation" class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="">Airports & Aviation Access</a></h3>
                        <p class="font-base">We serve Addison Airport, DFW International Airport, Dallas Love Field, McKinney National Airport, Fort Worth Alliance Airport, and private aviation terminals.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-07.jpg') }}" alt="Executive black car service for meetings, conferences, and events" class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="">Corporate & Lifestyle Zones</a></h3>
                        <p class="font-base">Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, The Star (Frisco), Addison business corridors, Preston Hollow, Highland Park, and major business districts.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="text-center we-serve-item mb-30 mb-md-35">
                        <a href="" class="mx-auto img-holder mb-15 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-08.jpg') }}" alt="Airport pickup service with professional chauffeur and luxury vehicle" class="img-fluid">
                        </a>
                        <h3 class="mb-10 h6 fw-semibold"><a href="">Sports & Entertainment Venues</a></h3>
                        <p class="font-base">Transportation is available for AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-50 pt-sm-60 pt-md-70 pt-lg-80 pb-30 pb-sm-40 pb-md-50 pb-lg-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-15 mb-md-20 mb-lg-30">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Chosen By People At <span class="theme-color">Top Companies</span></h2>
                    <p class="font-md">Professionals choose our airport transfer service for consistent timing, comfort, and reliability.</p>
                </div>
                <div class="col-12">
                    <div class="companies-logo-marquee">
                        <div class="companies-logo-track">
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                            <div class="py-10 px-15">
                                <span class="img-holder">
                                    <img loading="lazy" width="90" height="60" decoding="async"
                                        src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="Logo" class="img-fluid">
                                </span>
                            </div>
                            @endforeach
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                            <div class="py-10 px-15">
                                <span class="img-holder">
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

    <section class="pt-40 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10">
                    <h2 class="mb-10 text-white h2 fw-bold">The Smarter Choice for Corporate Transportation</h2>
                    <p class="font-md">Professional black car service in Dallas for executives, corporate guests, and private aviation travelers who require punctual pickups, transparent pricing, and zero uncertainty. Every ride is professionally chauffeured, actively coordinated, and backed by service standards built for business-critical travel to Addison Airport and across Dallas.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Booking" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Instant Airport Booking</h3>
                        <p class="font-md">Online or phone booking with immediate confirmation and professional support.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/car-steering.svg') }}" alt="Confirmation" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Executive Airport Pickups</h3>
                        <p class="font-md">Chauffeur arrival is handled with schedule awareness and polished service.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/dimond.svg') }}" alt="Driver" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">On-Time, Managed Travel</h3>
                        <p class="font-md">Career chauffeurs and private transfers with no ride management required.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="intercity-ride-section bg-gray pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-center home-heading-style">Top Cities &amp; <span class="theme-color">Top Routes</span></h2>
                    <p class="font-md justify-mobile">Travel across Dallas and nearby cities effortlessly. From busy routes to
                        airport pickups and event destinations, our professional chauffeurs ensure every ride is
                        seamless, comfortable, and tailored to your schedule.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-austin-car-service">
                            <img loading="lazy" width="416" height="199" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/austin.webp" alt="Top City" class="img-fluid">
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
                            <img loading="lazy" width="416" height="199" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/houston.webp" alt="Top City" class="img-fluid">
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
                            <img loading="lazy" width="416" height="199" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/college-station.webp" alt="Top City" class="img-fluid">
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
                            <img loading="lazy" width="416" height="199" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/oklahoma-city.webp" alt="Top City" class="img-fluid">
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
                            <img loading="lazy" width="416" height="199" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/tyler.webp" alt="Top City" class="img-fluid">
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
                            <img loading="lazy" width="416" height="199" decoding="async" src="https://www.dallasblacklimoservice.com/assets/new_theme/img/waco.webp" alt="Top City" class="img-fluid">
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

    @include('partials.testimonials')

    <section class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                    <div class="fifa-image-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/fifa-image.png') }}" class="img-fluid" alt="FIFA Image">
                    </div>
                    <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World Cup 2026 page</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-40 faqs-section">
        <div class="container">
            <div class="row">
                <div class="mb-20 text-center col-12">
                    <h2 class="h2 fw-bold">Frequently Asked <span class="theme-color br-css-tt">Questions</span></h2>
                </div>
            </div>
            <div class="row" id="faqAccordion">
                <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                Do you provide service to and from Addison Airport?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">Yes. We provide private Addison Airport car service for arrivals, departures, business travel, and executive transportation throughout Dallas, Plano, Frisco, Allen, and surrounding areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Is this service good for executives and private aviation clients?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">Yes. Our service is designed for executives, company guests, private flyers, and travelers who need a discreet, punctual, and professional chauffeur experience with luxury vehicles and polished service standards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                What areas do you serve from Addison Airport?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">We serve Dallas, Addison, Plano, Frisco, Allen, Irving, Richardson, McKinney, Fort Worth, and nearby communities across the Dallas–Fort Worth metroplex.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                How early will the driver arrive before my pickup time?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">For most pickups, chauffeurs arrive early to help protect your schedule and support a smooth departure. Exact timing can vary based on the ride type, airport logistics, and itinerary details.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Can I request a sedan or SUV for Addison Airport transportation?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">Yes. We offer executive sedans, premium SUVs, luxury SUVs, sprinter vans, and larger vehicles depending on passenger count, luggage, and the level of comfort you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Do you offer service to DFW and Love Field too?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">Yes. In addition to Addison Airport transportation, we provide black car service to DFW Airport and Dallas Love Field, making it easy to reserve service for different airport itineraries across the region.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                Is this better than a rideshare for airport travel?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">For travelers who value reliability, professionalism, and comfort, yes. Our reserved chauffeur service offers a more private and consistent airport transportation experience than most app-based alternatives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                                Can I book round-trip airport transportation?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <p class="font-base">Yes. Round-trip service can be reserved for airport departures, return arrivals, corporate itineraries, private aviation travel, and scheduled business transportation.</p>
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
                        Arrive With Confidence <br><span class="theme-color">Book Your Chauffeur Now</span>
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Chauffeur Today</a>
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
                            <a href="">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-label="Facebook logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>Facebook logo</title>
                                    <path d="M17 2v4h-2c-.7 0-1 .8-1 1.5V10h3v4h-3v8h-4v-8H7v-4h3V6a4 4 0 014-4h3z" fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-label="Instagram logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>Instagram logo</title>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8A5.8 5.8 0 012 16.2V7.8C2 4.6 4.6 2 7.8 2zm-.2 2A3.6 3.6 0 004 7.6v8.8A3.6 3.6 0 007.6 20h8.8a3.6 3.6 0 003.6-3.6V7.6A3.6 3.6 0 0016.4 4H7.6zm10.9 2.75a1.25 1.25 0 10-2.5 0 1.25 1.25 0 002.5 0zM12 7a5 5 0 110 10 5 5 0 010-10zm-3 5a3 3 0 116 0 3 3 0 01-6 0z" fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-label="YouTube logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>YouTube logo</title>
                                    <path d="M21.58 7.2a2.5 2.5 0 00-1.76-1.77C18.26 5 12 5 12 5s-6.26 0-7.83.41c-.84.23-1.53.92-1.76 1.78C2 8.76 2 12 2 12s0 3.26.41 4.8c.23.87.9 1.54 1.76 1.77C5.76 19 12 19 12 19s6.26 0 7.82-.41a2.5 2.5 0 001.76-1.76c.42-1.57.42-4.81.42-4.81s.01-3.26-.42-4.83zM10 15V9l5.2 3-5.2 3z" fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.21 2H21L14.01 10.2L22 22H15.99L11.13 15.37L5.5 22H2.74L10.14 13.26L2 2H8.13L12.48 8.09L18.21 2ZM16.34 20.33H18L7.73 3.49H5.94L16.34 20.33Z" fill="#97999E" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg class="footer_socialMediaIcon__XNZUm" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-label="TikTok logo" width="40" height="40" viewBox="0 0 24 24">
                                    <title>TikTok logo</title>
                                    <path d="M12.75 2h2.02c.15 1.2.84 2.32 1.94 3.04a5.2 5.2 0 002.8.82v2.02a7.1 7.1 0 01-4.74-1.78v7.26a5.37 5.37 0 11-5.37-5.37c.35 0 .7.04 1.03.12v2.2a3.36 3.36 0 00-1.03-.17 3.35 3.35 0 103.35 3.35V2z" fill="#97999E"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="gap-2 col-12 col-md-7 d-flex justify-content-center justify-content-md-start align-items-start">
                    <svg class="mt-1" fill="#000000" width="20px" height="20px" viewBox="-4 0 32 32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                        <path d="M12.649,31.760 C12.463,31.919 12.231,31.999 12.000,31.999 C11.769,31.999 11.537,31.919 11.351,31.760 C10.887,31.365 0.000,21.976 0.000,11.964 C0.000,5.363 5.383,-0.006 12.000,-0.006 C18.617,-0.006 24.000,5.363 24.000,11.964 C24.000,21.976 13.113,31.365 12.649,31.760 ZM12.000,1.989 C6.486,1.989 2.000,6.464 2.000,11.964 C2.000,19.724 9.687,27.493 12.000,29.654 C14.312,27.493 22.000,19.724 22.000,11.964 C22.000,6.464 17.514,1.989 12.000,1.989 ZM12.000,17.991 C8.691,17.991 6.000,15.306 6.000,12.006 C6.000,8.705 8.691,6.021 12.000,6.021 C15.309,6.021 18.000,8.705 18.000,12.006 C18.000,15.306 15.309,17.991 12.000,17.991 ZM12.000,8.016 C9.794,8.016 8.000,9.805 8.000,12.006 C8.000,14.206 9.794,15.996 12.000,15.996 C14.206,15.996 16.000,14.206 16.000,12.006 C16.000,9.805 14.206,8.016 12.000,8.016 Z" fill="#97999E" />
                    </svg>
                    <address class="mb-0 font-md single-line-ellipses">Dallas, Texas, United States, 75001</address>
                </div>
            </div>
        </div>
    </section>
@endsection