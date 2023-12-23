<?php

namespace App\Providers;

use App\Interfaces\Language\LanguageInterface;
use App\Respositories\Language\LanguageRepository;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            LanguageInterface::class, LanguageRepository::class
        );
    }
}
