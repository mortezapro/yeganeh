<?php

namespace App\Providers;

use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(ContactServiceInterface::class,ContactService::class);
    }
}
