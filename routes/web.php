<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Admin Dashboard Related Group
Route::group(['prefix' => 'admin'], function () {
    // Dashboard Route
    Route::get('dashboard', [AdminController::class, 'index']);

    // Employee List Route
    Route::get('employee', [EmployeeController::class, 'index']);
});

// Authentication Related Group for Guest User
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'login']);
});

// Countries List Route
Route::get('/countries', function () {
    // Manually define the full path since it's not in storage/app/
    $path = storage_path('countries/countries.json');

    if (!file_exists($path)) {
        return response()->json(['error' => 'File not found at ' . $path], 404);
    }

    $json = file_get_contents($path);

    // Check if the file is empty
    if (empty(trim($json))) {
        return response()->json(['error' => 'File is empty'], 500);
    }

    $data = json_decode($json, true);

    // If data is empty but valid JSON, it returns {}
    echo "<pre>";
    print_r(array_column($data, 'name'));
    echo "</pre>";

});

