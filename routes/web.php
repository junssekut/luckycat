<?php

use Illuminate\Support\Facades\Route;

// use Livewire\Volt\Volt;

use App\Livewire\Pages\Register;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Profile;
use App\Livewire\Pages\History;
use App\Livewire\Pages\UpdateProfile;

Route::view('/', 'livewire.pages.home.home-page')->name('home');
Route::view('/events', 'livewire.pages.events.event-page')->name('events');

// use Livewire\Volt\Volt;
Route::middleware(['auth'])->group(function () {
Route::get('/profile', Profile::class)->name('profile');
Route::get('/history', History::class)->name('history');
Route::get('/update-profile', UpdateProfile::class)->name('update-profile');
});
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::view('/', 'livewire.pages.home-page')->name('home');
Route::view('/explore', 'livewire.pages.explore-page')->name('explore');
Route::view('/contact', 'livewire.pages.contact-page')->name('contact');

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
