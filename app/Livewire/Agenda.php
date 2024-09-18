<?php

namespace App\Livewire;

use App\Models\Commitment;
use App\Models\Subject;
use Livewire\Component;

class Agenda extends Component
{

    public $activeComponentAgendaL ='create';
    public $activeSubjectAgendaR ='create';
    public $selected_commitment = null;
    public $selected_subject = null;
    
    public function setActiveComponentAgendaL($component, string $id)
    {
        $commitment = Commitment::find($id);
        $this->activeComponentAgendaL = $component;
        $this->selected_commitment = $commitment;
    }

    
    public function setActiveSubjectAgendaR($component, string $id)
    {
        $subject = Subject::find($id);
        $this->activeSubjectAgendaR = $component;
        $this->selected_subject = $subject;
    }

    public function render()
    {
        return view('livewire.menu.agenda');
    }
}
