<?php

namespace App\UseCases\Auth;

use App\Enums\TokenType;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\AdminResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Response;

class LoginAction
{
    public function __invoke($guard, $credentials)
    {
        return $this->login($guard, $credentials);
    }

    public function login($guard, $credentials)
    {
        $authGuard = Auth::guard($guard);

        if ($authGuard->attempt($credentials)) {
            $user = $authGuard->user();
            if ($user->is_active == 0) {
                return response()->json(['error' => 'Account is suspended'], RESPONSE::HTTP_UNAUTHORIZED);
            }
            $this->authenticateUser($user);
            $token = $this->generateToken($user);

            return $this->generateSuccessResponse($token, $user);
        }
        return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

    protected function authenticateUser($user)
    {
        auth()->login($user, true);
    }

    protected function generateToken($user)
    {
        return $user->createToken($user->role === UserRole::SUPER_ADMIN ? TokenType::SUPER_ADMIN_TOKEN : TokenType::NORMAL_USER_TOKEN)->plainTextToken;
    }

    protected function generateSuccessResponse($token, $user)
    {
        if ($user->role === UserRole::SUPER_ADMIN) {
            return response()->json([
                'access_token' => $token,
                'token_type' => TokenType::TYPE,
                'data' => new AdminResource($user),
            ]);
        }
        return response()->json([
            'access_token' => $token,
            'token_type' => TokenType::TYPE,
            'data' => new UserResource($user),
        ]);
    }
}
