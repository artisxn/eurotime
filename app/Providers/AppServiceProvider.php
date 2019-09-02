<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use App\Type;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

        view()->composer('*', function() {
            $categories = Category::where('active','On')->get();
            view()->share('categories', $categories);
        });

        view()->composer('*', function() {
            $brands = Brand::where('active','On')->get();
            view()->share('brands', $brands);
        });

        view()->composer('*', function() {
            $types = Type::where('active','On')->get();
            view()->share('types', $types);
        });
    }
}
