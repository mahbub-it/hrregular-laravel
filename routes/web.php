<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin; 
use App\Http\Controllers\Employees;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Admin Dashboard Related Group
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage_all']], function () {
    // Dashboard Route
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');

    // User List User List
    Route::get('users', [Admin\UserController::class, 'index'])->name('admin.users');

    // User Create User Create
    Route::get('users/create', [Admin\UserController::class, 'create'])->name('admin.users.create');

    // User Store User Store
    Route::post('users/store', [Admin\UserController::class, 'store'])->name('admin.users.store');

    // User Edit User Edit
    Route::get('users/edit/{id}', [Admin\UserController::class, 'edit'])->name('admin.users.edit');

    // User Update User Update
    Route::post('users/update/{id}', [Admin\UserController::class, 'update'])->name('admin.users.update');

    // User Delete User Delete 
    Route::delete('users/delete/{id}', [Admin\UserController::class, 'destroy'])->name('admin.users.destroy');

    // Route for Logout
    Route::post('logout', [Admin\UserController::class, 'logout'])->name('admin.logout');

    // Employee List Route
    Route::get('employees', [Admin\EmployeeController::class, 'index'])->name('admin.employees'); 

    // My Profile Route
    Route::get('my-profile', [Admin\UserController::class, 'myProfile'])->name('admin.myProfile');
    // My Profile update
    Route::post('my-profile/update', [Admin\UserController::class, 'myProfileUpdate'])->name('admin.myProfileUpdate');
});

// Employee Dashboard Related Group
Route::group(['prefix' => 'employee', 'middleware' => 'auth'], function () {
    // Dashboard Route
    Route::get('dashboard', [Employees\EmployeeController::class, 'index'])->name('employee.dashboard');
});

// Authentication Related Group for Guest User
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login_post'])->name('login_post');
});

// Logout Route
// Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Employee Dashboard Related Group
Route::group(['prefix' => 'employee', 'middleware' => 'auth'], function () {
    // Dashboard Route
    Route::get('dashboard', [Employees\EmployeeController::class, 'index'])->name('employee.dashboard');

    // Employee Leaves Route
    Route::get('leaves', [Employees\EmployeeController::class, 'leaves'])->name('employee.leaves');

    // Employee Attendance Route
    Route::get('attendance', [Employees\EmployeeController::class, 'attendance'])->name('employee.attendance');

    // Employee Holidays Route
    Route::get('holidays', [Employees\EmployeeController::class, 'holidays'])->name('employee.holidays');

    // Employee Logout Route
    Route::post('logout', [Employees\EmployeeController::class, 'logout'])->name('employee.logout');

    // Employee Profile Route
    Route::get('profile', [Employees\EmployeeController::class, 'profile'])->name('employee.profile');
    // Employee Profile update
    Route::post('profile/update', [Employees\EmployeeController::class, 'profileUpdate'])->name('employee.profile.update');
});
