<aside class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
    <div class="border border-black rounded-none p-4">
        <ul>
            <li class="mb-2">
                <a href="{{ route('profile') }}" wire:navigate
                    class="block px-4 py-2 border border-black rounded-none hover:bg-luckycat-300">
                    Profile
                </a>
            </li>
            <li class="mb-2">
                <a href="{{ route('profile.update') }}" wire:navigate
                    class="block px-4 py-2 border border-black rounded-none hover:bg-luckycat-300">
                    Update Profile
                </a>
            </li>
            <li class="mb-2">
                <a href="{{ route('history') }}" wire:navigate
                    class="block px-4 py-2 border border-black rounded-none hover:bg-luckycat-300">
                    History
                </a>
            </li>
        </ul>
    </div>
</aside>
