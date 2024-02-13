<x-app-layout>
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold text-white mb-6">Create Book</h1>
        <form action="{{ route('books.store') }}" method="POST" class="bg-gray-800 p-6 rounded shadow">
            @csrf
            <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-200">Title</label>
            <input type="text" name="title" id="title" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="author_id" class="block text-sm font-medium text-gray-200">Author</label>
                <select name="author_id" id="author_id" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-200">Price</label>
                <input type="number" step="0.01" name="price" id="price" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="release_date" class="block text-sm font-medium text-gray-200">Release Date</label>
                <input type="date" name="release_date" id="release_date" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="cover_path" class="block text-sm font-medium text-gray-200">Cover Path</label>
                <input type="text" name="cover_path" id="cover_path" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="language" class="block text-sm font-medium text-gray-200">Language</label>
                <input type="text" name="language" id="language" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="summary" class="block text-sm font-medium text-gray-200">Summary</label>
                <textarea name="summary" id="summary" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            <div class="mb-4">
                <label for="stock_saldo" class="block text-sm font-medium text-gray-200">Stock Saldo</label>
                <input type="number" name="stock_saldo" id="stock_saldo" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="pages" class="block text-sm font-medium text-gray-200">Pages</label>
                <input type="number" name="pages" id="pages" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-200">Type</label>
                <select name="type" id="type" required class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-900 text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="New">New</option>
                    <option value="Ebook">Ebook</option>
                    <option value="Used">Used</option>
                </select>
            </div>  
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">Submit</button>            </div>
            </form>
    </div>
</x-app-layout>