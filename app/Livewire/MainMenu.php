<?php

namespace App\Livewire;

use Livewire\Component;


class MainMenu extends Component
{
    public $activeComponent;

    public function setActiveComponent($component)
    {
        $this->activeComponent = $component;
    }
    public function render()
    {
        return view('livewire.main-menu');
    }
}
