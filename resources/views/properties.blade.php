@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Properties <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Properties</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                       role="tab" aria-controls="v-pills-1" aria-selected="true">Buy Properties</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                       aria-controls="v-pills-2" aria-selected="false">Rent Properties</a>
                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                         aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Enter Keyword</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Property Type</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span>
                                                                </div>
                                                                <select name id class="form-control">
                                                                    <option value>Residential</option>
                                                                    <option value>Commercial</option>
                                                                    <option value>Land</option>
                                                                    <option value>Industrial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Location</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span>
                                                                </div>
                                                                <select name id class="form-control">
                                                                    <option value>£100</option>
                                                                    <option value>£10,000</option>
                                                                    <option value>£50,000</option>
                                                                    <option value>£100,000</option>
                                                                    <option value>£200,000</option>
                                                                    <option value>£300,000</option>
                                                                    <option value>£400,000</option>
                                                                    <option value>£500,000</option>
                                                                    <option value>£600,000</option>
                                                                    <option value>£700,000</option>
                                                                    <option value>£800,000</option>
                                                                    <option value>£900,000</option>
                                                                    <option value>£1,000,000</option>
                                                                    <option value>£2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
                                                                   class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                         aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Enter Keyword</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Property Type</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span>
                                                                </div>
                                                                <select name id class="form-control">
                                                                    <option value>Residential</option>
                                                                    <option value>Commercial</option>
                                                                    <option value>Land</option>
                                                                    <option value>Industrial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Location</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span>
                                                                </div>
                                                                <select name id class="form-control">
                                                                    <option value>£100</option>
                                                                    <option value>£10,000</option>
                                                                    <option value>£50,000</option>
                                                                    <option value>£100,000</option>
                                                                    <option value>£200,000</option>
                                                                    <option value>£300,000</option>
                                                                    <option value>£400,000</option>
                                                                    <option value>£500,000</option>
                                                                    <option value>£600,000</option>
                                                                    <option value>£700,000</option>
                                                                    <option value>£800,000</option>
                                                                    <option value>£900,000</option>
                                                                    <option value>£1,000,000</option>
                                                                    <option value>£2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
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
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row">
                @foreach($properties as $property)
                    @php
                        $image = $property->medias->first();
                    @endphp
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="property-wrap">
                        <a href="#" class="img img-property" style="background-image: url({{asset('storage/'. $image?->path)}});">
                            <p class="price"><span class="orig-price">£{{$property->price}}</span></p>
                        </a>
                        <div class="text">
                            <div class="list-team d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="img" style="background-image: url({{asset('assets1/images/person_1.jpg')}});"></div>
                                    <h3 class="ml-2">{{$property->user->name}}</h3>
                                </div>
                                <span class="text-right">2 weeks ago</span>
                            </div>
                            <h3><a href="#">{{$property->name}}</a></h3>
                            <span class="location"><i class="ion-ios-pin"></i> {{$property->location}} <span
                                    class="sale">{{ucfirst($property->type)}}</span></span>
                            <ul class="property_list mt-3 mb-0">
                                <li><span class="flaticon-bed"></span>{{$property->rooms}}</li>
                                <li><span class="flaticon-bathtub"></span>{{$property->bathrooms}}</li>
                                <li><span class="flaticon-blueprint"></span>{{$property->area}} sqft</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
