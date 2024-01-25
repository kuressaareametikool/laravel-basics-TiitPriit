<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $author->first_name}} {{ $author->last_name}}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-2xl font-bold mb-4">{{ $author->first_name }} {{ $author->last_name }}</h1>

                <h2 class="text-xl font-semibold mb-2">Books:</h2>
                @foreach ($author->books as $book)
                    <p class="text-gray-700">{{ $book->title }}</p>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>