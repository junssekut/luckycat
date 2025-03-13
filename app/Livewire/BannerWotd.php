<?php

namespace App\Livewire;

use Livewire\Component;

class BannerWotd extends Component
{
    public $reverse;

    public function mount($reverse = false)
    {
        $this->reverse = $reverse;
    }

    public function render()
    {
        return view('livewire.banner-wotd', [
            'reverse' => $this->reverse
        ]);
    }
}