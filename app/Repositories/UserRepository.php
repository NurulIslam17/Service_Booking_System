<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function register($data)
    {
        $user = User::create($data);
        $token = $user->createToken('api_token')->plainTextToken;
        return response()->json(['token' => $token], 201);
    }
}
