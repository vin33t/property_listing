@extends('backend.layout.root')
@section('content')
    <!-- Card -->
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <div class="flex justify-between item-center">
                <h2 class="text-xl font-semibold mb-4">User Management</h2>
                <a href="{{route('category.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add
                </a>

            </div>

            <!-- Table -->
            <div class="overflow-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">Name</th>
                        <th class="px-6 py-3 text-left font-semibold">Description</th>
                        <th class="px-6 py-3 text-left font-semibold">Image</th>
                        <th class="px-6 py-3 text-left font-semibold">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @foreach($categories as $category)

                    <tr>
                        <td class="px-6 py-4">{{$category->name}}</td>
                        <td class="px-6 py-4">{{$category->description}}</td>
                        <td class="px-6 py-4">
                            @php
                                $images = \App\Models\Media::where('model_type', 'App\Models\Category')->where('model_id', $category->id)->get();
                            @endphp
                            @foreach($images as $image)
                                <div>
                                    <img src="{{asset('storage/'. $image->path)}}" alt="" style="width: 100px;">
                                </div>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('category.edit', ['category' => $category])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                            <a  href="{{route('category.destroy', ['category' => $category])}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Add more table rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
