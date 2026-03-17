<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;

class AuthController extends Controller
{
    // Method for Register & Login
    public function login()
    {
        return view('auth.authentication');
    }
}
