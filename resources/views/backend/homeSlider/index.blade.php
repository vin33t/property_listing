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
                                <span class="card-title card-padding pb-0">Home Slider</span>
                                <a href="{{route('homeSlider.create')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add Slide
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th class="text-left">Heading</th>
                                        <th class="text-left">Description</th>
                                        <th class="text-left">Image</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td class="text-left">{{$loop->iteration}}</td>
                                            <td class="text-left">{{$slider->heading}}</td>
                                            <td class="text-left">{{$slider->description}}</td>
                                            <td class="text-left"><img src="{{asset('storage/'. $slider->image)}}" alt="" style="height: 100px"></td>

                                            <td class="text-left">
                                                <a href="{{route('homeSlider.edit', ['homeSlider' => $slider->id])}}"  class="mdc-button text-button--primary">
                                                    Edit
                                                </a>
                                                <a href="{{route('homeSlider.destroy', ['homeSlider' => $slider->id])}}"  class="mdc-button text-button--secondary">
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
        {{--        <!-- partial:../../partials/_footer.html -->--}}
        {{--        <footer>--}}
        {{--            <div class="mdc-layout-grid">--}}
        {{--                <div class="mdc-layout-grid__inner">--}}
        {{--                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">--}}
        {{--                        <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span>--}}
        {{--                    </div>--}}
        {{--                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">--}}
        {{--                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Free <a href="https://www.bootstrapdash.com/material-design-dashboard/" target="_blank"> material admin </a> dashboards from Bootstrapdash.com</span>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </footer>--}}
        {{--        <!-- partial -->--}}
    </div>


@endsection
