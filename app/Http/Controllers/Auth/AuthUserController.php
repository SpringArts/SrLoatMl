<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\OtpMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\UseCases\User\CheckEmailVerify;
use App\UseCases\User\ResendEmailOtpAction;
use App\UseCases\User\VerifyOTPAction;

class AuthUserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            $user = Auth::guard('user')->user();
            if ($user->is_active == 0) {
                return response()->json(['error' => 'Account is suspended'], 403);
            }
            $this->authenticateUser($user);
            $token = $this->generateToken($user);

            return $this->generateSuccessResponse($token, $user);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }


    protected function authenticateUser($user)
    {
        auth()->login($user, true);
    }

    protected function generateToken($user)
    {
        return $user->createToken($user->role === 'normal' ? 'normalToken' : 'adminToken')->plainTextToken;
    }

    protected function generateSuccessResponse($token, $user)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'data' => new UserResource($user),
        ]);
    }
}
