<?php

namespace App\Actions\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
class LoginUser
{
    public function handle(array $credentials): array
    {
        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! password_verify($credentials['password'], $user->password)) {
            throw new AuthenticationException('Credenciales inválidas');
        }

        $token = $user->createToken('api_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }
}
