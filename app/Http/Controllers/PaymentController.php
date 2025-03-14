<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Benefit;
use App\Models\TicketBenefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Masmerise\Toaster\Toaster;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

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
        $event = $checkout['event'];
        $total_price = $totalPrice;
        $payment_method = $paymentMethod;

        $ticket = Ticket::create([
            'event_id' => $checkout['event_id'],
            'user_id' => auth()->user()->id,
            'price' => $totalPrice,
        ]);

        Session::put('payment', [
            'checkout' => $checkout,
            'payment_method' => $paymentMethod,
            'benefits' => $benefits,
            'total_price' => $totalPrice,
            'ticket' => $ticket
        ]);

        foreach ($benefits as $benefit) {
            TicketBenefit::create([
                'ticket_id' => $ticket->id,
                'benefit_id' => $benefit->id,
                'price' => $benefit->price,
            ]);
        } 
        
        // Generate PDF
        // $pdf = PDF::loadView('pdf.ticket', compact('event', 'checkout', 'total_price', 'benefits', 'payment_method'));
        // $pdfPath = storage_path('app/public/tickets/' . $ticket->id . '.pdf');
        // $pdf->save($pdfPath);

        // Generate PDF
        $pdf = PDF::loadView('pdf.ticket', compact('event', 'checkout', 'total_price', 'benefits', 'payment_method', 'ticket'));
        $pdfContent = $pdf->output();
        $pdfPath = 'tickets/' . $ticket->id . '.pdf';
        Storage::disk('public')->put($pdfPath, $pdfContent);

        // Send email
        // Mail::send('emails.ticket', compact('total_price', 'checkout'), function ($message) use ($pdfPath) {
        //     $message->to(auth()->user()->email)
        //             ->subject('Your E-ticket')
        //             ->attach($pdfPath);
        // });

        Mail::send('pdf.email', compact('event', 'checkout', 'total_price', 'benefits', 'payment_method', 'ticket'), function ($message) use ($pdfPath, $ticket) {
            $message->to(auth()->user()->email)
                    ->subject('Your E-ticket #' . $ticket->id . ' has been published!')
                    ->attach(storage_path('app/public/' . $pdfPath));
        });

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