<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Models\Country;
use App\Models\Language;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Admin Dashboard Related Group
Route::group(['prefix' => 'admin'], function () {
    // Dashboard Route
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // User List User List
    Route::get('users', [UserController::class, 'index'])->name('admin.users');

    // User Create User Create
    Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');

    // User Store User Store
    Route::post('users/store', [UserController::class, 'store'])->name('admin.users.store');

    // User Edit User Edit
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');

    // User Update User Update
    Route::post('users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');

    // User Delete User Delete 
    // Route::post('users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    // Employee List Route
    Route::get('employees', [EmployeeController::class, 'index'])->name('admin.employees');
});

// Authentication Related Group for Guest User
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'login']);
});

// Countries List Route
Route::get('users', function () {

    $users = User::find(1);

    // dd($users->employee->designation->designation_name);  

});

