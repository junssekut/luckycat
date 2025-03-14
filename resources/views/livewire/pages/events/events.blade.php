<div class="flex flex-col w-full h-full">
    <div class="w-full">
        <h1 class="text-5xl text-black border-1 border-black border-t-0 pb-6 p-8 font-Geomisans">PICK UR CONCERT.
        </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 h-fit sm:border-r-1 sm:border-r-black">
        @foreach ($events as $event)
            <livewire:pages.events.event-card :event="$event" :key="$event->id" />
        @endforeach
    </div>
    <div class="mt-4">
        {{-- {{ $events->links('vendor.livewire.tailwind') }} --}}
        {{ $events->links(data: ['scrollTo' => false]) }}
    </div>
</div>
