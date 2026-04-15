<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Models\Country;
use App\Models\Language;
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
Route::get('countries', function () {

    $countries = file_get_contents(storage_path('countries/languages.json'));
    $languages_array = json_decode($countries, true);

    foreach ($languages_array as $single_country) {

        $country_name = $single_country['country'];
        $country_match = Country::where('country_name', $country_name)->first();

        if (isset($country_match->id)) {
            $country_id = $country_match->id;

            $languages = $single_country['languages'];

            if (isset($country_id) && !empty($country_id)) {
                foreach ($languages as $language) {
                    $lang = new Language;
                    $lang->language_name = $language;
                    $lang->country_id = $country_id;
                    $lang->save();
                }
            }
        }
    }
});

