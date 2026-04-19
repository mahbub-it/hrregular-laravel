<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Models\Country;
use App\Models\Language;
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

    // User List Route
    Route::get('users', [UserController::class, 'index'])->name('admin.users');

    // Employee List Route
    Route::get('employees', [EmployeeController::class, 'index'])->name('admin.employees');
});

// Authentication Related Group for Guest User
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'login']);
});

// Countries List Route
Route::get('countries', function () {

    //

});

