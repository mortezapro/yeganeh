<?php

namespace App\Providers;

use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use App\Services\Category\CategoryService;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use App\Services\Project\ProjectService;
use App\Services\Project\ProjectServiceInterface;
use App\Services\ScanMessage\ScanMessageService;
use App\Services\ScanMessage\ScanMessageServiceInterface;
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
        $this->app->bind(PostServiceInterface::class,PostService::class);
        $this->app->bind(ScanMessageServiceInterface::class,ScanMessageService::class);
        $this->app->bind(CategoryServiceInterface::class,CategoryService::class);
        $this->app->bind(ProjectServiceInterface::class,ProjectService::class);
    }
}
