<?php

// routes/app_api.php

use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/admins', AdminController::class);
Route::apiResource('/users', UserController::class);
