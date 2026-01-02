<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function show_profile_admin(Request $request)
    {
        if ((!Auth::check()) || (Auth::user()->email !== 'admin@gmail.com'))
        {
            return redirect('/');
        }

        return view('admin');
    }
}
