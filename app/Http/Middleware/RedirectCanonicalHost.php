<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Redirects to the host in APP_URL when it differs from the request host.
 * Fixes split sessions between www and non-www (or wrong host) so booking session persists.
 */
class RedirectCanonicalHost
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! app()->environment('production')) {
            return $next($request);
        }

        $configured = parse_url((string) config('app.url'), PHP_URL_HOST);
        if (! is_string($configured) || $configured === '') {
            return $next($request);
        }

        if (strtolower($request->getHost()) === strtolower($configured)) {
            return $next($request);
        }

        $uri = $request->getRequestUri();
        $scheme = parse_url((string) config('app.url'), PHP_URL_SCHEME) ?: $request->getScheme();

        return redirect()->away($scheme.'://'.$configured.$uri, 301);
    }
}
