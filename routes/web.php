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

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'show_login'])->name('login');
Route::post('/login', [LoginController::class, 'login_to_profile'])->name('login_to_profile');

// ============================================================

// /logout

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function ()

    {
    
        Auth::logout();
    
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');

    }

)->name('logout');

// ============================================================

// /register

use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'show_register'])->name('register');
Route::post('/register', [RegisterController::class, 'register_to_profile'])->name('register_to_profile');

// ============================================================

// /profile

use App\Http\Controllers\ProfileController;

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'show_profile'])->name('profile');
    Route::get('/profile/add_balance', [ProfileController::class, 'redirect_to_payment']);

});

// ============================================================
