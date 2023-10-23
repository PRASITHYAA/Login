<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('Users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',//|confirmed
        ]);

        User::create($validatedData);

        Session::flash('success', 'User created successfully!');

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('Users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'min:6',
        ]);

        $user->update($request->all());

        Session::flash('success', 'User updated successfully!');

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        Session::flash('success', 'User deleted successfully!');

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ],
            [
                'password.confirmed' => 'The password confirmation does not match.',
            ]);
        $user = auth()->user();
        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect()->route('change.password')->with('success', 'Password changed successfully!');
        } else {
            return redirect()->route('change.password')->withErrors(['old_password' =>'Invalid old password!']);
        }
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);
        $user->update($request->all());
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
