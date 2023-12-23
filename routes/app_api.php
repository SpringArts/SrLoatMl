<?php

// routes/app_api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LanguageController;

Route::apiResource('/languages', LanguageController::class);
