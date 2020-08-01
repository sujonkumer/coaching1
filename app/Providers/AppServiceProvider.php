<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Auth;
use App\HeadreFooter;

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
        view()->composer('admin.include.header', function ($view) {
            $user = Auth::user();
            $view->with('user',$user);
        });

        view()->composer('admin.include.header', function ($view) {
            $header = HeadreFooter::find(1);
            $view->with('header',$header);
        });

        view()->composer('admin.include.footer', function ($view) {
            $footer = HeadreFooter::find(1);
            $view->with('footer',$footer);
        });
    }
}
