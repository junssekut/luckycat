<x-layouts.app>
    <div class="w-full min-h-screen grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 font-Geomisans">
        <img src="{{ asset($payment['checkout']['event']['thumbnail']) }}"
            alt="{{ $payment['checkout']['event']['title'] }}"
            class="w-full object-cover h-full border-r-1 border-r-black">

        <div class="p-12 text-black font-Geomisans flex flex-col gap-6">
            <div class="hidden md:block breadcrumbs text-sm text-gray-500">
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='{{ route('events') }}'>Events</a></li>
                    <li><a
                            href='{{ route('events.show', $payment['checkout']['event']['id']) }}'>{{ $payment['checkout']['event']['title'] }}</a>
                    </li>
                    <li>Checkout Summary</li>
                    <li>Payment Confirmation</li>
                </ul>
            </div>

            <div class="gap-4">
                <h1 class="text-5xl font-TGS tracking-widest uppercase">Payment Confirmation</h1>
                <h2 class="text-lg uppercase text-gray-500">@ {{ $payment['checkout']['event']['vendor']['name'] }}</h2>
            </div>

            <div class="grid grid-cols-2 gap-0 w-fit">
                <h2 class="text-lg uppercase text-black bg-white pt-2 px-4 w-fit border border-black">
                    TICKET PRICE <span
                        class="text-luckycat-500 text-sm">(x{{ $payment['checkout']['quantity'] }})</span>
                </h2>
                <h2 class="text-lg uppercase text-white bg-black pt-2 px-4 w-fit">
                    RP{{ number_format($payment['checkout']['total_price'], 0, ',', '.') }}
                </h2>
            </div>

            <div class="grid grid-cols-2 gap-0 w-fit">
                <h2 class="text-lg uppercase text-black bg-white pt-2 px-4 w-fit border border-black">
                    ADDONS PRICE <span
                        class="text-luckycat-500 text-sm">({{ $payment['benefits']->count() > 0 ? ' + ' . $payment['benefits']->count() . ' ADDON' : '' }})</span>
                </h2>
                <h2 class="text-lg uppercase text-white bg-black pt-2 px-4 w-fit">
                    RP{{ number_format($payment['benefits']->sum('price'), 0, ',', '.') }}
                </h2>
            </div>

            <div class="grid w-full">
                <h2 class="text-2xl font-semibold uppercase">PAYMENT METHOD</h2>
                <p class="text-lg mb-2">{{ $payment['payment_method'] }}</p>
            </div>

            <div class="grid w-full">
                <h2 class="text-2xl font-semibold uppercase">STATUS</h2>
                <p class="text-lg mb-2 text-luckycat-500">Payment Successful</p>
            </div>

            <div class="grid grid-cols-2 gap-0 w-fit">
                <h2 class="text-lg uppercase text-black bg-white pt-2 px-4 w-fit border border-black">
                    TOTAL PRICE
                </h2>
                <h2 class="text-lg uppercase text-white bg-black pt-2 px-4 w-fit">
                    RP{{ number_format($payment['total_price'], 0, ',', '.') }}
                </h2>
            </div>

            <a href="{{ route('events.show', $payment['checkout']['event']['id']) }}"
                class="bg-luckycat-300 border border-black text-black pt-4 py-2 px-4 hover:bg-luckycat-500 hover:text-white text-bold tracking-widest text-lg duration-300 ease-linear cursor-pointer text-center">
                Back to Event
            </a>
        </div>
    </div>
</x-layouts.app>
