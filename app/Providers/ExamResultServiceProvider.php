<?php


namespace App\Providers;


use App\Interfaces\Exam\ExamResultInterface;
use App\Repositories\Exam\ExamResultRepository;
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
