<div class="flex flex-row" id="events">
    {{-- big event --}}
    @if ($featuredEvent)
        <a href="{{ route('events.show', $featuredEvent->id) }}"
            class="group border-b-1 border-b-black border-r-1 border-r-black">
            <div class="hidden sm:flex flex-col">
                <img src="{{ $featuredEvent->thumbnail }}" alt="{{ $featuredEvent->title }}"
                    class="h-[824px] object-cover transition duration-300 ease-in-out group-hover:filter-none filter grayscale">
                <div class="flex flex-col w-full bg-white font-Geomisans text-black px-6 py-4">
                    <h2 class="text-lg tracking-wider">{{ $featuredEvent->title }}</h2>
                    <p class="text-gray-500">@ {{ $featuredEvent->vendor?->name }}</p>
                </div>
            </div>
        </a>
    @endif

    <div class="flex flex-col">
        @foreach ($randomEvents->chunk(3) as $index => $chunk)
            <div class="grid grid-cols-1 sm:grid-cols-3 h-fit sm:border-r-1 sm:border-r-black">
                @foreach ($chunk as $event)
                    <a href="{{ route('events.show', $event->id) }}"
                        class="group border-b-1 border-b-black border-r-1 border-r-black">
                        <div class="flex flex-col">
                            <img src="{{ $event->thumbnail }}" alt="{{ $event->title }}"
                                class="{{ $index == 0 ? 'h-[368px]' : 'h-[288px]' }} object-cover transition duration-300 ease-in-out group-hover:filter-none filter grayscale">
                            <div
                                class="flex flex-col w-full bg-white font-Geomisans text-black px-2 py-4 sm:px-6 sm:py-4">
                                <h2 class="text-lg tracking-wider">{{ $event->title }}</h2>
                                <p class="text-gray-500">@ {{ $event->vendor?->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endforeach

        <div class="bg-black text-white h-full w-full flex justify-center items-center group">
            <a href="#events"
                class="bg-black text-white h-full w-full flex flex-row justify-center items-center font-TGS text-3xl px-8 py-2 tracking-widest group-hover:bg-luckycat-500 group-hover:text-white transition duration-300 ease-linear">
                SEE MORE EVENTS...
            </a>
        </div>
    </div>
</div>
