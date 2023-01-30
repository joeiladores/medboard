<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        return view('user')->with('users', User::all());
    }
}
