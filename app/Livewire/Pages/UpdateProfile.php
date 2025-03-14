<?php

namespace App\Livewire\Pages;

use App\Events\UserUpdated;
use Livewire\Component;

class UpdateProfile extends Component
{
    public $user;

    public function mount() {
        $this->user = auth()->user();

        event(new UserUpdated($this->user)); // just trying to see if this works
    }

    public function render()
    {
        return view('livewire.pages.update-profile');
    }
}
