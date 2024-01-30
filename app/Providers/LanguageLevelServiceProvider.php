<?php

namespace App\Providers;

use App\Interfaces\Language\LanguageLevelInterface;
use App\Repositories\Language\LanguageLevelRepository;
use Carbon\Laravel\ServiceProvider;

class LanguageLevelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            LanguageLevelInterface::class, LanguageLevelRepository::class
        );
    }
}
