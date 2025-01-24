<x-app-layout>
    <div x-data="{ darkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }" @mediachange.window="darkMode = event.matches"
        class="max-w-6xl mx-auto w-full shadow-lg rounded-lg py-8 min-h-screen">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Edit Note</h1>
            <form action="{{ route('note.update', $note) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <textarea name="note" rows="15" placeholder="Enter Your Note Here"
                    class="w-full p-4 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-md focus:outline-none focus:ring focus:ring-yellow-200 dark:focus:ring-yellow-600"
                    required>{{ $note->note }}</textarea>
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('note.index') }}"
                        class="px-6 py-2 bg-gray-300 text-gray-700 dark:bg-gray-600 dark:text-gray-200 rounded-md hover:bg-gray-400 dark:hover:bg-gray-500 focus:outline-none focus:ring focus:ring-gray-200 dark:focus:ring-gray-500">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-2 bg-yellow-500 text-white font-medium rounded-md hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-300 dark:focus:ring-yellow-600">
                        Submit
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
