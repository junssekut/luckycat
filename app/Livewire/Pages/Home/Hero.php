<?php

namespace App\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Event;

class Hero extends Component
{
    public $upcomingEvent;

    public function mount()
    {
        $this->upcomingEvent = Event::find(4);

        $this->upcomingEvent->title = 'HINDIA';
        $this->upcomingEvent->thumbnail = asset('assets/images/baskara-putra.png');
    }


    public function render()
    {
        return view('livewire.pages.home.hero', [
            'upcomingEvent' => $this->upcomingEvent
        ]);
    }
}
