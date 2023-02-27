<?php

namespace App\Providers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);

        view()->composer('components.layouts.guest', function ($view) {
            $theme = request()->cookie('theme');
            if ($theme != 'Dark' && $theme != 'Light') {
                $theme = 'Light';
            }
        
            $view->with('theme', $theme);
        });

        Paginator::defaultView('vendor.pagination.default');
    }
}

