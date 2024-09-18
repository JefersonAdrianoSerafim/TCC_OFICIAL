<?php

namespace App\Livewire;

use App\Models\Team as Time;
use Livewire\Component;

class Team extends Component
{

    public $activeGroupTeamL ='create';
    public $activeSubjectATeamR ='create';

    public $selected_team = null;

    public function setActiveGroupTeamL($component, string $id)
    {
        $team = Time::find($id);
        $this->activeGroupTeamL = $component;
        $this->selected_team = $team;

    }
    public function render()
    {
        return view('livewire.menu.team');
    }
}
