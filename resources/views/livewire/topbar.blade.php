<div>
    {{-- promote --}}
    <div class="bg-luckycat-300 text-base-content">
        <div class="bg-luckycat-300 border-b-1 border-black">
            <div class="slider"
                style="
                --width: 250px;
                --height: 30px;
                --quantity: 10;
            ">
                <div class="list">
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 1">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 2">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 3">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 4">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 5">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 6">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 7">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 8">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 9">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                    <div class="item flex justify-center items-center w-full h-full absolute inset-0"
                        style="--position: 10">
                        <p class="text-xs text-white">✷✷✷ BOOK UR TICKET NOW 50% OFF!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- navbar --}}
    <div class="navbar bg-base-100 shadow-sm p-0">
        <div class="navbar-start px-8 py-2 border-1 border-black border-t-0 border-l-0 w-fit h-16">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>My Tickets</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="overflow-hidden" href="/" wire:navigate><img class="h-12 object-contain"
                    src="{{ asset('assets/images/luckycat-logo.png') }}" alt=""></a>
        </div>
        <div class="navbar-end w-full">
            <div class="border border-black py-2.5 w-full border-l-0 border-t-0 h-16">
                <ul class="flex flex-row justify-end items-end px-8 py-2 gap-4">
                    <li><a class="font-Geomisans hover:text-luckycat-500 ease-linear duration-300" href="/home"
                            wire:navigate>RAMADHAN KAREEM SPECIAL</a></li>
                    <li><a class="font-Geomisans hover:text-luckycat-500 ease-linear duration-300" href="/explore"
                            wire:navigate>EXPLORE</a></li>
                    <li><a class="font-Geomisans hover:text-luckycat-500 ease-linear duration-300" href="/contact"
                            wire:navigate>CONTACT US</a></li>
                </ul>
            </div>

            <div class="flex flex-row h-16">
                <a href="/login" wire:navigate>
                <button
                    class="font-Geomisans w-24 h-full border border-black border-l-0 border-t-0 hover:bg-luckycat-500 hover:text-white ease-linear duration-300 cursor-pointer hover:border-b-2">LOGIN</button></a>
                <a href="/register" wire:navigate>
                <button
                    class="font-Geomisans w-24 h-full bg-black text-white cursor-pointer hover:bg-luckycat-500 hover:text-white ease-linear duration-300 hover:border-b-black hover:border-b-2">JOIN
                    US</button>
                </a>
            </div>
        </div>
    </div>
</div>
