<div class="flex flex-col items-center justify-center min-h-screen">
    <div class="max-w-md w-full mx-auto bg-blue-900 rounded-3xl">
        <div class="flex flex-col">
            <div class="bg-white relative drop-shadow-2xl text-black rounded-3xl p-4 m-4">
                <div class="flex-none sm:flex">
                    <div class="relative h-32 w-32 sm:mb-0 mb-3 hidden">
                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                            alt="aji" class="w-32 h-32 object-cover rounded-2xl">
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
                            <div class="ml-auto text-blue-800">E-Ticket</div>
                        </div>
                        <div class="border-b border-dashed border-b-2 my-5"></div>
                        <div class="flex flex-col">
                            <p><strong>Title:</strong> {{ $ticket->event->title }}</p>
                            <p><strong>Vendor Name:</strong> {{ $ticket->event->vendor->name }}</p>
                            <p><strong>Date Bought:</strong> {{ $ticket->created_at }}</p>
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                @foreach ($ticket->benefits as $benefit)
                                    <li>- {{ $benefit->benefit }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-dashed border-b-2 my-5 pt-5">
                        <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
                        <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
