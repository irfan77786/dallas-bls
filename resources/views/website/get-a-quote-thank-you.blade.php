@extends('master')

@section('content')
    <style>
        .quote-thank-you-wrap {
            padding: 2.5rem 1rem 4rem;
        }
        @media (min-width: 768px) {
            .quote-thank-you-wrap {
                padding: 3.5rem 1.5rem 5rem;
            }
        }
        .quote-thank-you-card {
            position: relative;
            max-width: 920px;
            margin: 0 auto;
            min-height: min(72vh, 560px);
            border-radius: 16px;
            overflow: hidden;
            background-color: #1a1a1a;
            background-image: url('{{ asset('assets/new_theme/img/fleet-img.webp') }}');
            background-size: cover;
            background-position: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
        }
        .quote-thank-you-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.62);
            z-index: 0;
        }
        .quote-thank-you-inner {
            position: relative;
            z-index: 1;
            min-height: inherit;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 3rem 1.75rem;
        }
        @media (min-width: 576px) {
            .quote-thank-you-inner {
                padding: 4rem 2.5rem;
            }
        }
        .quote-thank-you-title {
            color: #fff;
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            letter-spacing: -0.02em;
            line-height: 1.15;
            margin-bottom: 1.25rem;
        }
        .quote-thank-you-text {
            color: #fff;
            font-size: clamp(1rem, 2.2vw, 1.125rem);
            font-weight: 400;
            line-height: 1.55;
            max-width: 34rem;
            margin: 0 auto 0.35rem;
            opacity: 0.96;
        }
        .quote-thank-you-text:last-of-type {
            margin-bottom: 2rem;
        }
        .quote-thank-you-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.85rem 2.35rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            color: #fff !important;
            text-decoration: none !important;
            border: none;
            background: linear-gradient(180deg, #e4c35a 0%, #c9a227 45%, #9a7416 100%);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
            transition: transform 0.15s ease, filter 0.15s ease, box-shadow 0.15s ease;
        }
        .quote-thank-you-btn:hover {
            color: #fff !important;
            filter: brightness(1.06);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
        .quote-thank-you-btn-secondary {
            margin-top: 1rem;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.85);
            box-shadow: none;
        }
        .quote-thank-you-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
            filter: none;
        }
    </style>

    <div class="quote-thank-you-wrap bg-gray">
        <div class="container">
            <div class="quote-thank-you-card">
                <div class="quote-thank-you-inner">
                    @if (session('get_a_quote_success'))
                        <h1 class="quote-thank-you-title">Thank You!</h1>
                        <p class="quote-thank-you-text">Your request has been successfully submitted.</p>
                        <p class="quote-thank-you-text">Our team will contact you shortly.</p>
                        <a href="{{ route('booking') }}" class="quote-thank-you-btn">Back To Home</a>
                    @elseif (session('get_a_quote_error') || $errors->any())
                        <h1 class="quote-thank-you-title">Almost there</h1>
                        <p class="quote-thank-you-text">
                            @if ($errors->any())
                                We could not submit your quote. Please review the details in the message and try again.
                            @else
                                Something went wrong while sending your request. You can try again or call us for help.
                            @endif
                        </p>
                        <p class="quote-thank-you-text mb-0">Questions? Call <a href="tel:+14699612047" class="text-white fw-bold">+1 469-961-2047</a></p>
                        <a href="{{ route('get_a_quote') }}" class="quote-thank-you-btn mt-4">Back To Quote Form</a>
                        <a href="{{ route('booking') }}" class="quote-thank-you-btn quote-thank-you-btn-secondary">Back To Home</a>
                    @else
                        <h1 class="quote-thank-you-title">Thank You!</h1>
                        <p class="quote-thank-you-text">Thanks for visiting Dallas Black Limo Service.</p>
                        <p class="quote-thank-you-text">Request a quote or book your next ride anytime.</p>
                        <a href="{{ route('booking') }}" class="quote-thank-you-btn">Back To Home</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        (function () {
            @if (session('get_a_quote_error'))
                Swal.fire({
                    title: 'Error',
                    text: @json(session('get_a_quote_error')),
                    icon: 'error',
                    confirmButtonColor: '#9a7416',
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
                    confirmButtonColor: '#9a7416',
                    confirmButtonText: 'OK'
                });
            @endif
        })();
    </script>
@endsection
