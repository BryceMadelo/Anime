<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white" style="font-family: 'Bangers', cursive;">
            ✏️ Edit Reading
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-lg mx-auto bg-gray-900 p-8 rounded-xl shadow-lg text-white">
            <form action="{{ route('readings.update', $reading) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Title</label>
                    <input type="text" name="title" value="{{ old('title', $reading->title) }}"
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
                        @foreach (['Manga','Manhwa','Manhua','Webtoon','Novel'] as $type)
                            <option value="{{ $type }}" {{ old('type', $reading->type) === $type ? 'selected' : '' }}>
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>
                    @error('type') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Genre -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Genre</label>
                    <input type="text" name="genre" value="{{ old('genre', $reading->genre) }}"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500">
                    @error('genre') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Current Chapter -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Current Chapter</label>
                    <input type="number" name="current_chapter" value="{{ old('current_chapter', $reading->current_chapter) }}"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500">
                    @error('current_chapter') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Total Chapters -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Total Chapters</label>
                    <input type="number" name="total_chapters" value="{{ old('total_chapters', $reading->total_chapters) }}"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                  focus:outline-none focus:border-purple-500">
                    @error('total_chapters') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-1 font-bold" style="font-family: 'Press Start 2P', cursive;">Status</label>
                    <select name="status" 
                            class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 
                                   focus:outline-none focus:border-purple-500">
                        @foreach (['Reading','Completed','On Hold','Dropped','Plan to Read'] as $status)
                            <option value="{{ $status }}" {{ old('status', $reading->status) === $status ? 'selected' : '' }}>
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>
                    @error('status') <p class="text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Buttons -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('readings.index') }}" 
                       class="px-6 py-2 bg-gray-700 hover:bg-gray-600 rounded-xl font-bold">Cancel</a>
                    <button type="submit" 
                            class="px-6 py-2 bg-purple-500 hover:bg-purple-600 rounded-xl font-bold text-white">Update Reading</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
