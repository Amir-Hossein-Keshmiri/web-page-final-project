<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class register_controller extends Controller
{
    public function show_register()
    {
        return view('register');
    }

    public function register_to_profile(Request $request) {
        
        $request->validate([
            'phone' => 'required|unique:users|digits:11',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // $this->send_sms($user->phone, "You register in successfully");

        Auth::login($user);

        return redirect()->route('profile');
    }

    private function send_sms($phone, $message) {
        
        
    }
}
