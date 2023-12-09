<?php

namespace App\Http\Controllers;

use App\Facades\UserFacade;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = UserFacade::GetAllUsers();
        return response()->json($users);
    }
    public function show(User $user){
        $user = UserFacade::getUserById($user);
        return response()->json($user);
    }
    public function store(Request $request){
        return response()->json(UserFacade::createUser($request));
    }
}
