<?php

namespace App\Livewire\Pages\Events;

use Livewire\Component;

class EventCard extends Component
{
    public $event;

    public function mount($event)
    {
        $this->event = $event;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <a class="group border-b-1 border-b-black border-r-1 border-r-black w-full sm:h-[400px]">
            <div class="flex flex-col h-full">
                <div
                    class="bg-gray-300 animate-pulse h-[80%] object-cover transition duration-300 ease-in-out flex justify-center items-center">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                    </svg>
                </div>
                <div
                    class="animate-pulse flex flex-col w-full h-[20%] font-Geomisans text-black px-2 py-4 sm:px-6 sm:py-4 gap-4">
                    <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
                    <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
                </div>
            </div>
        </a>
        HTML;
    }
    
    public function render()
    {
        return view('livewire.pages.events.event-card');
    }
}
