<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Model\HomeText;
use Illuminate\Support\ServiceProvider;

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

        // \URL::forceScheme('https');
        // View::composer('layouts.front', function ($view) {
        //     $view->with('homepage', HomeText::first());
        // });

        view()->composer('layouts.front', function ($view) {
            $homepage = HomeText::first();
            $view->with('homepage', $homepage);
        });
    }
}
