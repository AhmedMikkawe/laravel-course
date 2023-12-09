<?php

namespace App\Interfaces;

use App\Models\User;
use Illuminate\Http\Request;

interface UserServiceInterface{

    public function getAllUsers();
    public function getUserById(User $user);
    public function createUser(Request $request);

}
