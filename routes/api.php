<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Api\Auth\ProviderController;

Route::post('/app/login', [AuthUserController::class, 'login']);

Route::post('/console/login', [AuthAdminController::class, 'login']);

Route::get('/auth/{provider}', [ProviderController::class, 'redirectToProvider']);
Route::get('/auth/callback/{provider}', [ProviderController::class, 'handleProviderCallback']);

Route::prefix('app')->middleware(['auth:sanctum', 'user'])->group(function () {
    require __DIR__ . '/app_api.php';
});

Route::prefix('console')->middleware(['auth:sanctum', 'super_admin'])->group(function () {
    require __DIR__ . '/console.php';
});
