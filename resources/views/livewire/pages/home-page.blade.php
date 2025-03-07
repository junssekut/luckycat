<x-layouts.app>

    <div class="w-full h-full bg-amber-100 flex flex-col">

        <div class="h-[784px] bg-amber-100 flex">
            <div class="relative border-r-black border-r-2">
                <img class="w-[628px] h-full" src="{{ asset('assets/images/baskara-putra.png') }}" alt="">

                <a href="#_"
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-black shadow-md group">
                    <span
                        class="absolute inset-0 flex items-center justify-center w-full h-full text-black duration-300 -translate-x-full bg-white group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                    <span
                        class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease font-Geomisans font-bold p-0 bg-luckycat-300 pt-4 py-2 px-4">FEATURED
                        - HINDIA</span>
                    <span class="relative invisible">FEATURED - HINDIA</span>
                </a>
            </div>

            {{-- <div>
                <img src="{{ asset('assets/images/3.png') }}" alt="" class="w-full h-full">
                <h1>Book Ticket, Watch Concert.</h1>
                <p>Fill your youth with joyful experiences. Don't miss our discounts and early-bird!</p>
            </div> --}}
            <div class="bg-cover bg-center flex flex-col w-[1284px]"
                style="background-image: url('{{ asset('assets/images/3.png') }}');">
                {{-- <img src="{{ asset('assets/images/3.png') }}" alt="" class="w-full h-full opacity-0"> --}}

                <div class="flex flex-col justify-end h-full p-12 pb-32 gap-12">
                    <button
                        class="bg-white text-black font-bold pt-2 py-0 px-4 font-Geomisans border-1 border-black hover:bg-black hover:text-white hover:border-white cursor-pointer ease-linear duration-300 w-fit">—
                        MARCH 2025
                    </button>

                    <div
                        class="flex flex-col items-start justify-center text-start text-white w-full tracking-wider drop-shadow-lg">
                        <h1 class="text-[63px] font-TGS">Tailored by youth, enjoyed for all.</h1>
                        <p class="mt-4 text-lg w-[663px]">Fill your youth with joyful experiences. Don't miss our
                            discounts and
                            early-bird, explore now our latest & available concerts!</p>
                    </div>

                </div>

                <div class="bg-luckycat-300 border border-black">
                    <a href=""
                        class="flex flex-row justify-between font-TGS px-4 py-2 text-black tracking-widest">
                        SCROLL DOWN

                        <x-heroicon-s-arrow-down class="w-4 h-4" />
                    </a>
                </div>
            </div>
        </div>

    </div>

</x-layouts.app>
