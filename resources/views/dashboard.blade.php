@extends('layouts.app')

@section('content')
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Header Section -->
                <div class="p-6 bg-blue-600 text-white">
                    <h3 class="text-2xl font-bold">Welcome to Your Dashboard!</h3>
                    <p class="mt-2 text-lg">Here’s a quick overview of your activities and information.</p>
                </div>
                <!-- Content Section -->
                <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Info Card 1 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800">Current Status</h4>
                        <p class="mt-2 text-gray-600">Everything is running smoothly. Keep up the good work!</p>
                        <div class="mt-4 bg-green-100 border border-green-200 text-green-800 rounded-lg p-2 text-sm">
                            <p>All systems operational</p>
                        </div>
                    </div>

                    <!-- Info Card 2 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800">Recent Updates</h4>
                        <ul class="mt-2 space-y-2">
                            <li class="flex items-center">
                                <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                                <p class="text-gray-800">System update completed.</p>
                            </li>
                            <li class="flex items-center">
                                <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                                <p class="text-gray-800">Scheduled maintenance coming up.</p>
                            </li>
                        </ul>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
@endsection
