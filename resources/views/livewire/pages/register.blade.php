{{-- <div class="min-h-screen flex w-full dark:bg-gray-900">
    <!-- Bagian Kiri: Gambar -->
    <div class="hidden md:flex w-1/2 bg-cover">
        <img src="{{ asset('assets/images/baskara-putra.png') }}" alt="">
    </div>

    <!-- Bagian Kanan: Form -->
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 bg-luckycat-300 dark:bg-gray-800 p-6 font-Geomisans h-screen">
        <div class="w-full max-w-md dark:bg-gray-700 p-8 border-2 border-black bg-white">
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-800 dark:text-white">REGISTER</h2>
            <form wire:submit="save">
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-white" for="name">Name</label>
                    <input
                        class="mt-1 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-luckycat-300 dark:focus:ring-blue-300 bg-gray-50 dark:bg-gray-600 text-gray-800 dark:text-white"
                        type="text"
                        name="name"
                        wire:model="name"
                        id="name"
                        placeholder="Enter your full name"
                        required autofocus>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-white" for="email">Email</label>
                    <input
                        class="mt-1 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-luckycat-300 dark:focus:ring-blue-300 bg-gray-50 dark:bg-gray-600 text-gray-800 dark:text-white"
                        type="email"
                        name="email"
                        wire:model="email"
                        id="email"
                        placeholder="Enter your email"
                        required autofocus>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 dark:text-white" for="password">Password</label>
                    <input
                        class="mt-1 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-luckycat-300 dark:focus:ring-blue-300 bg-gray-50 dark:bg-gray-600 text-gray-800 dark:text-white"
                        type="password"
                        name="password"
                        wire:model="password"
                        id="password"
                        placeholder="Enter your password"
                        required>
                </div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-luckycat-300 pt-2 hover:bg-blue-600 transition-colors text-white focus:outline-none focus:ring-2 focus:ring-luckycat-300 dark:focus:ring-blue-300">
                    Register
                </button>
            </form>
            <div class="mt-4 text-center">
                <a href="/login" wire:navigate class="text-sm text-blue-500 dark:text-blue-400 hover:underline">
                    Already have an account? Login here.
                </a>
            </div>
        </div>
    </div>
</div> --}}

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

                <h2 class="mb-6 mt-4 text-3xl font-bold text-center text-gray-800">REGISTER</h2>
                <form wire:submit="save" class="flex flex-col gap-2">
                    <label class="floating-label">
                        <span class="uppercase">full name</span>
                        <input type="input" class="input validator w-full px-4 py-2 pt-4 focus:outline-0" required
                            placeholder="Full Name" pattern="[A-Za-z][A-Za-z0-9\-]*" minlength="3" maxlength="30"
                            title="Only letters, numbers or dash" wire:model ="name" id="name" autofocus
                            name="name" />
                        <p class="validator-hint">
                            Must be 3 to 30 characters
                            <br />containing only letters, numbers or dash
                        </p>
                    </label>
                    <label class="floating-label">
                        <span class="uppercase">Email Address</span>
                        <input type="email" placeholder="mail@site.com"
                            class="input validator w-full px-4 py-2 pt-4 focus:outline-0" name="email"
                            wire:model="email" id="email" required />
                        <div class="validator-hint">Enter valid email address</div>
                    </label>
                    <label class="floating-label">
                        <span class="uppercase">Password</span>

                        <input type="password" class="input validator w-full px-4 py-2 pt-4 focus:outline-0" required
                            placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must be more than 8 characters, including number, lowercase letter, uppercase letter"
                            name="password" wire:model="password" id="password" />
                        <p class="validator-hint">
                            Must be more than 8 characters, including
                            <br />At least one number
                            <br />At least one lowercase letter
                            <br />At least one uppercase letter
                        </p>
                    </label>

                    <div class="flex flex-col w-full">
                        <button type="submit"
                            class="mt-4 w-full py-2 pt-4 px-4 bg-luckycat-300 hover:bg-luckycat-500 transition-colors text-white focus:outline-none focus:ring-2 focus:ring-luckycat-300 uppercase cursor-pointer">
                            Register
                        </button>
                        <div class="divider">OR</div>
                        <button type="button" onclick="window.location='{{ route('auth.google') }}'"
                            class="flex justify-center items-center w-full py-3 pt-4 px-4 bg-white border border-black hover:bg-black hover:text-white hover:border-white transition-colors text-black focus:outline-none focus:ring-2 focus:ring-luckycat-300 uppercase cursor-pointer">
                            <img src="{{ asset('assets/images/google.png') }}" alt="Google"
                                class="w-6 h-6 mb-1 mx-2" />
                            Register with Google
                        </button>
                    </div>

                </form>
                <div class="mt-8 text-center">
                    <a href="{{ route(name: 'login') }}" wire:navigate
                        class="text-md text-luckycat-500 hover:underline">
                        Already have an account? Login Here.
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
