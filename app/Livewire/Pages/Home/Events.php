<?php

namespace App\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Event;

class Events extends Component
{
    public $featuredEvent;
    public $randomEvents;
    
    public function mount() {
        $this->featuredEvent = Event::find(3);

        // Fetch 6 random events
        $this->randomEvents = Event::where('id', '!=', $this->featuredEvent->id)
                                   ->inRandomOrder()
                                   ->take(6)
                                   ->get();
    }

    public function render()
    {
        return view('livewire.pages.home.events', [
            'featuredEvent' => $this->featuredEvent,
            'randomEvents' => $this->randomEvents,
        ]);
    }
}
