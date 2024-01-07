<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

try {
    // Code to save the data to the database
} catch (QueryException $e) {
    // Handle the exception or display an error message
    dd($e->getMessage());

    return back()->withInput()->withErrors(['error' => 'An error occurred while saving the data.']);
}

class StoreController extends Controller
{
    public function Store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'confirmed',
                'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{8,}$/',
            ]
        ],
            [
                'password.regex' => 'Password should have 8 characters. Atleast one captial letter, one number and one special character.',
                'password.confirmed' => 'The password confirmation does not match.',
            ]);

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        $user->assignRole('User');
        // Manually send the verification email
        event(new Registered($user));

        return redirect()->route('login')->with('success', 'Email verification mail is sent to your email ID!');
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
