<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Profile extends Component
{
    public $user;
    public function mount() {
    $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.pages.profile');
    }
}
