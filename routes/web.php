<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Register;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Profile;
use App\Livewire\Pages\History;
use App\Livewire\Pages\UpdateProfile;
use App\Livewire\Pages\TicketDetails;
use App\Livewire\TopBar;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Mail;

Route::view('/', 'livewire.pages.home.home-page')->name('home');
Route::view('/contact', 'livewire.pages.contact.contact')->name(name: 'contact');
Route::view('/privacy-policy', 'livewire.pages.other.privacy-policy')->name(name: 'privacy-policy');
Route::view('/terms-of-services', 'livewire.pages.other.terms-of-services')->name(name: 'terms-of-services');

Route::view('/events', 'livewire.pages.events.event-page')->name('events');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

Route::post('/checkout/{event}', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/summary', [CheckoutController::class, 'summary'])->name('checkout.summary');

Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
Route::get('/payment/confirmation', [PaymentController::class, 'confirmation'])->name('payment.confirmation');

// use Livewire\Volt\Volt;
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/history', History::class)->name('history');
    Route::get('/update-profile', UpdateProfile::class)->name('update-profile');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/logout',[TopBar::class,'logout'])->name('logout');

Route::get('/ticket-details',TicketDetails::class)->name('ticket-details');
Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('arzunadio@gmail.com')
                ->subject('Test Email');
    });

    return 'Email sent!';
});