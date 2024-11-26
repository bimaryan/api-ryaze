@extends('index')
@section('content')
    <div class="p-4 mt-3 sm:ml-64">
        <div class="space-y-4 rounded-lg mt-14">
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <p class="text-2xl font-semibold text-gray-900">Dashboard</p>
            </div>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                <div class="p-4 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold">Project</p>
                            <p class="text-xl font-semibold">{{ $projectsCount }}</p>
                        </div>
                        <div>
                            <div class="text-3xl font-semibold text-blue-500">
                                <i class="fa-solid fa-code"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold">Blog</p>
                            <p class="text-xl font-semibold">2</p>
                        </div>
                        <div>
                            <div class="text-3xl font-semibold text-yellow-500">
                                <i class="fa-brands fa-blogger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
