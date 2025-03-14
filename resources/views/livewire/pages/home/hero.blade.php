<div class="w-full flex flex-col ">
    <div class="md:h-[784px] flex">
        <div class="hidden lg:block relative border-r-black border-r-2">
            <img class="w-[628px] h-full object-cover" src="{{ $upcomingEvent->thumbnail }}" alt="">

            <a href="{{ route('events.show', $upcomingEvent->id) }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-black shadow-md group">
                <span
                    class="flex absolute inset-0 items-center justify-center w-full h-full text-black duration-300 -translate-x-full bg-white group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease font-Geomisans font-bold p-0 bg-luckycat-300 md:pt-4 md:py-2 md:px-4 text-sm md:text-lg">UPCOMING
                    EVENT - {{ $upcomingEvent->title }}</span>
                <span class="relative invisible">UPCOMING EVENT - {{ $upcomingEvent->title }}</span>
            </a>
        </div>

        <div class="bg-cover bg-center flex flex-col md:w-[1284px]"
            style="background-image: url('{{ asset('assets/images/4.png') }}');">

            <div class="flex flex-col justify-end h-full p-12 pb-32 gap-12">
                <div
                    class="bg-white text-black font-bold pt-2 py-0 px-4 font-Geomisans border-1 border-black hover:bg-black hover:text-white hover:border-white ease-linear duration-300 w-fit uppercase">
                    —
                    {{ now()->monthName }} {{ now()->year }}
                </div>

                <div
                    class="flex flex-col items-start justify-center text-start text-white w-full tracking-wider drop-shadow-lg">
                    <h1 class="text-[63px] font-TGS">Tailored by youth, <span
                            class="text-white bg-black px-2 py-2">enjoyed
                            for
                            all.</span></h1>
                    <p class="mt-4 text-lg md:w-[663px]">Fill your <span class="bg-luckycat-500 px-2 py-1">youth</span>
                        with
                        joyful
                        experiences. Don't miss our
                        <span class="bg-white text-luckycat-500 px-2 py-1">discounts and early-bird</span>,
                        explore now
                        our
                        latest & available concerts!
                    </p>
                </div>

            </div>

            <div class="bg-luckycat-300 border border-black group">
                <a href="#events"
                    class="flex flex-row justify-between font-TGS px-8 py-2 text-black tracking-widest group-hover:bg-luckycat-500 group-hover:text-white transition duration-300 ease-linear">
                    SCROLL DOWN

                    <x-heroicon-s-arrow-down class="w-4 h-4" />
                </a>
            </div>
        </div>
    </div>

    <div class="bg-black border-t-1 border-t-black border-b-1 border-b-black">
        <p class="text-white text-4xl sm:text-9xl font-TGS tracking-widest px-4 py-2 text-center">
            <span class="text-luckycat-300">50%</span>
            <span class="text-gray-600">ONLY ON</span>
            <span class="text-white">LUCKY<span class="text-luckycat-500">CAT</span></span>
        </p>
    </div>
</div>
