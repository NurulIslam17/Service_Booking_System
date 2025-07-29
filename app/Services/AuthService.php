<?php

namespace App\Services;

use App\Repositories\UserRepository;

class AuthService
{

    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($data)
    {
       return  $this->userRepository->register($data);
    }
}
