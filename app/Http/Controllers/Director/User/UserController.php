<?php

namespace App\Http\Controllers\Director\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('Director.User.all_user', compact('users'));
    }
}
