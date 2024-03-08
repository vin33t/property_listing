@extends('backend.layout.root')
@section('content')
    <!-- Card -->
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <div class="flex justify-between item-center">
                <h2 class="text-xl font-semibold mb-4">Blogs</h2>
                <a href="{{route('blog.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add
                </a>

            </div>

            <!-- Table -->
            <div class="overflow-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">Title</th>
                        <th class="px-6 py-3 text-left font-semibold">Description</th>
                        <th class="px-6 py-3 text-left font-semibold">Images</th>
                        <th class="px-6 py-3 text-left font-semibold">Action</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse($blogs as $blog)
                    <tr>
                        <td class="px-6 py-4">{{$blog->title}}</td>
                        <td class="px-6 py-4">{{$blog->meta_description}}</td>
                        <td class="px-6 py-4">
                            @php
                                $images = \App\Models\Media::where('model_type', 'App\Models\Blog')->where('model_id', $blog->id)->get();
                            @endphp
                            @foreach($images as $image)
                                <div>
                                    <img src="{{asset('storage/'. $image->path)}}" alt="" style="width: 100px;">
                                </div>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('blog.edit', ['blog' => $blog->id])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                            <a href="{{route('blog.destroy', ['blog' => $blog->id])}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td>No Records</td>
                        </tr>
                    @endforelse
                        <!-- Add more table rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
