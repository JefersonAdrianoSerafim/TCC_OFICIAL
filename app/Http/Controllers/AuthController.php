<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        validator(request()->all(), [
            'emailLogin' => ['required', 'email'],
            'passwordLogin' => ['required']
        ])->validate();

        // if(request()->remember)
        // {
        //     $user = User::where('email', request('email'))->first();

        //     if(Hash::check(request('password'), $user->getAuthPassword()))
        //     {
                
        //         return [
        //             'token' => $user->createToken(time())->plainTextToken 
        //         ];
        //     };
        // }
        // else
        // {
            $credentials = [
                'email' => request()->input('emailLogin'),
                'password' => request()->input('passwordLogin'),
            ];
            if(auth()->attempt($credentials))
            {
                return redirect()->route('user.index');
            };

                return redirect()->back()->withErrors(['login' => 'Usuario nao cadastrado']);
        //}

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('user.create');
    }
}
