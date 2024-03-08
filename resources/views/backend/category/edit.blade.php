@extends('backend.layout.root')
@section('content')
    <!-- Form Container -->
    <div class=" bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <ul class="mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2 class="text-xl font-semibold mb-4">Category</h2>
            <!-- Form -->
            <form action="{{route('category.update', ['category'=> $category])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{$category->name}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="media" class="block text-sm font-medium text-gray-700">Media</label>
                    <input type="file" id="media" multiple name="media[]" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <div>
                        @php
                            $images = \App\Models\Media::where('model_type', 'App\Models\Category')->where('model_id', $category->id)->get();
                        @endphp
                        @foreach($images as $image)
                            <div class="flex w-max relative">
                                <img src="{{asset('storage/'. $image->path)}}" alt="" class="" style="width: 100px;">
                                <a href="{{route('mediaDelete', ['media' => $image])}}" class="p-1 absolute h-max rounded-md bg-red-500 top-0 right-0" >X</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{$category->description}}</textarea>
                </div>
                <div class="mt-4">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-200" value="Create"/>
                </div>
            </form>
        </div>
    </div>
@endsection
