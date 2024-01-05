<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Services\AuthServices\AuthService;

class ProviderController extends Controller
{
    protected $authService;


    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $token = $this->authService->handleAuthentication($user, $provider);

        return $this->authService->redirectWithToken($token);
    }
}
