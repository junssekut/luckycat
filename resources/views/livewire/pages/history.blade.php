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

      <!-- Konten Utama - Ticket History -->
      <main class="w-full md:w-3/4 px-4 font-Geomisans">
        <div class="border border-black rounded-none p-6 shadow-lg">
          <h2 class="text-2xl font-bold mb-4">Ticket History</h2>
          <div class="flex items-center space-x-4 mb-6">
            <img src="{{ asset('images/profile-placeholder.png') }}" alt="Profile Picture" class="w-24 h-24 rounded-none border border-black">
            <div>
              <h3 class="text-xl font-bold">{{ $user->name ?? 'Nama Pengguna' }}</h3>
              <p class="text-gray-600">{{ $user->email ?? 'email@example.com' }}</p>
            </div>
          </div>
          <p class="mb-6">
            Welcome to Luckycat Dashboard! Below is the history of your ticket purchases.
          </p>
          <!-- Tabel History Tiket -->
          <div class="overflow-x-auto">
            <table class="min-w-full border border-black rounded-none">
              <thead>
                <tr class="bg-luckycat-300">
                  <th class="px-4 py-2 border border-black rounded-none">Ticket ID</th>
                  <th class="px-4 py-2 border border-black rounded-none">Event Name</th>
                  <th class="px-4 py-2 border border-black rounded-none">Purchase Date</th>
                  <th class="px-4 py-2 border border-black rounded-none">Status</th>
                  <th class="px-4 py-2 border border-black rounded-none">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Iterasi dari data tiket -->
                {{-- @forelse($tickets as $ticket) --}}
                <tr class="hover:bg-luckycat-300">
                  <td class="px-4 py-2 border border-black rounded-none">10</td>
                  <td class="px-4 py-2 border border-black rounded-none">GBK</td>
                  <td class="px-4 py-2 border border-black rounded-none">20 January 2025</td>
                  <td class="px-4 py-2 border border-black rounded-none">Used</td>
                  <td class="px-4 py-2 border border-black rounded-none">
                    <a href="" class="px-3 py-1 bg-blue-500 text-white border border-black rounded-none hover:bg-blue-600 transition duration-150">
                      View
                    </a>
                  </td>
                </tr>
                {{-- @empty --}}
                <tr>
                  <td colspan="5" class="px-4 py-2 border border-black text-center">
                    No ticket history available.
                  </td>
                </tr>
                {{-- @endforelse --}}
              </tbody>
            </table>  
          </div>
        </div>
      </main>
    </div>
  </div>
