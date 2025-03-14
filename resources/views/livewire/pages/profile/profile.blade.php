<div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
        <livewire:pages.profile.utils.sidebar />

        <!-- Konten Utama - Tampilan Profil -->
        <main class="w-full md:w-3/4 px-4 font-Geomisans">
            <div class="border border-black rounded-none p-6 shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Welcome,</h2>
                <div class="flex items-center space-x-4 mb-6">
                    <img src="{{ Storage::url($user->avatar) }}" alt="{{ $user->avatar }}"
                        class="w-24 h-24 rounded-none border border-black">
                    <div>
                        <h3 class="text-xl font-bold">{{ $user->name ?? 'Nama Pengguna' }}</h3>
                        <p class="text-gray-600">{{ $user->email ?? 'email@example.com' }}</p>
                    </div>
                </div>
                <p class="mb-6">
                    Welcome to Luckycat Dashboard! Here you can see your history and update your profile
                </p>
                <a href="{{ route('events') }}"
                    class="inline-block px-6 pt-3 py-1.5 bg-luckycat-300 text-white border border-black rounded-none hover:bg-luckycat-500 transition duration-300">
                    Buy Tickets
                </a>
            </div>
        </main>
    </div>
</div>
