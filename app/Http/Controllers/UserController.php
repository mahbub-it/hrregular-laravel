<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Display Users based on search and pagination
        if (!isset($_GET['user']) || empty($_GET['user'])) {
            $users = User::orderBy('id', 'desc')->paginate(4);

            $pagination = 1;
        } else {
            $search_keyword = isset($_GET['user']) ? $_GET['user'] : '';

            $users = User::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $search_keyword . '%')->orWhere('email', 'LIKE', '%' . $search_keyword . '%')->get();

            $pagination = 0;
        }
        return view('admin.users.user-list', compact('users', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // View for user creation form
        return view('admin.users.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Update user Information
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg',
            'role' => 'required|in:employee,administrator',
        ]);

        // Save user to DB first (Spatie needs an existing model ID to attach media)
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        // Attach profile picture after save so Spatie has the model ID
        if ($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()) {
            $user->addMedia($request->file('profile_picture'))
                ->toMediaCollection('profile_picture');
        }

        return redirect()->route('admin.users.create')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Edit User View
        $user = User::find($id);
        return view('admin.users.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update User to DB
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        // Only update password if a new one was provided
        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        // Handle profile picture — null-safe check, clear old before adding new
        if (isset($request->profile_picture) && $request->file('profile_picture')) {
            $user->clearMediaCollection('profile_picture');
            $user->addMedia($request->file('profile_picture'))->toMediaCollection('profile_picture');
        }

        if ($user->save()) {
            return redirect()->route('admin.users.edit', $id)->with('success', 'User updated successfully');
        } else {
            return redirect()->route('admin.users.edit', $id)->with('error', 'User update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete User from user List
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


    // My Profile
    public function myProfile()
    {
        $user = Auth::user();
        return view('admin.users.my-profile', compact('user'));
    }

    // My Profile Update
    public function myProfileUpdate(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('admin.myProfile')->with('success', 'Profile updated successfully');
    }
}
