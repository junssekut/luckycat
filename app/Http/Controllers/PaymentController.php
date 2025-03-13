<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Benefit;
use App\Models\TicketBenefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Masmerise\Toaster\Toaster;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        if (!$request->input('payment_method')) {
            Toaster::error('You must select a payment method.');
            return back();
        }
        $request->validate([
            'payment_method' => 'required|string',
            'benefit_ids' => 'array',
            'benefit_ids.*' => 'exists:benefits,id',
        ]);

        $checkout = json_decode($request->input('checkout'), true);
        $paymentMethod = $request->input('payment_method');
        $benefitIds = $request->input('benefit_ids', []);
        $benefits = Benefit::whereIn('id', $benefitIds)->get();
        $benefitTotalPrice = $benefits->sum('price');
        $totalPrice = $checkout['total_price'] + $benefitTotalPrice;

        Session::put('payment', [
            'checkout' => $checkout,
            'payment_method' => $paymentMethod,
            'benefits' => $benefits,
            'total_price' => $totalPrice,
        ]);

        // dd(Session::get('payment'));

        $ticket = Ticket::create([
            'event_id' => $checkout['event_id'],
            'user_id' => auth()->user()->id,
            'price' => $totalPrice,
        ]);

        foreach ($benefits as $benefit) {
            TicketBenefit::create([
                'ticket_id' => $ticket->id,
                'benefit_id' => $benefit->id,
                'price' => $benefit->price,
            ]);
        }

        return redirect()->route('payment.confirmation');
    }

    public function confirmation()
    {
        $payment = Session::get('payment');

        if (!$payment) {
            return redirect()->route('events')->with('error', 'No payment data found.');
        }

        return view('livewire.pages.events.detail.payment-confirmation', compact('payment'));
    }
}