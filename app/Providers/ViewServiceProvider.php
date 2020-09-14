<?php

namespace App\Providers;
use App\Models\CarType;

use App\Models\Location;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['backend.cars.fields'], function ($view) {
            $car_typeItems = CarType::pluck('name','id');
            $view->with('car_typeItems', $car_typeItems);
        });
    }
}
