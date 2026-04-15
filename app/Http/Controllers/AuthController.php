<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Method for Register & Login
    public function login()
    {
        return view('auth.authentication');
    }
}
