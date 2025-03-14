<div>
    <livewire:banner-list reverse="true" />

    <div class="min-h-[768px] flex w-full dark:bg-gray-900 items-center justify-center">

        <div
            class="flex flex-col justify-center items-center w-full md:w-1/2 bg-white p-6 font-Geomisans h-fit uppercase">
            <div class="w-full max-w-md dark:bg-gray-700 p-8 border-2 border-black bg-white">
                @if (session()->has('success'))
                    <div role="alert" class="alert alert-success rounded-[0]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="pt-2">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div role="alert" class="alert alert-error rounded-[0]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="pt-2">{{ $error }}</span>
                    </div>
                @endif

                <h2 class="mb-6 mt-4 text-3xl font-bold text-center text-gray-800">LOGIN</h2>
                <form wire:submit="login" class="flex flex-col gap-6">
                    <label class="floating-label">
                        <span class="uppercase">Email Address</span>
                        <input type="email" placeholder="mail@site.com"
                            class="input validator w-full px-4 py-2 pt-4 focus:outline-0" name="email"
                            wire:model="email" id="email" required autofocus />
                        <div class="validator-hint">Enter valid email address</div>
                    </label>
                    <label class="floating-label">
                        <span class="uppercase">Password</span>
                        <input type="password" placeholder="Password"
                            class="input w-full px-4 py-2 pt-4 focus:outline-0" name="password" wire:model="password"
                            id="password" required />
                    </label>

                    <div class="flex flex-col w-full">
                        <button type="submit"
                            class="mt-4 w-full py-2 pt-4 px-4 bg-luckycat-300 hover:bg-luckycat-500 transition-colors text-white focus:outline-none focus:ring-2 focus:ring-luckycat-300 uppercase cursor-pointer">
                            Login
                        </button>
                        <div class="divider">OR</div>
                        <button type="button" onclick="window.location='{{ route('auth.google') }}'"
                            class="flex justify-center items-center w-full py-3 pt-4 px-4 bg-white border border-black hover:bg-black hover:text-white hover:border-white transition-colors text-black focus:outline-none focus:ring-2 focus:ring-luckycat-300 uppercase cursor-pointer">
                            <img src="{{ asset('assets/images/google.png') }}" alt="Google"
                                class="w-6 h-6 mb-1 mx-2" />
                            Login with Google
                        </button>
                    </div>

                </form>
                <div class="mt-8 text-center">
                    <a href="{{ route('register') }}" wire:navigate class="text-md text-luckycat-500 hover:underline">
                        Don't have an account? Register here.
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
