<x-app-layout>
    <div x-data="{ darkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }" @mediachange.window="darkMode = event.matches"
        class="max-w-6xl mx-auto p-6 rounded-lg min-h-screen dark:text-white">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-semibold 
                mb-2">View Note</h1>
                <h3 class="text-lg ">Created At: <span
                        class="font-semibold">{{ $note->created_at->format('d M Y H:i') }}</span></h3>
            </div>
            <!-- Edit Button -->
            <div>
                <a href="{{ route('note.edit', $note) }}"
                    class="inline-block text-white  font-medium py-2 px-4  rounded-lg bg-green-500 hover:bg-green-600">
                    Edit
                </a>
                <a href="{{ route('note.edit', $note) }}"
                    class="inline-block text-white font-medium py-2 px-4  rounded-lg bg-red-500 hover:bg-red-600">
                    Remove
                </a>
            </div>
        </div>


        <!-- Note Content -->
        <div class="mt-6 p-4 dark: rounded-lg shadow-sm"
        :class="{ 'bg-gray-700 text-white border-gray-600 focus:ring-yellow-500': darkMode, 'bg-white text-gray-800 border-gray-300': !darkMode }">
            <p class="text-base text-gray-700 leading-relaxed dark:text-white">
                {{ $note->note }}
            </p>
        </div>

        <!-- Back Button (Optional) -->
        <div class="mt-8">
            <a href="/note"
                class="inline-block text-white bg-blue-600 px-5 py-2 rounded-md hover:bg-blue-700 font-medium">
                &larr; Back to Notes
            </a>
        </div>
    </div>
</x-app-layout>
