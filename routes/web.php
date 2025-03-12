<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'livewire.pages.home.home-page')->name('home');
Route::view('/events', 'livewire.pages.events.event-page')->name('events');

// use Livewire\Volt\Volt;

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require __DIR__.'/auth.php';
