<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex justify-end">
            <a href="{{ route('clients.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</a>
        </div>
        <ul class="space-y-4">
            @foreach ($clients as $client)
            <li class="p-4 shadow rounded-md">
                <div class="flex justify-between items-center">
                <div>
                    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        <a href="{{ route('clients.show', $client->id) }}" class="text-blue-500 hover:underline">
                            {{ $client->first_name }} {{ $client->last_name }}
                        </a>
                    </div>
                    <div class="text-sm text-gray-600 dark:text-gray-200">
                        <p>Username: {{ $client->username }}</p>
                        <p>Email: {{ $client->email }}</p>
                        <p>Address: {{ $client->address }}</p>
                    </div>
                </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('clients.edit', $client->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline-block">
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
            {{ $clients->links() }}
        </div>
    </div>
</x-app-layout>