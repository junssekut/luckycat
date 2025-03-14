<div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
        <livewire:pages.profile.utils.sidebar />

        <main class="w-full md:w-3/4 px-4 font-Geomisans">
            <div class="border border-black p-6 shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Ticket History</h2>
                <div class="flex items-center space-x-4 mb-6">
                    <img src="{{ Storage::url($user->avatar) }}" alt="{{ $user->avatar }}"
                        class="w-24 h-24 border border-black">
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
                    <table class="min-w-full border border-black">`
                        <thead>
                            <tr class="bg-luckycat-300">
                                {{-- <th class="px-4 py-2 pt-4 border border-black">Ticket ID</th> --}}
                                <th class="px-4 py-2 pt-4 border border-black">Event Name</th>
                                <th class="px-4 py-2 pt-4 border border-black">Purchase Date</th>
                                <th class="px-4 py-2 pt-4 border border-black">Status</th>
                                <th class="px-4 py-2 pt-4 border border-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tickets as $ticket)
                                <tr
                                    class="hover:bg-gray-100 hover:text-gray-500 cursor-pointer duration-300 ease-linear">
                                    {{-- <td class="px-4 py-2 pt-4 border border-black">{{ $ticket->id }}</td> --}}
                                    <td class="px-4 py-2 pt-4 border border-black">
                                        {{ $ticket->event->title }}</td>
                                    <td class="px-4 py-2 pt-4 border border-black">
                                        {{ $ticket->created_at->format('d F Y') }}</td>
                                    <td class="px-4 py-2 pt-4 border border-black">Used
                                    </td>
                                    <td class="px-4 py-2 pt-4 border border-black">
                                        <a href="{{ $ticket->id }}" {{-- <a href="{{ route('tickets.show', $ticket->id) }}" --}}
                                            class="px-3 py-1 pt-2 bg-blue-500 text-white border border-black hover:bg-blue-600 transition duration-150">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-2 pt-4 border border-black text-center uppercase">
                                        No ticket history available.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
