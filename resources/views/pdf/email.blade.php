<!DOCTYPE html>
<html>

<head>
    <title>E-ticket</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .ticket-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .ticket {
            background-color: #ffffff;
            border: 2px solid #333;
            border-radius: 15px;
            padding: 30px;
            width: 600px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .ticket-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .ticket-header h1 {
            font-size: 32px;
            margin: 0;
            color: #333;
        }

        .ticket-details {
            margin-bottom: 20px;
        }

        .ticket-details p {
            font-size: 18px;
            margin: 5px 0;
        }

        .ticket-footer {
            text-align: center;
            margin-top: 20px;
        }

        .ticket-footer p {
            font-size: 16px;
            color: #555;
        }

        .ticket-footer .status {
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body>
    <div class="ticket-container">
        <div class="ticket">
            <div class="ticket-header">
                <h1>{{ $event['title'] }}</h1>
            </div>
            <div class="ticket-details">
                <p><strong>Event:</strong> {{ $event['title'] }}</p>
                <p><strong>Date:</strong> {{ $event['created_at'] }}</p>
                <p><strong>Venue:</strong> {{ $event['vendor']['name'] }}</p>
                <p><strong>Quantity:</strong> {{ $checkout['quantity'] }}</p>
                <p><strong>Ticket Price:</strong> RP{{ number_format($checkout['total_price'], 0, ',', '.') }}</p>
                <p><strong>Addons Price:</strong> RP{{ number_format($benefits->sum('price'), 0, ',', '.') }}</p>
                <p><strong>Total Price:</strong> RP{{ number_format($total_price, 0, ',', '.') }}</p>
                <p><strong>Payment Method:</strong> {{ $payment_method }}</p>
            </div>
            <div class="ticket-footer">
                <p class="status">Payment Successful</p>
                <p>Thank you for your purchase!</p>
                <p>We are pleased to inform you that your ticket purchase has been successfully processed and published.
                    You can find the details of your event below. This ticket serves as your entry pass to the event,
                    and you must present it at the venue for admission. Additionally, you can view and manage your
                    ticket online using the provided link. This e-ticket contains all the necessary details, including
                    the event title, date, venue, quantity of tickets, and the total price paid. We appreciate your
                    purchase and look forward to seeing you at the event. If you have any questions or need further
                    assistance, please do not hesitate to contact our support team. To view your ticket online, please
                    click on the following link: <a href="{{ route('ticket.show', ['id' => $ticket->id]) }}">View
                        Ticket</a>. Thank you for choosing our service, and enjoy the event!</p>
            </div>
        </div>
    </div>
</body>

</html>
