@php
    $siteKey = config('services.turnstile.site_key');
@endphp

@if ($siteKey)
    <div class="mb-15 turnstile-lazy-wrap" data-sitekey="{{ $siteKey }}">
        <div class="cf-turnstile-slot"></div>
        @error('cf-turnstile-response')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    @once
        @push('scripts')
            <script>
            (function () {
                var loaded = false;
                function injectTurnstile() {
                    if (loaded) return;
                    loaded = true;
                    var s = document.createElement('script');
                    s.src = 'https://challenges.cloudflare.com/turnstile/v0/api.js';
                    s.async = true;
                    s.defer = true;
                    document.head.appendChild(s);
                    document.querySelectorAll('.turnstile-lazy-wrap').forEach(function (wrap) {
                        var slot = wrap.querySelector('.cf-turnstile-slot');
                        if (!slot || slot.querySelector('.cf-turnstile')) return;
                        var el = document.createElement('div');
                        el.className = 'cf-turnstile';
                        el.setAttribute('data-sitekey', wrap.getAttribute('data-sitekey'));
                        el.setAttribute('data-theme', 'light');
                        slot.appendChild(el);
                    });
                }
                var form = document.querySelector('.turnstile-lazy-wrap') && document.querySelector('.turnstile-lazy-wrap').closest('form');
                if (form) {
                    form.addEventListener('focusin', injectTurnstile, { once: true });
                    form.addEventListener('pointerdown', injectTurnstile, { once: true });
                }
            })();
            </script>
        @endpush
    @endonce
@endif