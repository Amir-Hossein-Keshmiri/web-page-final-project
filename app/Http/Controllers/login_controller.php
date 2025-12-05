<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class login_controller extends Controller
{
    public function show_login()
    {
        return view('login');
    }

    public function login_to_profile(Request $request) {
        
        $request->validate([
            'phone' => 'required|digits:11',
            'password' => 'required',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            
            Auth::login($user);

            // $this->send_sms($user->phone, "You login in successfully");

            return redirect()->route('profile');
        }

        return back()->with('error', 'Invalid phone or password');
    }

    private function send_sms($phone, $message) {
        
        
    }
}
