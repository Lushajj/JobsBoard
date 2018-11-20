<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Auth;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
            view()->composer('*', function($view){
                $bekleme_sayi = DB::table('users')->where('status','beklemede')->count();
                $view->with('bekleme_sayi', $bekleme_sayi);
            });
            view()->composer('*', function($view){
                $view->with('auth_name', Auth::user());
            });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
