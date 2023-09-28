<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ResendEmailVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and email is not verified
        if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            // Resend the verification email
            Auth::user()->sendEmailVerificationNotification();
        }

        return $next($request);
    }
}
