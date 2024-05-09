@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ $property->getFirstMediaUrl('images') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Property Details <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">{{$property->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about-section">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="col-md-8 align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                     data-aos-duration="1000">

                    <div style="margin-bottom: 20px" class="swiffy-slider">
                        <ul class="slider-container">
                            @foreach($property->getMedia('images') as $image)
                                <li>
                                    <div class="img img-2" style="background-image: url({{ $image->getFullUrl() }});" data-aos="fade-up"
                                         data-aos-delay="400" data-aos-duration="1000">
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>
                    </div>


                    <span class="subheading">Property Details</span>
                    <h4 style="color: #dc3545">{{$property->title}}</h4>
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-duration="1000">
                                <div >

                                    @if($property->is_area_visible )
                                        <p>{{$property->area}} <span style="font-size: 12px">Area(Sq.Ft.)</span></p>

                                    @endif
                                </div>
                            </div>
                        </div>

                        @if($property->is_bathrooms_visible )
                            @if($property->bathrooms != null)
                                <div class="col-md-3 col-lg-2">
                                    <div class="counter-wrap" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div >
                                            <p> {{$property->bathrooms}} <span style="font-size: 12px">Bathrooms</span> </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if($property->is_rooms_visible )

                        @if($property->rooms != null)
                            <div class="col-md-3 col-lg-2">
                                <div class="counter-wrap" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                    <div >
                                        <p>{{$property->rooms}} <span style="font-size: 12px">Rooms</span> </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                            @endif
                    </div>


                    @if($property->is_price_visible)

                    <h2 style="color: #dc3545"><span style="color: black; font-size: 25px;">From: </span> £ {{$property->price}}</h2>
                    @endif
                    <div class="ftco-search d-flex justify-content-center" style="margin-top: 20px; padding-top: 20px; background-color: whitesmoke">
                        <div class="row" style="width: 100%">
                            <div class="col-md-12 nav-link-wrap d-flex">
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#propertyDetails"
                                       role="tab" aria-controls="propertyDetails" aria-selected="true" style="padding: 2px 20px; font-size: 10px">Details</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#propertyFloorPlan" role="tab"
                                       aria-controls="propertyFloorPlan" aria-selected="false" style="padding: 2px 20px; font-size: 10px">Floor Plan</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#propertyEpc" role="tab"
                                       aria-controls="propertyEpc" aria-selected="false" style="padding: 2px 20px; font-size: 10px">EPC</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#propertyMap" role="tab"
                                       aria-controls="propertyMap" aria-selected="false" style="padding: 2px 20px; font-size: 10px">Map</a>
                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent" style="background-color: whitesmoke; padding: 20px 0px">
                                    <div class="tab-pane fade show active" id="propertyDetails" role="tabpanel"
                                         aria-labelledby="v-pills-nextgen-tab">
                                        <p>
                                            {{$property->description}}
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="propertyFloorPlan" role="tabpanel"
                                         aria-labelledby="v-pills-performance-tab">
                                        <img src="{{asset('storage/'. $property->floor_plan)}}" style="width: 100%; height: 400px" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="propertyEpc" role="tabpanel"
                                         aria-labelledby="v-pills-performance-tab">
                                        <img src="{{asset('storage/'. $property->epc)}}" style="width: 100%; height: 400px" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="propertyMap" role="tabpanel"
                                         aria-labelledby="v-pills-performance-tab" >
                                        <div style="width: 100%; height: max-content; display: flex; justify-content: center">
                                            <iframe
                                                width="600"
                                                height="450"
                                                style="border:0"
                                                loading="lazy"
                                                allowfullscreen
                                                referrerpolicy="no-referrer-when-downgrade"
                                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA1MwEdKCKMwP-jLQGNBDnmcJyNte9-gnA
    &q={{ $property->latitude }},{{ $property->longitude }}">
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="contact-wrap w-100 p-md-5 p-4" style="background-color: whitesmoke">
                      <div style="display: flex; flex-direction: column">
                          <img src="{{asset('assets1/images/logo.jpg')}}" style="width: 50px; height: auto" alt="">
                          <a href="{{route('properties')}}" style="margin-top: 20px">View All Properties</a>
                      </div>
                        <div class="row mb-4">
                            <div class="col-12" style="margin-top: 20px">
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text">
                                        <p><span>Address:</span>UNIT 15, FIRST FLOOR, 65, THE BROADWAY, UB1 1JY </p>
                                    </div>
                                </div>
                            </div>
                            {{--                                        <div class="col-12">--}}
                            {{--                                            <div class="dbox w-100 d-flex align-items-start">--}}
                            {{--                                                <div class="text">--}}
                            {{--                                                    <p><span>Email:</span> <a--}}
                            {{--                                                            href="/cdn-cgi/l/email-protection#bad3d4dcd5fac3d5cfc8c9d3cedf94d9d5d7"><span--}}
                            {{--                                                                class="__cf_email__"--}}
                            {{--                                                                data-cfemail="224b4c444d625b4d5750514b56470c414d4f">[email&#160;protected]</span></a>--}}
                            {{--                                                    </p>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            <div class="col-12" style="margin-top: 20px">
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text">
                                        <p><span>Call us</span></p>
                                        <p style="text-decoration: underline"><a href="tel: 07513141890 " style="color: #dc3545">Directly</a></p><br>
                                        <p>07513141890</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="contactForm" name="contactForm" class="contactForm">
                            <div class="row">
                                <div class="col-12">
                                    <h6>Fill in your details below to request a viewing</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Name" style="background-color: whitesmoke">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Email" style="background-color: whitesmoke">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" id="phone"
                                               placeholder="Contact No. " style="background-color: whitesmoke">
                                    </div>
                                </div>

                                <div class="col-md-12" style="margin-top: 20px">
                                    <div class="form-group">
                                        <input type="submit" value="Request Viewing" class="btn btn-primary">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
