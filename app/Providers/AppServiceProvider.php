<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        
        if (config('app.env') === 'production') {
        URL::forceScheme('https');
    }
        // View::composer('*', function ($view) {
        //     $baseUrl = 'http://127.0.0.1:8000/';
        //     $url =  URL::current();
        //     $cleanUrl = str_replace($baseUrl, '', $url);

        //     $block_header = Page::where('alias', $cleanUrl)->first();
        //     $view->with('block_header', $block_header);
        // });
    }
}
