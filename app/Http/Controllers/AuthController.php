<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        validator(request()->all(), [
            'email_user' => ['required', 'email'],
            'password_user' => ['required']
        ])->validate();

        $credentials = request()->only(['email_user', 'password_user']);

        $credentials['email'] = $credentials['email_user'];
        $credentials['password'] = $credentials['password_user'];

        unset($credentials['email_user'], $credentials['password_user']);

        if(auth()->attempt($credentials))
        {
            return redirect()->route('user.index');
        };

        return redirect()->back()->withErrors(['email_user' => 'Inválido']);

    }
}
