<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Author
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">First Name</label>
                <input type="text" name="first_name" id="first_name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</button>
            </div>
        </form>
    </div>
</x-app-layout>