@extends('backend.layout.root')
@section('content')
    <!-- Main Content -->
    <div class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Total Users</h2>
                <p class="text-4xl font-bold">100</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Total Orders</h2>
                <p class="text-4xl font-bold">250</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Total Revenue</h2>
                <p class="text-4xl font-bold">$10,000</p>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="mt-8">
            <h2 class="text-lg font-semibold mb-4">Sales Chart</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <!-- Your chart component goes here -->
                <img src="https://via.placeholder.com/600x300" alt="Chart" class="w-full">
            </div>
        </div>
    </div>
@endsection
