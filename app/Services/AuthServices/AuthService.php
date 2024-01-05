<?php


namespace  App\Services\AuthServices;

use App\Enums\GeneralName;
use App\Models\User;


class AuthService
{
    public function handleAuthentication($user, $provider)
    {
        $newUser =  $this->store($user, $provider);
        $this->login($newUser);
        $token = $this->createToken($newUser);
        return $token;
    }


    private function store($user, $provider)
    {
        return User::updateOrCreate(
            [
                'provider_id' => $user->getId(),
                'provider_name' => $provider,
            ],
            [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt($user->getId()),

            ]
        );
    }

    private function login($newUser)
    {
        return auth()->login($newUser);
    }

    public function createToken($newUser)
    {
        return $newUser->createToken('authToken')->plainTextToken;
    }

    public function redirectWithToken($token)
    {
        $cookie = cookie(GeneralName::APP_NAME, $token, 60 * 24); // 24 hours expiration
        $redirectUrl = config('app.frontend_url') . '?userId=' . auth()->user()->id . '&accessToken=' . $token . '&userName=' . auth()->user()->name;

        return redirect()->away($redirectUrl)->withCookie($cookie);
    }
}
