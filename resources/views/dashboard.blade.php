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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 flex flex-col justify-between">
                    <h3 class="text-white text-xl mb-4 font-bold" style="font-family: 'Bangers', cursive;">
                        My Anime List
                    </h3>
                    <p class="text-gray-300 mb-4" style="font-family: 'Press Start 2P', cursive;">
                        View and manage your favorite anime here!
                    </p>
                    <a href="{{ route('animes.index') }}" class="text-white bg-purple-600 hover:bg-purple-700 font-bold py-2 px-4 rounded-2xl shadow-lg text-center transition-transform transform hover:scale-105">
                        Manage
                    </a>
                </div>

                <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 flex flex-col justify-between">
                    <h3 class="text-white text-xl mb-4 font-bold" style="font-family: 'Bangers', cursive;">
                        Club Events
                    </h3>
                    <p class="text-gray-300 mb-4" style="font-family: 'Press Start 2P', cursive;">
                        Stay updated with upcoming anime events and meetups!
                    </p>
                    <a href="#" class="text-white bg-purple-600 hover:bg-purple-700 font-bold py-2 px-4 rounded-2xl shadow-lg text-center transition-transform transform hover:scale-105">
                        View Events
                    </a>
                </div>

                <div class="bg-gray-800 rounded-3xl shadow-2xl p-6 flex flex-col justify-between">
                    <h3 class="text-white text-xl mb-4 font-bold" style="font-family: 'Bangers', cursive;">
                        Profile Settings
                    </h3>
                    <p class="text-gray-300 mb-4" style="font-family: 'Press Start 2P', cursive;">
                        Update your profile information and preferences.
                    </p>
                    <a href="{{ route('profile.edit') }}" class="text-white bg-purple-600 hover:bg-purple-700 font-bold py-2 px-4 rounded-2xl shadow-lg text-center transition-transform transform hover:scale-105">
                        Edit Profile
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
