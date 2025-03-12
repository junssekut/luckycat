<div>
    <livewire:banner-wotd />

    <div class="navbar bg-base-100 shadow-sm p-0 border-b-1 border-black">
        <div class="navbar-start px-2 md:px-8 py-2 border-r-1 border-r-black w-fit h-16">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <x-heroicon-o-bars-2 class="w-4 h-4" />
                </div>
                <ul tabindex="0"
                    class="menu menu-md md:menu-lg dropdown-content bg-base-100 z-1 mt-3 w-52 p-2 shadow [&_li>*]:rounded-none font-Geomisans uppercase">
                    <li><a class="pt-2" href="/special-offer"wire:navigate>SPECIAL OFFER</a></li>
                    <li><a class="pt-2" href='{{ route('events') }}'wire:navigate>EXPLORE</a></li>
                    <li><a class="pt-2" href='/contactwire:navigate'>CONTACT US</a></li>
                    <li><a class="md:hidden pt-2 bg-luckycat-300 text-white" href='/login'wire:navigate>LOGIN</a></li>
                    <li><a class="md:hidden pt-2 bg-black text-white" href='/contact'wire:navigate>JOIN US</a></li>
                </ul>
            </div>
            <a class="hidden lg:flex" href="/" wire:navigate><img class="h-12 object-contain"
                    src="{{ asset('assets/images/luckycat-logo.png') }}" alt="luckycat"></a>
        </div>
        <div class="lg:hidden navbar-center py-2 h-16 pl-12">
            <a class="" href="/"><img class="h-12 object-cover"
                    src="{{ asset('assets/images/luckycat-logo.png') }}" alt="luckycat"></a>
        </div>
        <div class="navbar-end w-full">
            <div class="border border-black py-2.5 w-full border-l-0 border-t-0 border-b-0 h-16 hidden lg:block ">
                <ul class="flex flex-row justify-end items-end px-8 py-2 gap-4">
                    <li><a class="font-Geomisans hover:text-luckycat-500 ease-linear duration-300" href="/home"
                            wire:navigate>RAMADHAN KAREEM SPECIAL</a></li>
                    <li><a class="font-Geomisans hover:text-luckycat-500 ease-linear duration-300"
                            href="{{ route('events') }}" wire:navigate>EXPLORE</a></li>
                    <li><a class="font-Geomisans hover:text-luckycat-500 ease-linear duration-300" href="/contact"
                            wire:navigate>CONTACT US</a></li>
                </ul>
            </div>

            <div class="hidden md:flex flex-row h-16">
                <button
                    class="font-Geomisans w-24 h-full border border-black lg:border-l-0 border-t-0 hover:bg-luckycat-500 hover:text-white ease-linear duration-300 cursor-pointer hover:border-b-2">LOGIN</button>
                <button
                    class="font-Geomisans w-24 h-full bg-black text-white cursor-pointer hover:bg-luckycat-500 hover:text-white ease-linear duration-300 hover:border-b-black hover:border-b-2">JOIN
                    US</button>
            </div>
        </div>
    </div>
</div>
