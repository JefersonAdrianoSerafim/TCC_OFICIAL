<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $regrasLogin =
        [
            'email_user' => 'required|email_user',
            'password_user' => 'required',
        ];
    private $msgs =
        [
            "required" => "Obrigatório!",
            "max" => "[:attribute] só pode ter no máximo [:max] caracteres!",
            "min" => "[:attribute] deve ter no mínimo [:min] caracteres!",
            "unique" => "Esse [:attribute] já existe!",
            "email_user" => "Esse email não está cadastrado"
        ];

    private $regras =
        [
            'name_user' => 'required|max:50|min:4',
            'email_user' => 'required|max:50|unique:users',
            'password_user' => 'required|max:25|min:8'
        ];





    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('user.indext', compact('users'));
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->regras, $this->msgs);
        
        User::create([
            'name_user' => $request->input('name_user'),
            'email_user' => $request->input('email_user'),
            'password_user' => Hash::make($request->input('password_user')),
        ]);

        return redirect()->route('user.index')->with('message', 'User created successfully!');

    }

    public function login(Request $request)
    {
        $request->validate($this->regrasLogin, $this->msgs);

        if (auth()->attempt($request->only(['email_user', 'password_user']))) {
            return "<h1> inaga </h1>";
            // return view('user.index', ['logged' => auth()->user()]);
        }

        return "<h1> asdasdas </h1>";

        // return redirect()->back()->withErrors(['email' => 'Invalid Credential']);
    }
    public function show(string $id)
    {
        $user = User::find($id);
        //dd($user->toSql());
        if (!$user) {
            return redirect()->route('user.index');
        }
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name_user = $request->name_user;
        $user->email_user = $request->email_user;
        $user->password_user = $request->password_user;
        $user->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (isset($user)) {
            $user->delete();
            //return redirect()->route('user.index');
            return redirect()->away('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        }
        return redirect()->away('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    }
}
