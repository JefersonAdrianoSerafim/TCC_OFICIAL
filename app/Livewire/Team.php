<?php

namespace App\Livewire;

use Livewire\Component;

class Team extends Component
{

    public $activeGroupTeamL ='create';
    public $activeSubjectATeamR ='create';
    public function setActiveGroupTeamL($component)
    {
        $this->activeGroupTeamL = $component;
    }

    
    public function setActiveSubjectAgendaR($component)
    {
        $this->activeSubjectAgendaR = $component;
    }
    public function render()
    {
        return view('livewire.menu.team');
    }
}
