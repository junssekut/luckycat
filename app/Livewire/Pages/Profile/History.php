<?php

namespace App\Livewire\Pages\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

class History extends Component
{
    public $user;
    public $tickets;

    public function mount() {
        $this->user = auth()->user();
        $this->tickets = Ticket::where('user_id', $this->user->id)->get();
    }

    public function render()
    {
        return view('livewire.pages.profile.history', [
            'tickets' => $this->tickets,
        ]);
    }
}