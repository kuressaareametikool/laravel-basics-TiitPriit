<x-app-layout>
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold text-white mb-6">Edit Client</h1>
        <form action="{{ route('clients.update', $client->id) }}" method="POST" class="bg-gray-800 p-6 rounded shadow">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-200">Username</label>
                <input type="text" name="username" id="username" value="{{ $client->username }}" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-200">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ $client->first_name }}" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-200">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ $client->last_name }}" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                <input type="email" name="email" id="email" value="{{ $client->email }}" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-200">Address</label>
                <input type="text" name="address" id="address" value="{{ $client->address }}" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">Update</button>
        </form>
    </div>
</x-app-layout>