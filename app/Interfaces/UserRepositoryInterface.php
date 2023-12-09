<?php
namespace App\Interfaces;

use App\Models\User;
use Illuminate\Http\Request;

interface UserRepositoryInterface{
    public function GetAllUsers();
    public function GetUserById(User $user);
    public function create(Request $request);
}
