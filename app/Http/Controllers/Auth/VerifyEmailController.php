<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use Illuminate\Auth\Events\Verified;
>>>>>>> master
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

<<<<<<< HEAD
        $request->fulfill();
=======
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
>>>>>>> master

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}
