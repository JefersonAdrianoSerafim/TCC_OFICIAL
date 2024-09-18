<?php

namespace App\Http\Controllers;
use App\Models\User_Team;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TeamController extends Controller
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
            'name_team' => 'required|max:50|min:4',
            'color_team' => 'required',
        ];

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
    public function store()
    {
        request()->validate($this->regras, $this->msgs);
        
        $id_team = Team::create([
            'name_team' => request()->input('name_team'),
            'color_team' => request()->input('color_team')
        ])->id;

        User_Team::create([
            'id_team_fk' => $id_team,
            'id_user_fk' => auth()->user()->id,
            'creator_userteam' => true
        ]);
        return redirect()->back();
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
    public function update(string $id)
    {
        $team = Team::find($id);

        $team->name_team = request()->name_team;
        $team->color_team = request()->color_team;
        $team->save();
        return redirect()->back();
    }

    public function destroySubjectByTeam(Team $team)
    {   
        $cc = new SubjectController();

        foreach($team->subjects as $subject)
        {
            $cc->destroy($subject->id);
        }
    }

    public function destroy(string $id)
    {
        $team = Team::find($id);

        if (isset($team)) {
            DB::table('user_teams')->where('id_team_fk', $team->id)->delete();
            $this->destroySubjectByTeam($team);
            $team->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
