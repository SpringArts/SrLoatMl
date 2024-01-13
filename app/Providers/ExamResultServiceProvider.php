<?php


namespace App\Providers;


use App\Interfaces\ExamResult\ExamResultInterface;
use App\Repositories\ExamResult\ExamResultRepository;
use Illuminate\Support\ServiceProvider;


class ExamResultServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ExamResultInterface::class, ExamResultRepository::class

        );
    }
}
