<?php
namespace App\Foundation\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminEloquentUserProvider extends EloquentUserProvider
{

    /**
     * Validate a user against the given credentials.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param array $credentials
     */
    public function validateCredentials(Authenticatable $user, array $credentials) {

        $plain = $credentials['password'];
        $authPassword = $user->getAuthPassword();
        return Hash::check($plain . $authPassword['salt'], $authPassword['password']);
    }
}