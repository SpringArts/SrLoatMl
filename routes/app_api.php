<?php

// routes/app_api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LanguageController;
use App\Http\Controllers\Api\V1\LanguageLevelController;
use App\Http\Controllers\Api\V1\LanguageChapterController;

Route::apiResource('/languages', LanguageController::class);

Route::apiResource('/language-levels', LanguageLevelController::class);

Route::apiResource('/language-chapters', LanguageChapterController::class);
