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

            <h2 class="text-xl font-semibold mb-4">Property</h2>
            <!-- Form -->
            <form action="{{route('property.update', ['property' => $property])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" value="{{$property->title}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="media" class="block text-sm font-medium text-gray-700">Media</label>
                    <input type="file" id="media" name="media[]" multiple class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <div>
                        @php
                            $images = \App\Models\Media::where('model_type', 'App\Models\Property')->where('model_id', $property->id)->get();
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
                    <textarea id="description" name="description" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{$property->description}}</textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price" value="{{$property->price}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" id="location" name="location" value="{{$property->location}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="area" class="block text-sm font-medium text-gray-700">Area in squire meter</label>
                    <input type="number" id="area" name="area" value="{{$property->area}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="rooms" class="block text-sm font-medium text-gray-700">Rooms</label>
                    <input type="number" id="rooms" name="rooms" value="{{$property->rooms}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="bathrooms" class="block text-sm font-medium text-gray-700">Bathrooms</label>
                    <input type="number" id="bathrooms" name="bathrooms" value="{{$property->bathrooms}}" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$property->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="user_id" class="block text-sm font-medium text-gray-700">Agent</label>
                    <select name="user_id" id="" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        @foreach($users as $user)
                            <option value="{{$user->id}}" {{$property->user_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="type" class="block text-sm font-medium text-gray-700">Type [Sale/Rent]</label>
                    <select name="type" id="" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="sale" {{$property->type == 'sale' ? 'selected' : ''}}>Sale</option>
                        <option value="rent" {{$property->type == 'rent' ? 'selected' : ''}}>Rent</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="is_featured" class="block text-sm font-medium text-gray-700">Featured [Yes/No]</label>
                    <select name="is_featured" id="" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="1" {{$property->is_featured == 1 ? 'selected' : ''}} >Yes</option>
                        <option value="0" {{$property->is_featured == 0 ? 'selected' : ''}}>No</option>
                    </select>
                </div>
                <div class="mt-4">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-200" value="Create"/>
                </div>
            </form>
        </div>
    </div>
@endsection
