<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Benefit;
use App\Models\TicketBenefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Masmerise\Toaster\Toaster;

class CheckoutController extends Controller
{
    public function process(Request $request, Event $event)
    {
        if (!auth()->user()) {
            Toaster::error('You must be logged in first in order to buy tickets for event ' . $event->name);
            return back();
        }

        $request->validate([
            'quantity' => 'required|integer|min:1',
            'benefit_ids' => 'array',
            'benefit_ids.*' => 'exists:benefits,id',
        ]);

        $quantity = $request->input('quantity');
        $benefitIds = $request->input('benefit_ids', []);
        $benefits = Benefit::whereIn('id', $benefitIds)->get();
        $benefitTotalPrice = $benefits->sum('price');
        $totalPrice = ($event->price * $quantity) + $benefitTotalPrice;

        Session::put('checkout', [
            'event_id' => $event->id,
            'event' => $event,
            'quantity' => $quantity,
            'benefit_ids' => $benefitIds,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('checkout.summary');
    }

    public function summary()
    {
        $checkout = Session::get('checkout');

        if (!$checkout) {
            return redirect()->route('events')->with('error', 'No checkout data found.');
        }

        $event = Event::find($checkout['event_id']);
        $benefits = $event->benefits;

        return view('livewire.pages.events.detail.checkout-summary', compact('checkout', 'benefits'));
    }
}