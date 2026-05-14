<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Display Users based on search and pagination
        if (!isset($_GET['user']) || empty($_GET['user'])) {
            $users = User::orderBy('created_at', 'desc')->paginate(4);

            $pagination = 1;
        } else {
            $search_keyword = isset($_GET['user']) ? $_GET['user'] : '';

            $users = User::orderBy('created_at', 'desc')->where('name', 'LIKE', '%' . $search_keyword . '%')->orWhere('email', 'LIKE', '%' . $search_keyword . '%')->get();

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
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:6 | confirmed',
        ]);

        // Add user to DB
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if ($the_user = $user->save()) {
            return redirect()->route('admin.users.create')->with('success', 'User created successfully');
        } else {
            return redirect()->route('admin.users.create')->with('error', 'User creation failed');
        }
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
        // Update User
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if ($the_user = $user->save()) {
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
        //
    }
}
