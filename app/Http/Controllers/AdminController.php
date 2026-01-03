<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function show_profile_admin(Request $request)
    {
        return view('admin');
    }

    public function show_users_list(Request $request)
    {
        $users = User::where('email', '!=', 'admin@gmail.com')->get();

        return view('users_list', compact('users'));
    }

    public function show_product_list(Request $request)
    {
        return view('product_list');
    }

    public function delete_user($id)
    {
        User::where('id', $id)
            ->where('email', '!=', 'admin@gmail.com')
            ->delete();

        return back();
    }
}
