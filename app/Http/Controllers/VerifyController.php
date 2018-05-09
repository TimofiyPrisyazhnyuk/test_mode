<?php

namespace App\Http\Controllers;

use App\User;

class VerifyController extends Controller
{


    /**
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify($token)
    {
        User::where('email_token', $token)->firstOrFail()
            ->update(['email_token' => null]);

        return redirect()->route('home')->with('success','Account verified');
    }

}
