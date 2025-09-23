<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white" style="font-family: 'Bangers', cursive;">
            ➕ Add New Reading
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-lg mx-auto bg-gray-900 p-8 rounded-xl shadow-lg text-white">
            <form action="{{ route('readings.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Title -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500">
                    @error('title') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Type -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Type</label>
                    <select name="type" 
                            class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                   focus:outline-none focus:border-purple-500">
                        <option value="Manga" {{ old('type') == 'Manga' ? 'selected' : '' }}>Manga</option>
                        <option value="Manhwa" {{ old('type') == 'Manhwa' ? 'selected' : '' }}>Manhwa</option>
                        <option value="Manhua" {{ old('type') == 'Manhua' ? 'selected' : '' }}>Manhua</option>
                        <option value="Webtoon" {{ old('type') == 'Webtoon' ? 'selected' : '' }}>Webtoon</option>
                        <option value="Novel" {{ old('type') == 'Novel' ? 'selected' : '' }}>Novel</option>
                    </select>
                    @error('type') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Genre -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Genre</label>
                    <input type="text" name="genre" value="{{ old('genre') }}"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500">
                    @error('genre') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Current Chapter -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Current Chapter</label>
                    <input type="number" name="current_chapter" value="{{ old('current_chapter', 0) }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500" min="0">
                    @error('current_chapter') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Total Chapters -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Total Chapters</label>
                    <input type="number" name="total_chapters" value="{{ old('total_chapters') }}" 
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500" min="1">
                    @error('total_chapters') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Status</label>
                    <select name="status" 
                            class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                   focus:outline-none focus:border-purple-500">
                        <option value="Reading" {{ old('status') == 'Reading' ? 'selected' : '' }}>Reading</option>
                        <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="On-Hold" {{ old('status') == 'On-Hold' ? 'selected' : '' }}>On-Hold</option>
                        <option value="Dropped" {{ old('status') == 'Dropped' ? 'selected' : '' }}>Dropped</option>
                        <option value="Planned" {{ old('status') == 'Planned' ? 'selected' : '' }}>Planned</option>
                    </select>
                    @error('status') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Actions -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('readings.index') }}" 
                       class="px-6 py-2 bg-gray-700 hover:bg-gray-600 rounded-xl font-bold">Cancel</a>
                    <button type="submit" 
                            class="px-6 py-2 bg-purple-600 hover:bg-purple-700 rounded-xl font-bold text-white">
                        Add Reading
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
