<x-layouts.app.header>
    <div class="flex flex-col items-center justify-center h-[300px]">
        <div class="max-w-md w-full mx-auto bg-luckycat-300 font-Geomisans uppercase">
            <div class="flex flex-col">
                <div class="bg-white relative drop-shadow-2xl text-black p-4 m-4">
                    <div class="flex-none sm:flex">
                        <div class="relative h-32 w-32 sm:mb-0 mb-3 hidden">
                            <img src="{{ $ticket->event->thumbnail }}" alt="aji" class="w-32 h-32 object-cover">
                            <a href="#"
                                class="absolute -right-2 bottom-2 -ml-3 text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex-auto justify-evenly">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center my-1">
                                    <span class="mr-3 rounded-full bg-white h-8">
                                        <img src="{{ asset('assets/images/luckycat-logo.png') }}" alt="luckycat"
                                            class="h-8 object-contain">
                                    </span>
                                </div>
                                <div class="ml-auto text-luckycat-500">E-Ticket</div>
                            </div>
                            <div class="border-b border-dashed border-b-2 border-b-black my-5"></div>
                            <div class="flex flex-col">
                                <p class="text-lg">{{ $ticket->event->title }}</p>
                                <p class="text-gray-500 text-sm">@ {{ $ticket->event->vendor->name }}</p>
                                <p>{{ $ticket->created_at }}</p>
                                @if ($ticket->ticketBenefits->isNotEmpty())
                                    <p>Benefits:</p>
                                    <ul>
                                        @foreach ($ticket->ticketBenefits as $benefit)
                                            <li>{{ $benefit->benefit->benefit }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="border-b border-dashed border-b-2 my-5 pt-5">
                            <div class="absolute rounded-full w-5 h-5 bg-luckycat-300 -mt-2 -left-2"></div>
                            <div class="absolute rounded-full w-5 h-5 bg-luckycat-300 -mt-2 -right-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app.header>
