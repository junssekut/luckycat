<a href="{{ route('events.show', $event->id) }}"
    class="group border-b-1 border-b-black border-r-1 border-r-black w-full sm:h-[400px]">
    <div class="flex flex-col h-full">
        <img src="{{ asset($event->thumbnail) }}" alt="{{ $event->title }}"
            class="h-[80%] object-cover transition duration-300 ease-in-out group-hover:filter-none filter grayscale border-b-1 border-b-black">
        <div class="flex flex-col w-full h-[20%] bg-white font-Geomisans text-black px-2 py-4 sm:px-6 sm:py-4">
            <h2 class="text-lg tracking-wider">{{ strtoupper($event->title) }}</h2>
            <p class="text-gray-500">@ {{ strtoupper($event->vendor?->name) }}</p>
        </div>
    </div>
</a>
