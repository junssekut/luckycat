<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class TopBar extends Component
{
    public function render()
    {
        return view('livewire.topbar');
    }

    public function logout()
    {
         // Proses logout pengguna
        Auth::logout();

        // Invalidate session dan regenerasi token CSRF
        session()->invalidate();
        session()->regenerateToken();

        // Redirect ke halaman login (pastikan route 'login' telah didefinisikan)
        return redirect()->route('login');
    }  
}
