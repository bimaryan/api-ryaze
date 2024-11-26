<nav class="fixed top-0 z-50 w-full shadow bg-gray-50 dark:text-white dark:bg-gray-900">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start gap-2 rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a class="flex gap-2 items-center">
                    <i class="fa-solid fa-code"></i>
                    <p class="text-lg font-semibold">Admin Ryaze</p>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div class="flex items-center gap-4">
                        <div class="hidden md:block">
                            <div class="flex-col text-right md:flex">
                                <p class="text-sm">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:bg-gray-600 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="" alt="user photo">
                            </button>
                        </div>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <ul class="py-1" role="none">
                            <li>
                                <a href=""
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Keluar <i class="fa-solid fa-right-from-bracket"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard.index') }}"
                    class="flex items-center p-2  rounded-lg dark:text-gray-100 hover:bg-blue-800 hover:text-white group  {{ Route::is('dashboard.index') ? 'bg-blue-500 text-white' : '' }}">
                    <span class="flex-1 ms-3 whitespace-nowrap"><i
                            class="fa-solid fa-table-columns me-2"></i>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('projects.index') }}"
                    class="mt-2 flex items-center p-2  rounded-lg dark:text-gray-100 hover:bg-blue-800 hover:text-white group  {{ Route::is('projects.index') ? 'bg-blue-500 text-white' : '' }}">
                    <span class="flex-1 ms-3 whitespace-nowrap"><i class="fa-solid fa-code me-2"></i>Projects</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
