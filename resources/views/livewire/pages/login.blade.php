<div class="min-h-screen flex w-full dark:bg-gray-900">
    <!-- Bagian Kiri: Gambar -->
    <div class="hidden md:flex w-1/2 bg-cover">
        <img src="{{ asset('assets/images/baskara-putra.png') }}" alt="">
    </div>

    <!-- Bagian Kanan: Form -->
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 bg-luckycat-300 dark:bg-gray-800 p-6 font-Geomisans">
        <div class="w-full max-w-md dark:bg-gray-700 p-8 border-2 border-black bg-white">
            @if (session()->has('success'))
                <div role="alert" class="alert alert-success rounded-[0]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="pt-2">{{ session('success') }}</span>
                </div>
            @endif
            @if (session()->has('error'))
            <div role="alert" class="alert alert-error rounded-[0]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="pt-2">{{ $error }}</span>
              </div>
            @endif
           
            <h2 class="mb-6 mt-4 text-2xl font-bold text-center text-gray-800 dark:text-white">LOGIN</h2>
            <form wire:submit="login">
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
                    Login
                </button>
            </form>
            <div class="mt-4 text-center">
                <a href="/register" wire:navigate class="text-sm text-blue-500 dark:text-blue-400 hover:underline">
                    Don't have an account? Register here.
                </a>
            </div>
        </div>
    </div>
</div>