<?php

namespace App\Http\Controllers;

use App\Models\User_Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserTeamController extends Controller
{

    function isBcryptHash($hash)
    {
        return preg_match('/^\$2[ayb]\$.{56}$/', $hash);
    }

    public function create($id, $hash)
    {

        if($this->isBcryptHash($hash))
        {
            //return "<h1> uga uga </h1>";
            if(Hash::check($id, $hash));
            {
                //return "<h1> buga buga </h1>";
                $exists = User_team::where('id_team_fk', $id)->where('id_user_fk', auth()->user()->id)->first();
                if($exists == null)
                {
                    return view('teste')->with('id', $id);
                }
                
            }
        }
        
        
        return redirect()->route('user.index');
        
    }

    public function store($id)
    {
        User_Team::create([
            'id_team_fk' => $id,
            'id_user_fk' => auth()->user()->id
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
