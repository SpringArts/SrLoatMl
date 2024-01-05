<?php

// routes/app_api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LanguageController;
use App\Http\Controllers\Api\V1\ExamRecordController;
use App\Http\Controllers\Api\V1\ExamResultController;
use App\Http\Controllers\Api\V1\LanguageLevelController;
use App\Http\Controllers\Api\V1\LanguageChapterController;
use App\Http\Controllers\Api\v1\WordController;
use App\Http\Controllers\Api\V1\ExamController;

Route::apiResource('/languages', LanguageController::class);
Route::apiResource('/language-levels', LanguageLevelController::class);
Route::apiResource('/language-chapters', LanguageChapterController::class);

Route::apiResource('/words', WordController::class);
Route::apiResource("/exam", ExamController::class);
Route::apiResource('/exam-results', ExamResultController::class);
Route::apiResource('/exam-records', ExamRecordController::class);
