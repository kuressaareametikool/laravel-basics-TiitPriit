<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($clients as $client)
                <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="p-6">
                        <div class="text-sm font-medium text-gray-900">
                            {{ $client->first_name }} {{ $client->last_name }}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $client->username }}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $client->email }}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $client->address }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $clients->links() }}
        </div>
    </div>
</x-app-layout>