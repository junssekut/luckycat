<?php

namespace App\Livewire\Pages\Events;

use Livewire\WithPagination;
use Livewire\Component;

class Events extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.pages.events.events');
    }
}
