<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
        .ticket-container {
            max-width: 28rem;
            width: 100%;
            margin: 0 auto;
            background-color: #e0f2f1;
            font-family: 'Geomisans', sans-serif;
            text-transform: uppercase;
        }

        .ticket-wrapper {
            display: flex;
            flex-direction: column;
        }

        .ticket-content {
            background-color: white;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            color: black;
            padding: 1rem;
            margin: 1rem;
        }

        .ticket-header {
            display: flex;
        }

        .ticket-thumb {
            position: relative;
            height: 8rem;
            width: 8rem;
            margin-bottom: 0.75rem;
            display: none;
            /* initially hidden */
        }

        .thumb-img {
            width: 8rem;
            height: 8rem;
            object-fit: cover;
        }

        .edit-icon {
            position: absolute;
            right: -0.5rem;
            bottom: -0.5rem;
            margin-left: -0.75rem;
            color: white;
            padding: 0.25rem;
            font-size: 0.75rem;
            background-color: #68d391;
            font-weight: 500;
            letter-spacing: 0.05em;
            border-radius: 9999px;
            transition: background-color 0.3s ease-in;
        }

        .edit-icon:hover {
            background-color: #48bb78;
        }

        .edit-icon-svg {
            height: 1rem;
            width: 1rem;
        }

        .ticket-info {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .ticket-info-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .ticket-logo {
            display: flex;
            align-items: center;
            margin: 0.25rem 0;
        }

        .logo-img-wrapper {
            margin-right: 0.75rem;
            background-color: white;
            height: 2rem;
            border-radius: 9999px;
        }

        .logo-img {
            height: 2rem;
            object-fit: contain;
        }

        .ticket-type {
            color: #10b981;
            margin-left: auto;
        }

        .ticket-divider {
            border-bottom: 2px dashed black;
            margin: 1.25rem 0;
        }

        .ticket-details {
            display: flex;
            flex-direction: column;
        }

        .event-title {
            font-size: 1.125rem;
        }

        .event-vendor,
        .event-date {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .ticket-divider-bottom {
            position: relative;
            border-bottom: 2px dashed black;
            margin: 1.25rem 0;
            padding-top: 1.25rem;
        }

        .divider-circle {
            position: absolute;
            width: 1.25rem;
            height: 1.25rem;
            background-color: #e0f2f1;
            border-radius: 9999px;
            margin-top: -0.5rem;
        }

        .left-circle {
            left: -0.5rem;
        }

        .right-circle {
            right: -0.5rem;
        }
    </style>
</head>

<body>
    <div class="ticket-container">
        <div class="ticket-wrapper">
            <div class="ticket-content">
                <div class="ticket-header">
                    <div class="ticket-thumb hidden">
                        <img src="{{ $ticket->event->thumbnail }}" alt="aji" class="thumb-img">
                        <a href="#" class="edit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="edit-icon-svg">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="ticket-info">
                        <div class="ticket-info-header">
                            <div class="ticket-logo">
                                <span class="logo-img-wrapper">
                                    <img src="{{ asset('assets/images/luckycat-logo.png') }}" alt="luckycat"
                                        class="logo-img">
                                </span>
                            </div>
                            <div class="ticket-type">E-Ticket</div>
                        </div>
                        <div class="ticket-divider"></div>
                        <div class="ticket-details">
                            <p class="event-title">{{ $ticket->event->title }}</p>
                            <p class="event-vendor">@ {{ $ticket->event->vendor->name }}</p>
                            <p>{{ $ticket->created_at }}</p>
                            @if ($ticket->ticketBenefits->isNotEmpty())
                                <p>Benefits:</p>
                                <ul>
                                    @foreach ($ticket->ticketBenefits as $benefit)
                                        <li>- {{ $benefit->benefit->benefit }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="ticket-divider-bottom">
                        <div class="divider-circle left-circle"></div>
                        <div class="divider-circle right-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
