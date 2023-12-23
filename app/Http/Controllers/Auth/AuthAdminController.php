<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Mail\OtpMail;
use App\Models\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\AdminResource;
use App\Http\Resources\UserResource;
use App\UseCases\Auth\LoginAction;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        return (new LoginAction())('super_admin', $credentials);
    }
}
