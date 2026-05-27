<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();
            
            // Redirect based on user role
            if ($user->role === 'administrator') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'employee') {
                return redirect()->route('employee.dashboard');
            }
            
            // Default redirect if role doesn't match
            return redirect()->route('employee.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}
