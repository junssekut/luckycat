<?php

namespace App\Livewire\Pages\Contact;

use Livewire\Component;
use App\Models\Subscription;
use Masmerise\Toaster\Toaster;

class ContactUs extends Component
{
    public $email;

    public function subscribe()
    {
        $validated = $this->validate([
            'email' => 'required|email',
        ]);

        if (Subscription::where('email', $validated['email'])->exists()) {
            Toaster::error('This email is already subscribed to our newsletter.');
            return;
        }

        Subscription::create([
            'email' => $validated['email'],
        ]);

        Toaster::success('You have successfully subscribed to our newsletter!');

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.pages.contact.contact-us');
    }
}
