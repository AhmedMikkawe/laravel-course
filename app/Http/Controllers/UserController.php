<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repo;
    public function __construct(UserRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
    public function index(){
        $users = $this->repo->GetAllUsers();
        return response()->json($users);
    }
    public function show(User $user){
        $user = $this->repo->GetUserById($user);
        return response()->json($user);
    }
}
