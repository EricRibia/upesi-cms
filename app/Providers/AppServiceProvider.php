<?php

namespace App\Providers;
use App\Country;
use App\About;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['contactus'] = About::where('type','contact')->get();
        $data['all'] = Country::all();
        view()->share($data);
        Schema::defaultStringLength(191);
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
