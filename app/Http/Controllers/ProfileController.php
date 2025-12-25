<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show_profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function redirect_to_payment() {
        
        return redirect('https://google.com');
    }
}
