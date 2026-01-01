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

Route::middleware(['auth'])->group(function () 

    {

        Route::get('/profile', [ProfileController::class, 'show_profile'])
            ->name('profile');
        
        Route::get('/profile/add_balance', [ProfileController::class, 'show_add_balance'])
            ->name('add_balance');

        Route::post('/profile/add_balance/confirm', [ProfileController::class, 'show_add_balance_confirm'])
            ->name('add_balance_confirm');

        Route::post('/profile/add_balance/result', [ProfileController::class, 'add_balance_result'])
            ->name('add_balance_result');
    }
);

// ============================================================
