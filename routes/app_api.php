<?php

// routes/app_api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\NewPasswordController;


Route::post('/reset-password', [NewPasswordController::class, 'changePassword']);
