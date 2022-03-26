<?php

namespace App\Providers;

use App\Cat;
use App\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header', function ($view){
           $view->with('cats', Cat::select('id','name')->get());
           $view->with('sett', Setting::select('logo', 'favicon')->first());
        });
        view()->composer('front.inc.footer', function ($view){
            $view->with('sett', Setting::first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
