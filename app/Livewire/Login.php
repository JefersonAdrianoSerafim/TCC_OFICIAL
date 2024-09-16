<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;

class Login extends Component
{

    public $name;
    public $email;
    public $password;

    public function createUser()
    {
        
        // Make a POST request to the store method in the UserController
        $response = Http::post(route('user.store'), [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        // Handle the response from the controller
        if ($response->successful()) {
            // Redirect with a flash message
            session()->flash('message', 'User created successfully!');
            return redirect()->route('user.index');
        } else {
            // Handle the error case
            $errors = $response->json('errors');
            foreach ($errors as $field => $messages) {
                $this->addError($field, implode(', ', $messages));
            }
        }
    }
    
    public function render()
    {
        return view('livewire.login.login');
    }
}
