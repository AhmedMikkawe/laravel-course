<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface {

    public function GetAllUsers()
    {
        return User::all();
    }
    public function GetUserById(User $user)
    {
        return User::find($user->id);
    }
}
