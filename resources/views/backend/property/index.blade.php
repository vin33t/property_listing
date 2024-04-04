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

                                <span class="card-title card-padding pb-0">Properties</span>
                                <a href="{{route('property.create')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th class="text-left">Title</th>
                                        <th class="text-left">Price</th>
                                        <th class="text-left">Location</th>
                                        <th class="text-left">Area</th>
                                        <th class="text-left">Image</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($properties as $property)
                                        <tr>
                                            <td class="text-left">{{$loop->iteration}}</td>
                                            <td class="text-left">{{$property->title}}</td>
                                            <td class="text-left">{{$property->price}}</td>
                                            <td class="text-left">{{$property->location}}</td>
                                            <td class="text-left">{{$property->area}}</td>
                                            <td class="text-left">
                                                @php
                                                    $image = $property->media->first();
                                                @endphp
                                                    <div>
                                                        <img src="{{asset('storage'. $image?->path)}}" alt="" style="width: 100px;">
                                                    </div>
                                            </td>
                                            <td class="text-left">
                                                <a href="{{route('property.edit', ['property' => $property])}}" class="mdc-button text-button--info">
                                                    Edit
                                                </a>

                                                <a href="{{route('property.destroy', ['property' => $property])}}"  class="mdc-button text-button--secondary">
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
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>



@endsection
