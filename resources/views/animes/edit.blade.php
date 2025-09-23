<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white" style="font-family: 'Bangers', cursive;">
            ✏️ Edit Anime
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-lg mx-auto bg-gray-900 p-8 rounded-xl shadow-lg text-white">
            <form action="{{ route('animes.update', $anime) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Title</label>
                    <input type="text" name="title" value="{{ old('title', $anime->title) }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('title') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Genre</label>
                    <input type="text" name="genre" value="{{ old('genre', $anime->genre) }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('genre') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Episodes</label>
                    <input type="number" name="episodes" value="{{ old('episodes', $anime->episodes) }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('episodes') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Current Episode</label>
                    <input type="number" name="watched_episodes" value="{{ old('watched_episodes', $anime->watched_episodes) }}" 
                        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('watched_episodes') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>


                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Status</label>
                    <select name="status" 
                            class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                        <option value="Watching" {{ old('status', $anime->status) == 'Watching' ? 'selected' : '' }}>Watching</option>
                        <option value="Completed" {{ old('status', $anime->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Plan to Watch" {{ old('status', $anime->status) == 'Plan to Watch' ? 'selected' : '' }}>Plan to Watch</option>
                    </select>
                    @error('status') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('animes.index') }}" 
                       class="px-6 py-2 bg-gray-700 hover:bg-gray-600 rounded-xl font-bold">Cancel</a>
                    <button type="submit" 
                            class="px-6 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-xl font-bold text-black">Update Anime</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
