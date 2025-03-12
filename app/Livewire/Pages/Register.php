<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        if (auth()->check()) {
            return redirect()->to('/home');
        }
        return view('livewire.pages.register');
    }

    public function save() 
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->role = 'user';
        $user->save();
        session()->flash('success','Account created successfully');
        return $this->redirect('/login', navigate: true);
    }
}
