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
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-8 col-lg-7 d-flex flex-column justify-content-center"
                    style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="h1 fw-bold text-white mb-15">Thank You</h1>
                    <p class="font-lg fw-medium text-white mb-0">
                        @if (session('get_a_quote_success'))
                            Your quote request is in. Our team will follow up shortly.
                        @elseif (session('get_a_quote_error') || $errors->any())
                            We could not complete your request. Please review the message below and try again.
                        @else
                            Thanks for choosing Dallas Black Car Service.
                        @endif
                    </p>
                    <p class="text-white font-base d-flex align-items-center mt-20 mb-0">
                        Questions? <a href="tel:+14699612047" class="mx-2 fw-bold font-lg theme-color">+1 469-961-2047</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 py-sm-60 py-md-70 py-lg-80 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="bg-white px-20 px-sm-30 py-30 shadow-sm rounded text-center">
                        @if (session('get_a_quote_success'))
                            <h2 class="h4 fw-bold mb-15">Request received</h2>
                            <p class="font-base mb-25">You'll get a confirmation email shortly. If you need to add details, reply to that message or call us.</p>
                        @elseif (session('get_a_quote_error') || $errors->any())
                            <h2 class="h4 fw-bold mb-15">Let's try again</h2>
                            <p class="font-base mb-25">Return to the quote form, correct any issues, and resubmit. We're happy to help.</p>
                        @else
                            <h2 class="h4 fw-bold mb-15">We're here to help</h2>
                            <p class="font-base mb-25">Request a new quote or explore our services anytime.</p>
                        @endif
                        <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
                            <a href="{{ route('get_a_quote') }}" class="btn btn-primary fw-bold">Back to quote form</a>
                            <a href="{{ route('booking') }}" class="btn btn-outline-primary fw-bold">Book a ride</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.testimonials')
    @include('partials.faq')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        (function () {
            @if (session('get_a_quote_success'))
                Swal.fire({
                    title: 'Success!',
                    text: @json(session('get_a_quote_success')),
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            @endif

            @if (session('get_a_quote_error'))
                Swal.fire({
                    title: 'Error',
                    text: @json(session('get_a_quote_error')),
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
