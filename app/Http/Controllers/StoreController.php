<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Add the unique validation rule
            'password' => 'required|confirmed',
        ]);

        // Create a new user using Eloquent ORM
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

    //     $user = user::create($validatedData);
        // if ($user->save()) {

        // }
        //  else {
    //     dd($user->getErrors());
        // }

        // Log in the user automatically after registration
        Auth::login($user);

        return redirect()->route('home')->with('success', ' Your Account is created successfully!');
    }
}
