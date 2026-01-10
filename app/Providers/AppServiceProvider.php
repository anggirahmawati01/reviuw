<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Pagination Bootstrap 5
        Paginator::useBootstrapFive();

        // Paksa HTTPS (local + production aman)
        if (app()->environment(['local', 'production'])) {
            URL::forceScheme('https');
        }
    }
}
