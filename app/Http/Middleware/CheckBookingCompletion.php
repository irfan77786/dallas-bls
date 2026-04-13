<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckBookingCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('booking_completed')) {
            Log::warning('booking.middleware.check_booking_completion.flushing_session', [
                'route' => $request->route()?->getName(),
                'full_url' => $request->fullUrl(),
                'session_id' => $request->hasSession() ? $request->session()->getId() : null,
                'session_keys_before_flush' => $request->hasSession() ? array_keys($request->session()->all()) : [],
                'referer' => $request->headers->get('referer'),
                'origin' => $request->headers->get('origin'),
            ]);
            session()->flush();
            $request->session()->regenerateToken();
            session(['booking_completed' => true]);
            return redirect()->route('booking');
        }
        return $next($request);
    }
}
