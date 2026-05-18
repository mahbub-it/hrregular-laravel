<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Method for Register & Login
    public function login()
    {
        return view('auth.authentication');
    }

    // Method for Register & Login
    public function login_post(Request $request)
    {
        $data = $request->validate([
            'email' => 'required | email | exists:users,email',
            'password' => 'required | min:6'
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}
