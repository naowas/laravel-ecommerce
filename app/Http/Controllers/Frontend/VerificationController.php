<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();
        if (!is_null($user)) {
            $user->status = 1;
            $user->remember_token = null;
            $user->save();
            session()->flush('succes', 'Registration has been completed. Login now');
            return redirect('login');
        } else {
            session()->flush('errors', 'Unmatched token');
            return redirect('/');
        }
    }
}
