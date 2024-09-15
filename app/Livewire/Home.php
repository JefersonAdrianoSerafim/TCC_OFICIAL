<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\UserController;

class Home extends Component
{

    public $users;

    public function mount()
    {
        // Call the UserController's index method
        $userController = new UserController();
        $this->users = $userController->index()->getData()['users'];  // Access the 'users' variable from the returned view
    }

    public function render()
    {
        return view('livewire.home');
    }
}
