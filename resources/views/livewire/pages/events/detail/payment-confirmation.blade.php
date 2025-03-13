<x-layouts.app>
    <div class="w-full min-h-screen flex flex-col items-center justify-center">
        <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">Payment Confirmation</h1>
            <p class="text-lg mb-2">Event: {{ $payment['checkout']['event_id'] }}</p>
            <p class="text-lg mb-2">Quantity: {{ $payment['checkout']['quantity'] }}</p>
            <p class="text-lg mb-2">Total Price: RP{{ number_format($payment['total_price'], 0, ',', '.') }}
            </p>
            <p class="text-lg mb-2">Payment Method: {{ $payment['payment_method'] }}</p>
            <p class="text-lg mb-2">Status: <strong>Payment Successful</strong></p>
            <a href="{{ route('events.show', $payment['checkout']['event_id']) }}"
                class="text-blue-500 hover:underline">Back to Event</a>
        </div>
    </div>
</x-layouts.app>
