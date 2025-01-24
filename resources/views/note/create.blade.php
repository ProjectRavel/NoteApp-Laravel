<x-app-layout>
    <div x-data="{ darkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }" @mediachange.window="darkMode = event.matches" :class="{ ' text-white': darkMode, ' text-gray-800': !darkMode }" class="max-w-6xl mx-auto   rounded-lg p-8 min-h-screen">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-2xl font-bold" :class="{ 'text-gray-200': darkMode, 'text-gray-800': !darkMode }">Create New Note</h1>
        </div>

        <form action="{{route('note.store')}}" method="POST" class="space-y-6">
            @csrf
            <textarea name="note" rows="10" placeholder="Enter Your Note Here"
                class="w-full p-4 border rounded-md focus:outline-none focus:ring focus:ring-yellow-200"
                :class="{ 'bg-gray-700 text-white border-gray-600 focus:ring-yellow-500': darkMode, 'bg-white text-gray-800 border-gray-300': !darkMode }" required></textarea>
            <div class="flex justify-end space-x-4">
                <a href="{{route('note.index')}}"
                    class="px-6 py-2 rounded-md focus:outline-none focus:ring focus:ring-gray-200"
                    :class="darkMode ? 'bg-gray-600 text-gray-200 hover:bg-gray-500' : 'bg-gray-300 text-gray-700 hover:bg-gray-400'">
                    Cancel
                </a>
                <button type="submit"
                    class="px-6 py-2 font-medium rounded-md focus:outline-none focus:ring focus:ring-yellow-300"
                    :class="darkMode ? 'bg-yellow-500 text-gray-800 hover:bg-yellow-600' : 'bg-yellow-500 text-white hover:bg-yellow-600'">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
