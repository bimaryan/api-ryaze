<div id="tambah" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
    class="hidden fixed inset-0 z-50 flex items-center justify-center w-full p-4 overflow-x-hidden overflow-y-auto h-full bg-gray-800/50">
    <div class="relative w-full max-w-2xl bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                Add New Projects
            </h3>
            <button type="button"
                class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent rounded-full hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                data-modal-hide="tambah">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal body -->
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="px-6 py-4">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="name" id="name"
                    class="block w-full px-4 py-2 mt-2 text-gray-900 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:text-gray-200 dark:placeholder-gray-500 dark:border-gray-600 focus:ring focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                <input type="file" name="image" id="image"
                    class="block w-full px-4 py-2 mt-2 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 focus:ring focus:ring-blue-500 focus:border-blue-500">
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="sort_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Sort
                    Description</label>
                <input type="text" name="sort_description" id="sort_description"
                    class="block w-full px-4 py-2 mt-2 text-gray-900 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:text-gray-200 dark:placeholder-gray-500 dark:border-gray-600 focus:ring focus:ring-blue-500 focus:border-blue-500">
                @error('sort_description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                <textarea type="text" name="description" id="description"
                    class="block w-full px-4 py-2 mt-2 text-gray-900 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:text-gray-200 dark:placeholder-gray-500 dark:border-gray-600 focus:ring focus:ring-blue-500 focus:border-blue-500"></textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="technologies"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Technologies</label>
                <textarea type="text" name="technologies" id="technologies"
                    class="block w-full px-4 py-2 mt-2 text-gray-900 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:text-gray-200 dark:placeholder-gray-500 dark:border-gray-600 focus:ring focus:ring-blue-500 focus:border-blue-500"></textarea>
                @error('technologies')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
                Simpan
            </button>
        </form>
    </div>
</div>
