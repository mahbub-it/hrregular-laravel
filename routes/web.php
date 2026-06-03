<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Employees;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
})->name('homepage');


// Admin Dashboard Related Group
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage_all']], function () {
    // Admin Dashboard Route
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');

    // Admin User List Route
    Route::get('users', [Admin\UserController::class, 'index'])->name('admin.users');

    // Admin User Create Route
    Route::get('users/create', [Admin\UserController::class, 'create'])->name('admin.users.create');

    // Admin User Store Route
    Route::post('users/store', [Admin\UserController::class, 'store'])->name('admin.users.store');

    // Admin User Edit Route
    Route::get('users/edit/{id}', [Admin\UserController::class, 'edit'])->name('admin.users.edit');

    // Admin User Update Route
    Route::post('users/update/{id}', [Admin\UserController::class, 'update'])->name('admin.users.update');

    // Admin User Delete Route 
    Route::delete('users/delete/{id}', [Admin\UserController::class, 'destroy'])->name('admin.users.destroy');

    // Admin Logout Route
    Route::post('logout', [Admin\UserController::class, 'logout'])->name('admin.logout');

    // Employee CRUD Routes
    Route::get('employees', [Admin\EmployeeController::class, 'index'])->name('admin.employees');
    Route::get('employees/create', [Admin\EmployeeController::class, 'create'])->name('admin.employee.create');
    Route::post('employees/store', [Admin\EmployeeController::class, 'store'])->name('admin.employee.store');
    Route::get('employees/{id}', [Admin\EmployeeController::class, 'show'])->name('admin.employee.show');
    Route::get('employees/edit/{id}', [Admin\EmployeeController::class, 'edit'])->name('admin.employee.edit');
    Route::delete('employees/{id}', [Admin\EmployeeController::class, 'destroy'])->name('admin.employee.destroy');

    // My Calendar Route
    Route::get('my-calendar', [Admin\MyCalendarController::class, 'index'])->name('admin.my-calendar');

    // Employee Leaves Route
    Route::get('leaves', [Admin\LeaveController::class, 'index'])->name('admin.leaves');
    Route::get('leaves/create', [Admin\LeaveController::class, 'create'])->name('admin.leaves.create');
    Route::post('leaves/store', [Admin\LeaveController::class, 'store'])->name('admin.leaves.store');
    Route::get('leaves/{id}', [Admin\LeaveController::class, 'show'])->name('admin.leaves.show');
    Route::get('leaves/edit/{id}', [Admin\LeaveController::class, 'edit'])->name('admin.leaves.edit');
    Route::delete('leaves/{id}', [Admin\LeaveController::class, 'destroy'])->name('admin.leaves.destroy');


    // Admin My Profile Route
    Route::get('my-profile', [Admin\UserController::class, 'myProfile'])->name('admin.myProfile');
    // Admin My Profile update
    Route::post('my-profile/update', [Admin\UserController::class, 'myProfileUpdate'])->name('admin.myProfileUpdate');
});

// Employee Dashboard Related Group
Route::group(['prefix' => 'employee', 'middleware' => 'auth'], function () {
    // Employee Dashboard Route
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
    // Employee Dashboard Route
    Route::get('dashboard', [Employees\EmployeeController::class, 'index'])->name('employee.dashboard');

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
