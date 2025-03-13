<?php

namespace App\Livewire;

use Livewire\Component;

class BannerList extends Component
{
    public $reverse;

    public function mount($reverse = false) {
        $this->reverse = $reverse;
    }

    public function render()
    {
        return view('livewire.banner-list', [
            'reverse' => $this->reverse
        ]);
    }
}
