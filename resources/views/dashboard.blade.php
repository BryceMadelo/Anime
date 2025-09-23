<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl md:text-4xl font-extrabold text-black leading-tight text-center mb-4"
            style="font-family: 'Bangers', cursive;">
            Anime Club Dashboard ✨
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 mb-8 text-center">
                <p class="text-gray-200 text-lg md:text-xl" style="font-family: 'Press Start 2P', cursive;">
                    You're logged in! Welcome back, Otaku! 🚀
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 flex flex-col justify-between">
                    <h3 class="text-white text-xl mb-4 font-bold" style="font-family: 'Bangers', cursive;">
                        🎬 My Anime List
                    </h3>
                    <p class="text-gray-300 mb-4" style="font-family: 'Press Start 2P', cursive;">
                        View and manage your favorite anime here!
                    </p>
                    <a href="{{ route('animes.index') }}"
                       class="text-white bg-purple-600 hover:bg-purple-700 font-bold py-2 px-4 rounded-2xl shadow-lg text-center transition-transform transform hover:scale-105">
                        Manage
                    </a>
                </div>

                <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 flex flex-col justify-between">
                    <h3 class="text-white text-xl mb-4 font-bold" style="font-family: 'Bangers', cursive;">
                        📚 My Reading List
                    </h3>
                    <p class="text-gray-300 mb-4" style="font-family: 'Press Start 2P', cursive;">
                        Track your favorite Manga, Manhwa, Manhua, Webtoons, and Novels here!
                    </p>
                    <a href="{{ route('readings.index') }}"
                       class="text-white bg-purple-600 hover:bg-purple-700 font-bold py-2 px-4 rounded-2xl shadow-lg text-center transition-transform transform hover:scale-105">
                        Manage
                    </a>
                </div>

                <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 flex flex-col justify-between">
                    <h3 class="text-white text-xl mb-4 font-bold" style="font-family: 'Bangers', cursive;">
                        👤 Profile Settings
                    </h3>
                    <p class="text-gray-300 mb-4" style="font-family: 'Press Start 2P', cursive;">
                        Update your profile information and preferences.
                    </p>
                    <a href="{{ route('profile.edit') }}"
                       class="text-white bg-purple-600 hover:bg-purple-700 font-bold py-2 px-4 rounded-2xl shadow-lg text-center transition-transform transform hover:scale-105">
                        Edit Profile
                    </a>
                </div>
            </div>

            <!-- Watch Tracker Progress Bars -->
            <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 mb-10 text-white">
                <h3 class="text-xl font-bold mb-4" style="font-family: 'Bangers', cursive;">🎬 Watch Progress</h3>
                @forelse($animes as $anime)
                    <div class="mb-4">
                        <p class="mb-1 font-bold">{{ $anime->title }} ({{ $anime->progress }}%)</p>
                        <div class="w-full bg-gray-700 rounded-full h-4">
                            <div class="bg-green-500 h-4 rounded-full" style="width: {{ $anime->progress }}%"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400">No anime tracked yet.</p>
                @endforelse
            </div>

            <!-- Reading Tracker Progress Bars -->
            <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 mb-10 text-white">
                <h3 class="text-xl font-bold mb-4" style="font-family: 'Bangers', cursive;">📖 Reading Progress</h3>
                @forelse($readings as $reading)
                    @php
                        $progress = $reading->total_chapters > 0 
                            ? round(($reading->current_chapter / $reading->total_chapters) * 100) 
                            : 0;
                    @endphp
                    <div class="mb-4">
                        <p class="mb-1 font-bold">{{ $reading->title }} ({{ $progress }}%)</p>
                        <div class="w-full bg-gray-700 rounded-full h-4">
                            <div class="bg-green-500 h-4 rounded-full" style="width: {{ $progress }}%"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400">No readings tracked yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
