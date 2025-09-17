<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white" style="font-family: 'Bangers', cursive;">
            ➕ Add New Anime
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-lg mx-auto bg-gray-900 p-8 rounded-xl shadow-lg text-white">
            <form action="{{ route('animes.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('title') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Genre</label>
                    <input type="text" name="genre" value="{{ old('genre') }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('genre') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Episodes</label>
                    <input type="number" name="episodes" value="{{ old('episodes') }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                    @error('episodes') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Status</label>
                    <select name="status" 
                            class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-purple-500">
                        <option value="Watching" {{ old('status') == 'Watching' ? 'selected' : '' }}>Watching</option>
                        <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Plan to Watch" {{ old('status') == 'Plan to Watch' ? 'selected' : '' }}>Plan to Watch</option>
                    </select>
                    @error('status') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('animes.index') }}" 
                       class="px-6 py-2 bg-gray-700 hover:bg-gray-600 rounded-xl font-bold">Cancel</a>
                    <button type="submit" 
                            class="px-6 py-2 bg-purple-600 hover:bg-purple-700 rounded-xl font-bold text-white">Add Anime</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
