<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    
    public function render()
    { 
        return view('livewire.pages.login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid email or password!');
        } else {
            return $this->redirect('/profile',navigate: true);
        }
    }
}
