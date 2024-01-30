<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex justify-end">
            <a href="{{ route('books.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</a>
        </div>
        <ul class="space-y-4">
    @foreach ($books as $book)
    <li class="p-4 shadow rounded-md">
        <div class="flex justify-between items-center">
            <div>
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    <a href="{{ route('books.show', $book->id) }}" class="text-blue-500 hover:underline">
                        {{ $book->title}}
                    </a>
                </div>
                <div class="text-sm text-gray-600 dark:text-gray-200">
                    <p>Year: {{ $book->release_date }}</p>
                    <p>Price: €{{ number_format($book->price, 2) }}</p>
                </div>
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('books.edit', $book->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        </div>
    </li>
    @endforeach
</ul>
        <div class="mt-4 flex justify-center">
            {{ $books->links() }}
        </div>
    </div>
</x-app-layout>