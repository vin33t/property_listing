@extends('backend.layout.root')
@section('content')
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="flex w-full justify-between p-4">
                                <span class="card-title card-padding pb-0">Images</span>
                                <a href="{{route('gallery.create')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th class="text-left">Title</th>
                                        <th class="text-left">Image</th>
                                        <th class="text-left">Category</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($galleries as $gallery)
                                    <tr>
                                        <td class="text-left">{{$loop->iteration}}</td>
                                        <td class="text-left">{{$gallery->title}}</td>
                                        <td class="text-left">
                                            @php
                                                $images = \App\Models\Media::where('model_type', 'App\Models\Gallery')->where('model_id', $gallery->id)->get();
                                            @endphp
                                            @foreach($images as $image)
                                                <div>
                                                    <img src="{{asset('storage/'. $image->path)}}" alt="" style="width: 100px;">
                                                </div>
                                            @endforeach
                                        </td>
                                        <td class="text-left">{{$gallery->galleryCategory->name}}</td>
                                        <td class="text-left">
                                            <a href="{{route('gallery.edit', ['gallery' => $gallery])}}" class="mdc-button text-button--info">
                                            Edit
                                            </a>

                                            <a href="{{route('gallery.destroy', ['gallery' => $gallery])}}"  class="mdc-button text-button--secondary">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>


@endsection
