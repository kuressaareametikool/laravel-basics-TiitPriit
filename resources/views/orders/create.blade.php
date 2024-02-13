<x-app-layout>
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold text-white mb-6">Create Order</h1>
        <form action="{{ route('orders.store') }}" method="POST" class="bg-gray-800 p-6 rounded shadow">
            @csrf
            <div class="mb-4">
                <label for="delivery_address" class="block text-sm font-medium text-gray-200">Delivery Address</label>
                <input type="text" name="delivery_address" id="delivery_address" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="order_date" class="block text-sm font-medium text-gray-200">Order Date</label>
                <input type="datetime-local" name="order_date" id="order_date" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                <label for="client_id" class="block text-sm font-medium text-gray-200">Client ID</label>
                <input type="number" name="client_id" id="client_id" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="book_id" class="block text-sm font-medium text-gray-200">Book ID</label>
                <input type="number" name="book_id" id="book_id" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
        </form>
    </div>
</x-app-layout>