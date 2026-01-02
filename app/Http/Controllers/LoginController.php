<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\LoginNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    private const ADMIN_EMAIL = 'admin@gmail.com';
    private const ADMIN_PASSWORD = '123456789';

    public function show_login()
    {
        return view('login');
    }

    public function login_to_profile(Request $request) {
        
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            
            Auth::login($user);

            $request->session()->regenerate();

            if ($user->email === self::ADMIN_EMAIL && $request->password === self::ADMIN_PASSWORD)
            {
                session(['is_admin' => true]);
                
                return redirect('/admin');
            }

            Mail::to($user->email)->send(new LoginNotification($user));

            return redirect()->route('profile');
        }

        return back()->with('error', 'Invalid phone or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        session()->forget('is_admin');

        return redirect('/');
    }
}
