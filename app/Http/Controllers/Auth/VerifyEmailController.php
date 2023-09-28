<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'login';

    public function __invoke(Request $request)
    {
        $user = User::findOrFail($request->route('id'));

        if (! hash_equals(sha1($user->getEmailForVerification()), (string) $request->route('hash'))) {
            throw new AuthorizationException;
        }


        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route($this->redirectTo)->with('success', 'Your email is verified successfully!');
    }
}
