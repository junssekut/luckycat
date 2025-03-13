<?php

namespace App\Livewire\Pages\Events;

use Livewire\WithPagination;
use Livewire\Component;

use App\Models\Event;

class Events extends Component
{
    use WithPagination;


    public function render()
    {
        $events = Event::paginate(perPage: 6);
        return view('livewire.pages.events.events', [
            'events' => $events
        ]);
    }
}
