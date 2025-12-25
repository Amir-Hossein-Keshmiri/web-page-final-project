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
    public function show_login()
    {
        return view('login');
    }

    public function login_to_profile(Request $request) {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            
            Auth::login($user);

            Mail::to($user->email)->send(new LoginNotification($user));


            return redirect()->route('profile');
        }

        return back()->with('error', 'Invalid phone or password');
    }
}
