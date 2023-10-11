<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forgetpassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|exists:users',
            ]
        );
        $token = str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
           'created_at' => carbon::now(),
        ]);

        Mail::send('auth.email.forgetpassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have sent you an email with a reset password link.');
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.ForgetPasswordlink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate(
            [
                // 'email' => 'required|email|exist :users',
                'email' => 'required|email|exists:users,email',
                 'password' => 'required|min:6|confirmed',
            ]
        );
        $password_reset_request = DB::table('password_resets')
        ->where('email', $request->input('email'))
        ->where('token', $request->token)
        ->first();

        if (!$password_reset_request) {
            return back()->with('error', 'invalid Token!');
        }

        user::where('email', $request->input('email'))
        ->update(['password' => Hash::make($request->input('password'))]);

        DB::table('password_resets')
        ->where('email', $request->input('email'))
        ->delete();

        return redirect('/login')->with('message', 'your password has been changed');
    }
}
