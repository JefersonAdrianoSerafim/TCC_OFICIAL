<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    private $msgs =
        [
            "required" => "Obrigatório!",
            "max" => "[:attribute] só pode ter no máximo [:max] caracteres!",
            "min" => "[:attribute] deve ter no mínimo [:min] caracteres!",
            "unique" => "Esse [:attribute] já existe!"
        ];

    private $regras =
        [
            'name' => 'required|max:50|min:4',
            'email' => 'required|max:50|unique:users',
            'password' => 'required|max:25|min:8'
        ];





    public function index()
    {
        $users = User::all();
        $logged = auth()->user();

        $chartData = [
            ['Year', 'Sales'],
            ['2019', 1000],
            ['2020', 1170],
            ['2021', 660],
            ['2022', 1030]
        ];


        return view('user.indext', compact('users','chartData', 'logged'));
    }

    public static function verifyIfCommitmentNull()
    {
        $exists = 1;
        foreach(auth()->user()->subjects as $subject)
        {
            if ($subject->commitments->isNotEmpty())
            {
                $exists = $exists * 0;
            }
        }
        return $exists;
    }

    public function create()
    {
        return view('user.create');
    }

    public function store()
    {
        request()->validate($this->regras, $this->msgs);
        
        User::create([
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => Hash::make(request()->input('password')),
        ]);
        $credentials = request()->only(['email', 'password']);
        auth()->attempt($credentials);
        return redirect()->route('user.index');

    }

    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('user.index');
        }
        return view('user.show', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update($id)
    {
        $user = User::find($id);

        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = request()->password;
        $user->save();
        return redirect()->back();

    }

    public function destroy(string $id)
    {
        $user = User::find($id);

        if (isset($user)) {
            $user->delete();
            //return redirect()->route('user.index');
            return redirect();
        }
        return redirect();
    }
}
