<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],
        );

        $email = $request->input('email');
        $password = $request->input('password');

        // Hash the password before attempting authentication


        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = User::where('email', $email)->first();

            Auth::login($user);
            if(in_array('Admin', $user->roles()->pluck('name')->toArray())) {
                return redirect()->route('admin')->with('success', 'Your Login successfully!');
            } else {
                return redirect()->route('dashboard')->with('success', 'Your Login successfully!');
            }
        } else {
            return back()->with('error', 'Invalid email or password')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
