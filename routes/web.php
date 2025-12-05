<?php

// ============================================================

// /

Route::get('/', function () 
    {
        return view('welcome');
    }
);

// ============================================================

// /login

use App\Http\Controllers\login_controller;

Route::get('/login', [login_controller::class, 'show_login'])->name('login');
Route::post('/login', [login_controller::class, 'login_to_profile'])->name('login_to_profile');

// ============================================================

// /register

use App\Http\Controllers\register_controller;

Route::get('/register', [register_controller::class, 'show_register'])->name('register');
Route::post('/register', [register_controller::class, 'register_to_profile'])->name('register_to_profile');

// ============================================================

// /profile

use App\Http\Controllers\profile_controller;

Route::get('/profile', [profile_controller::class, 'show_profile'])->name('profile');
Route::get('/profile/add_balance', [profile_controller::class, 'redirect_to_payment']);


// ============================================================
