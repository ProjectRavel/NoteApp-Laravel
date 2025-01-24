<x-layout>
    <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Note</h1>
        <form action="{{route('note.update', $note)}}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" placeholder="Enter Your Note Here"
                class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-yellow-200" required>{{$note->note}}</textarea>
            <div class="flex justify-end space-x-4">
                <a href="{{ route('note.index') }}"
                    class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200">
                    Cancel
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-yellow-500 text-white font-medium rounded-md hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-300">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
