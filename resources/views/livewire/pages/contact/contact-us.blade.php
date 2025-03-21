<div class="w-full">
    <livewire:banner-list />

    <div class="flex flex-row border-black border-1">
        <div class="hidden xl:block relative border-r-black border-r-1 group">
            <img class="w-full object-cover" src="{{ asset('assets/images/contact-us-2.png') }}" alt="">

            <a href="{{ route('contact') }}"
                class="absolute top-3/5 left-1/3 transform -translate-x-1/5 -translate-y-1/6 inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2  border-black shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-black duration-300 -translate-x-full bg-white group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease font-Geomisans font-bold p-0 bg-luckycat-300 pt-4 py-2 px-4">GET
                    IN TOUCH</span>
                <span class="relative invisible">GET IN TOUCH</span>
            </a>
        </div>

        <div class="flex flex-col justify-between p-12 w-10/12">

            <p class="text-lg font-Geomisans uppercase text-gray-500">
                Never miss a beat with LuckyCat! Our mission is to provide you with the most exciting and memorable
                music experiences. By subscribing to our newsletter, you'll receive exclusive updates on the hottest
                music events, early bird ticket offers, and special promotions right in your inbox. Imagine being the
                first to know about the latest concerts and festivals, getting exclusive access to tickets before they
                sell out, and enjoying special discounts just for being part of our community.
                <br /><br />
                Join thousands of music lovers who are already enjoying the perks of being in the loop with LuckyCat.
                From personalized event recommendations to behind-the-scenes content and artist interviews, our
                newsletter is your all-access pass to the music world. Don’t miss out—subscribe now and let LuckyCat
                bring the music to you!
            </p>

            <fieldset class="fieldset w-xs">
                {{-- <legend class="fieldset-legend">Settings</legend> --}}

                <form wire:submit.prevent="subscribe">
                    <div class="join">
                        <input type="email" wire:model="email"
                            class="input join-item font-Geomisans border-black rounded-none text-md pt-2 focus:ring-0 focus:outline-0"
                            placeholder="YOUR EMAIL" required />
                        <button type="submit"
                            class="btn join-item border-black bg-black text-white font-Geomisans pt-2 rounded-none px-4 hover:bg-luckycat-300 hover:text-black duration-300 ease-in-out transition">SUBSCRIBE</button>
                    </div>
                </form>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </fieldset>

        </div>
    </div>
</div>
