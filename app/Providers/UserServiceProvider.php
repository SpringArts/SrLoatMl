<?php

namespace App\Providers;

use App\Interfaces\User\UserInterface;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(
            UserInterface::class,
            UserRepository::class
        );
    }
}
