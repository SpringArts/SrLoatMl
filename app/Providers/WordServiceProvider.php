<?php


namespace App\Providers;


use App\Interfaces\Words\WordInterface;
use App\Repositories\Words\WordRespository;
use Illuminate\Support\ServiceProvider;

class WordServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            WordInterface::class, WordRespository::class
        );
    }
}
