<?php

namespace App\Providers;

use App\Interfaces\BaseInterface;
use App\Repositories\AdvertisementRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseInterface::class, CategoryRepositoryInterface::class);
        $this->app->bind(BaseInterface::class, ContactRepositoryInterface::class);
        $this->app->bind(BaseInterface::class, AdvertisementRepositoryInterface::class);
        $this->app->bind(BaseInterface::class, UserRepositoryInterface::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}