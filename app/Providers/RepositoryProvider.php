<?php

namespace App\Providers;

use App\Interfaces\BaseInterface;
use App\Repositories\AdvertisementRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ContactFrontRepositoryInterface;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\ProfileFrontRepositoryInterface;
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
        $this->app->bind(BaseInterface::class, ProfileFrontRepositoryInterface::class);
        $this->app->bind(BaseInterface::class, ContactFrontRepositoryInterface::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
