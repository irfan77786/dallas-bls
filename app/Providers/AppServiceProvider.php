<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if(session('booking_completed')){
            Log::warning('booking.app_service_provider.flushing_session', [
                'session_id' => session()->getId(),
                'session_keys_before_flush' => array_keys(session()->all()),
                'url' => request()?->fullUrl(),
                'route' => request()?->route()?->getName(),
                'referer' => request()?->headers->get('referer'),
                'origin' => request()?->headers->get('origin'),
            ]);
            session()->flush();
            return redirect()->route('booking');
        }
    }
}
