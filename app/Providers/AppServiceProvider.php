<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Social;
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
    public function boot()
    {
        // Bütün səhifələr üçün sosial məlumatlarını göndəririk
        View::composer('*', function ($view) {
            $socialLinks = Social::first(); // İlk sosial media məlumatını alırıq
            $view->with('socialLinks', $socialLinks); // Bütün səhifələrə göndəririk
        });
    }
}
