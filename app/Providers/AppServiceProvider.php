<?php

namespace App\Providers;

use App\Models\Service_Order;
use App\Observers\OrderServiceObserver;
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
    public function boot(): void
    {
        Service_Order::observe(OrderServiceObserver::class);
    }
}
