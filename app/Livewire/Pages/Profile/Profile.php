<?php

namespace App\Livewire\Pages\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;


class Profile extends Component
{
    public $user;
    public $profile;

    public function mount() {
        $this->user = auth()->user();
        $this->profile = Storage::url($this->user->avatar);
    }

    public function render()
    {
        return view('livewire.pages.profile.profile');
    }
}
