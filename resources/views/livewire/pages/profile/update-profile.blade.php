<div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
        <livewire:pages.profile.utils.sidebar />

        <!-- Konten Utama - Form Update Profile -->
        <main class="w-full md:w-3/4 px-4 font-Geomisans">
            <div class="border border-black rounded-none p-6 shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Welcome User!</h2>
                <div class="flex items-center space-x-4 mb-6">
                    <img src="{{ Storage::url($user->avatar) }}" alt="{{ $user->avatar }}"
                        class="w-24 h-24 rounded-none border border-black">
                    <div>
                        <h3 class="text-xl font-bold">{{ $user->name ?? 'Nama Pengguna' }}</h3>
                        <p class="text-gray-600">{{ $user->email ?? 'email@example.com' }}</p>
                    </div>
                </div>
                <form wire:submit.prevent="update" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-2 border border-black rounded-none focus:outline-none focus:ring-2 focus:ring-luckycat-500"
                            value="{{ $user->name ?? '' }}" readonly>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan email"
                            class="w-full px-4 py-2 border border-black rounded-none focus:outline-none focus:ring-2 focus:ring-luckycat-500"
                            value="{{ $user->email ?? '' }}" readonly>
                    </div>
                    <div>
                        <label for="profile_picture" class="block text-sm font-medium text-gray-700 mb-2">Profile
                            Picture</label>
                        <input type="file" wire:model="profile_picture" id="profile_picture" accept="image/*"
                            class="w-full px-4 py-2 border border-black rounded-none focus:outline-none focus:ring-2 focus:ring-luckycat-500">
                        @error('profile_picture')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="inline-block px-6 pt-3 py-1.5 bg-luckycat-300 text-white border border-black rounded-none hover:bg-luckycat-500 transition duration-300">
                        Save Changes
                    </button>
                </form>
            </div>
        </main>
    </div>
</div>
