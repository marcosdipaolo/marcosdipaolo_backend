<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MDP\Services;
use MDP\Apis;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        // Services
        Apis\MailApi::class => Services\MailService::class
    ];

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
        //
    }
}
