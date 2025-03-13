<x-layouts.app>
    <div class="w-full min-h-screen grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1">
        <img src="{{ asset($event->thumbnail) }}" alt="{{ $event->title }}"
            class="w-full object-cover h-full border-r-1 border-r-black">

        <div class="p-12 text-black font-Geomisans flex flex-col gap-6">
            <div class="hidden md:block breadcrumbs text-sm text-gray-500">
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='{{ route('events') }}'>Events</a></li>
                    <li>{{ $event->title }}</li>
                </ul>
            </div>

            <div class="gap-4">
                <h1 class="text-5xl font-TGS tracking-widest uppercase">{{ $event->title }}</h1>
                <h2 class="text-lg font-Geomisans uppercase text-gray-500">@ {{ $event->vendor?->name }}</h2>
            </div>

            <div class="flex flex-col gap-1">
                <h2 class="text-lg font-Geomisans uppercase text-white bg-black p-1 pt-2 px-4 w-fit">
                    RP{{ number_format($event->price, 0, ',', '.') }} <span class="text-sm text-gray-300"> /
                        ticket</span></h2>

                <form action="{{ route('checkout.process', $event->id) }}" method="POST" class="flex flex-row gap-4">
                    @csrf
                    <div class="flex flex-col uppercase">
                        <input type="number" name="quantity"
                            class="input validator pt-2 rounded-none focus:outline-0 focus:ring-0" required
                            placeholder="Ticket Quantity" min="1" title="Must be at least 1." />
                        <p class="validator-hint px-2">Must be at least 1.</p>
                    </div>
                    <button type="submit"
                        class="border-1 border-black bg-luckycat-300 text-black font-Geomisans pt-2 px-4 md:px-2 lg:px-4 uppercase hover:bg-luckycat-500 hover:text-white duration-300 ease-linear cursor-pointer h-fit">
                        Buy Ticket
                    </button>
                </form>
            </div>

            <p class="w-[50%] text-justify uppercase">{{ $event->description }}</p>

            <livewire:pages.events.detail.frequently-asked-questions />
        </div>
    </div>
</x-layouts.app>
