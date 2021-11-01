<?php

namespace App\Providers;

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
        // Dao Registration
        $this->app->bind('App\Contracts\Dao\Products\ProductDaoInterface', 'App\Dao\Products\ProductDao');
        $this->app->bind('App\Contracts\Dao\Phones\PhoneDaoInterface', 'App\Dao\Phones\PhoneDao');

        // Business logic registration
        $this->app->bind('App\Contracts\Services\Products\ProductServiceInterface', 'App\Services\Products\ProductService');
        $this->app->bind('App\Contracts\Services\Phones\PhoneServiceInterface', 'App\Services\Phones\PhoneService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
