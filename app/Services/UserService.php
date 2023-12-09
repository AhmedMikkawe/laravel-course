<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\UserServiceInterface;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService implements UserServiceInterface{

    protected UserRepositoryInterface $repo;
    public function __construct() {
        $this->repo = new UserRepository();
    }
    public function getAllUsers(){
        return $this->repo->GetAllUsers();
    }
    public function getUserById(User $user){
        return $this->repo->GetUserById($user);
    }
    public function createUser(Request $request){
        return $this->repo->create($request);
    }
}
