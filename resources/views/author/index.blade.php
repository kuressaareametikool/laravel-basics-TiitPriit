<x-app-layout>
<div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <ul class="space-y-4">
            @foreach ($authors as $author)
            <li class="p-4 shadow rounded-md">
                <div class="flex justify-between items-center">
                <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    <a href="{{ route('authors.show', $author->id) }}" class="text-blue-500 hover:underline">
                        {{ $author->first_name}} <br>{{ $author->last_name}}
                    </a>
                </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('authors.edit', $author->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="inline-block">
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
            {{ $authors->links() }}
        </div>
    </div>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>


</x-app-layout>