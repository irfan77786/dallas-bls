@php
    $siteKey = config('services.turnstile.site_key');
@endphp

@if ($siteKey)
    @once
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    @endonce
    <div class="mb-15">
        <div class="cf-turnstile" data-sitekey="{{ $siteKey }}" data-theme="light"></div>
        @error('cf-turnstile-response')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
@endif
