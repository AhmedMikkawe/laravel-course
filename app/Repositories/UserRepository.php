<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface {

    public function GetAllUsers()
    {
        return User::all();
    }
    public function GetUserById(User $user)
    {
        return User::find($user->id);
    }
    public function create(Request $request){
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
