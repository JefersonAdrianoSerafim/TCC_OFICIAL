<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTeamController extends Controller
{

    public function findTeamsByUser()
    {
        $userTeams = User_Team::where('id_user_fk', auth()->user()->id)->get();
        $teams = null;
        foreach($userTeams as $userTeam)
        {
            $teams += team->findById($userTeam->id_team_fk);
        }

        return $teams;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
