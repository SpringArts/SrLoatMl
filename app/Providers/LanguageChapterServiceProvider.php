<?php

namespace App\Providers;

use App\Interfaces\Language\LanguageChapterInterface;
use App\Repositories\Language\LanguageChapterRepository;
use Carbon\Laravel\ServiceProvider;

class LanguageChapterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            LanguageChapterInterface::class, LanguageChapterRepository::class
        );
    }
}
