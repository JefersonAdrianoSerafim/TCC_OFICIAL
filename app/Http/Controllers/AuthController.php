<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        if(request()->remember)
        {
            $user = User::where('email', request('email'))->first();

            if(Hash::check(request('password'), $user->getAuthPassword()))
            {
                
                return [
                    'token' => $user->createToken(time())->plainTextToken 
                ];
            };
        }
        else
        {
            $credentials = request()->only(['email', 'password']);
            if(auth()->attempt($credentials))
            {
                return redirect()->route('user.index');
            };

                return redirect()->back()->withErrors(['email' => 'Inválido']);
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('user.create');
    }
}
