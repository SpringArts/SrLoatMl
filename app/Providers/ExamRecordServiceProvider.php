<?php

namespace App\Providers;

use App\Interfaces\ExamRecord\ExamRecordInterface;
use App\Repositories\ExamRecord\ExamRecordRepository;
use Carbon\Laravel\ServiceProvider;

class ExamRecordServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ExamRecordInterface::class,
            ExamRecordRepository::class
        );
    }
}
