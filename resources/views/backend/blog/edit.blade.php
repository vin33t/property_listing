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

            <h2 class="text-xl font-semibold mb-4">Blog</h2>
            <!-- Form -->
            <form action="{{route('blog.update', ['blog' => $blog])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" value="{{$blog->title}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="media" class="block text-sm font-medium text-gray-700">Media</label>
                    <input type="file" id="media" name="media[]" multiple class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <div>
                        @php
                            $images = \App\Models\Media::where('model_type', 'App\Models\Blog')->where('model_id', $blog->id)->get();
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
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea id="content" name="content" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{$blog->content}}</textarea>
                </div>
                <div class="mb-4">
                    <label for="meta_description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="meta_description" name="meta_description" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{$blog->meta_description}}</textarea>
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-200" value="Create"/>
                </div>
            </form>
        </div>
    </div>
@endsection
