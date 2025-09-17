
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-black" style="font-family: 'Bangers', cursive;">
            🎬 My Anime List
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-600 text-white rounded-lg shadow-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-end mb-4">
                <a href="{{ route('animes.create') }}" 
                   class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-xl shadow-lg 
                          hover:scale-105 transition-transform duration-200">
                    + Add Anime
                </a>
            </div>

            <div class="bg-gray-900 text-white rounded-xl shadow-lg overflow-hidden">
                <table class="min-w-full text-left">
                    <thead class="bg-gray-800">
                        <tr>
                            <th class="px-6 py-3">Title</th>
                            <th class="px-6 py-3">Genre</th>
                            <th class="px-6 py-3">Episodes</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($animes as $anime)
                        <tr class="border-b border-gray-700">
                            <td class="px-6 py-3">{{ $anime->title }}</td>
                            <td class="px-6 py-3">{{ $anime->genre }}</td>
                            <td class="px-6 py-3">{{ $anime->episodes ?? '-' }}</td>
                            <td class="px-6 py-3">{{ $anime->status }}</td>
                            <td class="px-6 py-3 flex gap-2">
                                <a href="{{ route('animes.edit', $anime) }}" 
                                   class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 rounded-md text-black font-bold">
                                   Edit
                                </a>
                                <form action="{{ route('animes.destroy', $anime) }}" method="POST" onsubmit="return confirm('Delete this anime?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="px-3 py-1 bg-red-600 hover:bg-red-700 rounded-md font-bold">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-3 text-center text-gray-400">No anime added yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
