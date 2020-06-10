<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    public function index()
    {
        return UserCollection::collection(User::paginate(10));
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }
}
