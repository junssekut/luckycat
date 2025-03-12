<div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
      <!-- Sidebar Navigasi -->
      <aside class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
        <div class="border border-black rounded-none p-4">
          <ul>
            <li class="mb-2">
                <a href="/profile" wire:navigate class="block px-4 py-2 border border-black rounded-none hover:bg-luckycat-300">
                  Home
                </a>
              </li>
            <li class="mb-2">
              <a href="/update-profile" wire:navigate class="block px-4 py-2 border border-black rounded-none hover:bg-luckycat-300">
                Update Profile
              </a>
            </li>
            <li class="mb-2">
              <a href="/history" wire:navigate class="block px-4 py-2 border border-black rounded-none hover:bg-luckycat-300">
                History
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!-- Konten Utama - Tampilan Profil -->
      <main class="w-full md:w-3/4 px-4 font-Geomisans">
        <div class="border border-black rounded-none p-6 shadow-lg">
          <h2 class="text-2xl font-bold mb-4">Welcome User!</h2>
          <div class="flex items-center space-x-4 mb-6">
            <img src="{{ asset('images/profile-placeholder.png') }}" alt="Profile Picture" class="w-24 h-24 rounded-none border border-black">
            <div>
              <h3 class="text-xl font-bold">{{ $user->name ?? 'Nama Pengguna' }}</h3>
              <p class="text-gray-600">{{ $user->email ?? 'email@example.com' }}</p>
            </div>
          </div>
          <p class="mb-6">
            Welcome to Luckycat Dashboard! Here you can see your history and update your profile
          </p>
          <a href="" class="inline-block px-6 py-3 bg-luckycat-300 text-white border border-black rounded-none hover:bg-blue-600 transition duration-150">
            Buy Tickets
          </a>
        </div>
      </main>
    </div>
  </div>