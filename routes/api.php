<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Api\V1\LanguageController;

Route::post('/app/login', [AuthUserController::class, 'login']);

Route::post('/console/login', [AuthAdminController::class, 'login']);

Route::apiResource('/languages', LanguageController::class);

Route::prefix('app')->middleware(['auth:sanctum', 'user'])->group(function () {
    require __DIR__ . '/app_api.php';
});

Route::prefix('console')->middleware(['auth:sanctum', 'super_admin'])->group(function () {
    require __DIR__ . '/console.php';
});
