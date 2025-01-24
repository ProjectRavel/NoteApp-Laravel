<x-app-layout>
    <div x-data="{ darkMode: false }" :class="darkMode ? 'dark' : ''" class="min-h-screen mx-auto max-w-6xl bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
        <!-- Header -->
        <header class="w-full bg-white dark:bg-gray-800 shadow-md rounded-lg px-6 py-6 mb-6 my-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100">My Notes</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mt-2">Organize your thoughts and ideas effectively</p>
                </div>
            </div>
            <a href="{{ route('note.create') }}"
                class="inline-block mt-4 px-6 py-2 bg-yellow-500 text-white font-medium rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-300">
                + New Note
            </a>
        </header>

        <!-- Main -->
        <main class="w-full max-w-6xl">
            {{ $notes->links() }}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                @foreach ($notes as $note)
                    <div
                        class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300 h-64 flex flex-col justify-between">
                        <div class="note-body mb-4">
                            <p class="text-gray-800 dark:text-gray-200 text-xl line-clamp-5">
                                {{ Str::words($note->note, 30) }}
                            </p>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <a href="{{ route('note.show', $note) }}"
                                class="px-4 py-2 mx-2 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                                View
                            </a>
                            <a href="{{ route('note.edit', $note) }}"
                                class="px-4 py-2 mx-2 bg-green-500 text-white text-sm font-medium rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                Edit
                            </a>
                            <form action="{{ route('note.destroy', $note) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 mx-2   bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($notes->isEmpty())
                <p class="text-center text-gray-500 dark:text-gray-400">No notes found</p>
            @endif
        </main>

        <!-- Footer -->
        <footer class="w-full mt-12 text-center text-sm text-gray-500 dark:text-gray-400 py-4 border-t border-gray-200 dark:border-gray-700">
            &copy; 2025 Notes App. All rights reserved.
        </footer>
    </div>
</x-app-layout>
