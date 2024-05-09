@extends('Layouts.layout')
@section('content')
  <x-hero-slider/>


    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    {{--                                    tab links here--}}
                                    <a class="nav-link " id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                       role="tab" aria-controls="v-pills-1" aria-selected="true">Buy Properties</a>
                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent">

                                    {{--tab content here--}}
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                         aria-labelledby="v-pills-nextgen-tab">
                                        <form action="{{route('searchProperties')}}" method="POST"
                                              class="search-property-1">
                                            @csrf
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Property Type</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>

                                                                @php
                                                                    $categories = \App\Models\Category::all();
                                                                @endphp

                                                                <select name="property_type" id class="form-control">
                                                                    @foreach($categories as $category)
                                                                        <option style="color: black"
                                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Location</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <select  name="location" id class="form-control">
                                                                @foreach($locations as $location)
                                                                    <option style="color: black"
                                                                        value="{{$location}}">{{ucfirst($location)}}</option>
                                                                @endforeach
                                                            </select>



                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Area(Sq.Ft.)</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-map"></span></div>
                                                            <input type="number" name="area" class="form-control"
                                                                   value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="price" class="form-control">
                                                                    <option style="color: black" value="100">£100</option>
                                                                    <option style="color: black" value="10000">£10,000</option>
                                                                    <option style="color: black" value="50000">£50,000</option>
                                                                    <option style="color: black" value="100000">£100,000</option>
                                                                    <option style="color: black" value="200000">£200,000</option>
                                                                    <option style="color: black" value="300000">£300,000</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit"
                                                                   class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Categories</span>
                    <h2 class="mb-4">Explore Our Categories &amp; Places</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
{{--                    <div class="row g-1 mb-1 desktop_category_list">--}}
{{--                        @foreach($categories as $category)--}}
{{--                            @php--}}
{{--                                $media = \App\Models\Media::where('model_type', 'App\Models\Category')->where('model_id', $category->id)->first();--}}
{{--                            @endphp--}}
{{--                            <div class="col-md-4 text-center d-flex align-items-stretch" data-aos="fade-up"--}}
{{--                                 data-aos-delay="100" data-aos-duration="1000">--}}
{{--                                <a href="{{route('properties', ['id' => $category])}}" class="services">--}}
{{--                                    @if($media==Null)--}}
{{--                                        <img src="{{asset('assets1/images/noImg.jpg')}}"--}}
{{--                                             style="height: 100px; width: 100px; border-radius: 50%" alt="">--}}
{{--                                    @else--}}
{{--                                        <img src="{{asset('storage/'. $media->path)}}"--}}
{{--                                             style="height: 100px; width: 100px; border-radius: 50%" alt="">--}}
{{--                                    @endif--}}
{{--                                    <div class="text">--}}
{{--                                        <h2>{{$category->name}}</h2>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                        @endforeach--}}
{{--                    </div>--}}

                    <div class="row g-1 mb-1 ">
                        <div class="swiffy-slider slider-item-show4">
                            <ul class="slider-container">
                                @foreach($categories as $category)
                                    <li>
                                        <div class=" text-center d-flex align-items-stretch" data-aos="fade-up"
                                             data-aos-delay="100" data-aos-duration="1000" style="height: 100%;">
                                            <a href="{{route('properties', $category)}}" class="services" >
                                                @if($category->getMedia()?->first())
                                                    <img src="{{ $category->getFirstMediaUrl() }}"
                                                         style="height: 100px; width: 100px; border-radius: 50%" alt="">
                                             @else
                                                    <img src="{{asset('assets1/images/noImg.jpg')}}"
                                                         style="height: 100px; width: 100px; border-radius: 50%" alt="">
                                                    @endif
                                                <div class="text">
                                                    <h2>{{$category->name}}</h2>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <button type="button" class="slider-nav"></button>
                            <button type="button" class="slider-nav slider-nav-next"></button>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Properties</span>
                    <h2 class="mb-4">Featured Properties</h2>
                </div>
            </div>
            <div class="row" style="row-gap: 30px">
                @foreach($properties as $property)
                    <x-property-card :property="$property"/>
                @endforeach
            </div>
        </div>
    </section>
    <section class="img vid-section" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-6 vid-height d-flex align-items-center justify-content-center text-center">
                    <div class="video-wrap" data-aos="fade-up">
                        <h3>Modern House Video</h3>
                        <p style="color: whitesmoke"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                        <a href="{{option('about_videoUrl')}}" target="_blank" class="video-icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Clients We Help</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('assets1/images/person_1.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('assets1/images/person_2.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('assets1/images/person_3.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('assets1/images/person_1.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('assets1/images/person_2.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <section class="ftco-section ftco-agent ftco-no-pb">--}}
    {{--        <div class="overlay"></div>--}}
    {{--        <div class="container-xl">--}}
    {{--            <div class="row justify-content-center pb-5">--}}
    {{--                <div class="col-md-10 heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">--}}
    {{--                    <span class="subheading">Meets Our Agents</span>--}}
    {{--                    <h2 class="mb-4">Our Agents</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                @foreach($agents as $agent)--}}
    {{--                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">--}}
    {{--                    <div class="agent">--}}
    {{--                        <div class="img">--}}
    {{--                            <img src="{{asset('assets1/images/team-1.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
    {{--                        </div>--}}
    {{--                        <div class="desc">--}}
    {{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">{{$agent->properties_count}} Properties</span></p>--}}
    {{--                            <h3><a href="#">{{$agent->name}}</a></h3>--}}
    {{--                            <ul class="ftco-social">--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                @endforeach--}}

    {{--                --}}{{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">--}}
    {{--                    <div class="agent">--}}
    {{--                        <div class="img">--}}
    {{--                            <img src="{{asset('assets1/images/team-2.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
    {{--                        </div>--}}
    {{--                        <div class="desc">--}}
    {{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>--}}
    {{--                            <h3><a href="#">Mike Bochs</a></h3>--}}
    {{--                            <ul class="ftco-social">--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">--}}
    {{--                    <div class="agent">--}}
    {{--                        <div class="img">--}}
    {{--                            <img src="{{asset('assets1/images/team-3.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
    {{--                        </div>--}}
    {{--                        <div class="desc">--}}
    {{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>--}}
    {{--                            <h3><a href="#">Jessica Moore</a></h3>--}}
    {{--                            <ul class="ftco-social">--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">--}}
    {{--                    <div class="agent">--}}
    {{--                        <div class="img">--}}
    {{--                            <img src="{{asset('assets1/images/team-4.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
    {{--                        </div>--}}
    {{--                        <div class="desc">--}}
    {{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>--}}
    {{--                            <h3><a href="#">Sarah Geronimo</a></h3>--}}
    {{--                            <ul class="ftco-social">--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
    {{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <section class="ftco-section bg-light">--}}
    {{--        <div class="container-xl">--}}
    {{--            <div class="row justify-content-center mb-5">--}}
    {{--                <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">--}}
    {{--                    <span class="subheading">Our Blog</span>--}}
    {{--                    <h2>Recent Blog</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-3 d-flex">--}}
    {{--                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">--}}
    {{--                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets1/images/image_1.jpg')}});">--}}
    {{--                        </a>--}}
    {{--                        <div class="text">--}}
    {{--                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>--}}
    {{--                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>--}}
    {{--                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 d-flex">--}}
    {{--                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">--}}
    {{--                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets1/images/image_2.jpg')}});">--}}
    {{--                        </a>--}}
    {{--                        <div class="text">--}}
    {{--                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>--}}
    {{--                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>--}}
    {{--                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 d-flex">--}}
    {{--                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">--}}
    {{--                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets1/images/image_3.jpg')}});">--}}
    {{--                        </a>--}}
    {{--                        <div class="text">--}}
    {{--                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>--}}
    {{--                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>--}}
    {{--                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 d-flex">--}}
    {{--                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">--}}
    {{--                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets1/images/image_4.jpg')}});">--}}
    {{--                        </a>--}}
    {{--                        <div class="text">--}}
    {{--                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>--}}
    {{--                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>--}}
    {{--                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
@endsection
