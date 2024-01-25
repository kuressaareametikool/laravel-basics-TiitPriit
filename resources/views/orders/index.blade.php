<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($orders as $order)
                <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-900">{{ $order->delivery_address }}</h3>
                        <div class="text-sm text-gray-500">{{ $order->order_date }}</div>
                        <div class="text-sm text-gray-500">{{ $order->status }}</div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4 flex justify-center">
            {{ $orders->links() }}
        </div>
    </div>
</x-app-layout>