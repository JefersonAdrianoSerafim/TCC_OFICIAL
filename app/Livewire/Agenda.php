<?php

namespace App\Livewire;

use Livewire\Component;

class Agenda extends Component
{

    public $activeComponentAgendaL ='create';
    public $activeSubjectAgendaR ='create';
    public function setActiveComponentAgendaL($component)
    {
        $this->activeComponentAgendaL = $component;
    }

    
    public function setActiveSubjectAgendaR($component)
    {
        $this->activeSubjectAgendaR = $component;
    }

    public function render()
    {
        return view('livewire.menu.agenda');
    }
}
