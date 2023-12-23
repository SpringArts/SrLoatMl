<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Mail\OtpMail;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\UseCases\User\VerifyOTPAction;
use App\UseCases\User\CheckEmailVerify;
use App\UseCases\User\ResendEmailOtpAction;

class AuthAdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('super_admin')->attempt($credentials)) {
            $superAdmin = Auth::guard('super_admin')->user();
            if ($superAdmin->is_active == 0) {
                return response()->json(['error' => 'Account is suspended'], 403);
            }
            $this->authenticateUser($superAdmin);
            $token = $this->generateToken($superAdmin);

            return $this->generateSuccessResponse($token, $superAdmin);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }


    protected function authenticateUser($superAdmin)
    {
        auth()->login($superAdmin, true);
    }

    protected function generateToken($superAdmin)
    {
        return $superAdmin->createToken($superAdmin->role === 'superAdmin' ? 'superAdminToken' : 'normalToken')->plainTextToken;
    }

    protected function generateSuccessResponse($token, $superAdmin)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'data' => new AdminResource($superAdmin),
        ]);
    }
}
