<?php

namespace App\Providers;

use App\Services\Blog\BlogService;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;
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
        $this->app->bind(UserServiceInterface::class,UserService::class);
        $this->app->bind(BlogServiceInterface::class,BlogService::class);
    }
}
