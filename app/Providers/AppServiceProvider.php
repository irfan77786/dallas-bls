<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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

        $root = rtrim((string) config('app.url'), '/');
        if ($root !== '') {
            URL::forceRootUrl($root);
        }
        if (str_starts_with($root, 'https://')) {
            URL::forceScheme('https');
        }
    }
}
