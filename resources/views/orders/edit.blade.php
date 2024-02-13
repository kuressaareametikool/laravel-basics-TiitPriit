<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit order
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('orders.update', $order->id) }}">
            @csrf
            @method("PUT")
            <div class="mb-4">
                <label for="delivery_address" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Delivery Address</label>
                <input type="text" name="delivery_address" id="delivery_address" value="{{ $order->delivery_address }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="order_date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Order Date</label>
                <input type="datetime-local" name="order_date" id="order_date" value="{{ date('Y-m-d\TH:i', strtotime($order->order_date)) }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-200">Status</label>
                <select name="status" id="status" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="ordered">Ordered</option>
                    <option value="payed">Payed</option>
                    <option value="sent">Sent</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="client_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Client ID</label>
                <input type="number" name="client_id" id="client_id" value="{{ $order->client_id }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="book_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Book ID</label>
                <input type="number" name="book_id" id="book_id" value="{{ $order->book_id }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>