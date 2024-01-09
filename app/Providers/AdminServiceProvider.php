<?php

namespace App\Providers;

use App\Interfaces\User\AdminInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\User\AdminRepository;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(
            AdminInterface::class,
            AdminRepository::class
        );
    }
}
