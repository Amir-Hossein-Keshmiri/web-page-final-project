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

    public function show_add_balance() {
        
        return view('add_balance');
    }

    public function show_add_balance_confirm(Request $request)
    {
        $amount = $request->amount;

        return view('add_balance_confirm', compact('amount'));
    }

    public function add_balance_result(Request $request)
    {
        $status = $request->status;
        $amount = $request->amount;
        
        $user = Auth::user();

        if ($status === 'success')
        {
            $user->balance += $amount;
            $user->save();

            return redirect()
                ->route('profile')
                ->with('success', 'Balance increased successfully!');
        }

        return redirect()
            ->route('profile')
            ->with('error', 'Balance increase failed.');
    }
}
