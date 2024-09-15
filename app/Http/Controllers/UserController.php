<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        User::create([
            'name_user' => $request->input('name_user'),
            'email_user' => $request->input('email_user'),
            'password_user' =>$request->input('password_user'),
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        //dd($user->toSql());
        if(!$user){
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

        if(isset($user))
        {
            $user->delete();
            //return redirect()->route('user.index');
            return redirect()->away('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        }
        return redirect()->away('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    }
}
