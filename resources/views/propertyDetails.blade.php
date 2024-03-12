@extends('Layouts.layout')

@section('content')
    @php
        $media = \App\Models\Media::where('model_type', 'App\Models\Property')->where('model_id', $property->id)->first();
    @endphp
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('storage/'. $media?->path)}});">
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
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                     data-aos-duration="1000">

                    <div class="img w-100" style="background-image: url({{asset('storage/'. $media?->path)}});"></div>
                </div>
                <div class="col-md-8 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="subheading">Property Details</span>
                    <h2 class="mb-4">{{$property->title}}</h2>
                    <p>
                        {{$property->description}}
                    </p>
                    <div class="row py-5">
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-duration="1000">
                                <div class="text">
                                <span class="d-block number gradient-text"><span id="count1" class="counter"
                                                                                 data-count="{{$property->area}}">0</span></span>
                                    <p>Area(Sq.Ft.)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                <div class="text">
                                <span class="d-block number gradient-text"><span id="count2" class="counter"
                                                                                 data-count="{{$property->price}}">0</span>K+</span>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>

                        @if($property->bathrooms != null)
                                <div class="col-md-6 col-lg-3">
                                    <div class="counter-wrap" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div class="text">
                                        <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="{{$property->bathrooms}}">0</span></span>
                                            <p>Bathrooms</p>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($property->rooms != null)
                         <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                <div class="text">
                                <span class="d-block number gradient-text"><span id="count2" class="counter"
                                                                                 data-count="{{$property->rooms}}">0</span></span>
                                    <p>Rooms</p>
                                </div>
                            </div>
                        </div>
                            @endif
                    </div>



                    <div class="swiffy-slider">
                        <ul class="slider-container">
                            <li>
                                <div class="img img-2" style="background-image: url({{asset('assets1/images/about-1.jpg')}});" data-aos="fade-up"
                                     data-aos-delay="400" data-aos-duration="1000">
                                </div>
                            </li>
                            <li>
                                <div class="img img-2" style="background-image: url({{asset('assets1/images/about-2.jpg')}});" data-aos="fade-up"
                                     data-aos-delay="400" data-aos-duration="1000">
                                </div>
                            </li>
                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>

                        <div class="slider-indicators">
                            <button class="active"></button>
                            <button></button>
                            <button></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
