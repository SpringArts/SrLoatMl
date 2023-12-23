<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Language\LanguageInterface;
use App\Repositories\Language\LanguageRepository;

class LanguageServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            LanguageInterface::class,
            LanguageRepository::class
        );
    }
}
