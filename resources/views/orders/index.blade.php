<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex justify-end">
            <a href="{{ route('orders.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</a>
        </div>
        <ul class="space-y-4">
            @foreach ($orders as $order)
            <li class="p-4 shadow rounded-md">
                <div class="flex justify-between items-center">
                <div>
                    <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        <a href="{{ route('orders.show', $order->id) }}" class="text-blue-500 hover:underline">
                            Order #{{ $order->id }}
                        </a>
                    </div>
                    <div class="text-sm text-gray-600 dark:text-gray-200">
                        <p>Delivery Address: {{ $order->delivery_address }}</p>
                        <p>Order Date: {{ $order->order_date }}</p>
                        <p>Status: {{ $order->status }}</p>
                    </div>
                </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('orders.edit', $order->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="inline-block">
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
            {{ $orders->links() }}
        </div>
    </div>
</x-app-layout>