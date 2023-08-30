<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|',
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
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
}