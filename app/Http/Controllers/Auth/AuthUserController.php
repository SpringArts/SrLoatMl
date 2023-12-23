<?php

namespace App\Http\Controllers\Auth;

use App\UseCases\Auth\LoginAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthUserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        return (new LoginAction())('user', $credentials);
    }
}
