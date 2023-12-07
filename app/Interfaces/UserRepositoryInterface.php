<?php
namespace App\Interfaces;

use App\Models\User;

interface UserRepositoryInterface{
    public function GetAllUsers();
    public function GetUserById(User $user);
}
