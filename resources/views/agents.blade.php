@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Our Agents <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Our Agents</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-agent">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="agent">
                        <div class="img">
                            <img src="{{asset('assets/images/team-1.jpg')}}" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <p class="h-info"><span class="position">Listing</span> <span
                                    class="details">10 Properties</span></p>
                            <h3><a href="{{route('properties')}}">Mike Bochs</a></h3>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="agent">
                        <div class="img">
                            <img src="{{asset('assets/images/team-2.jpg')}}" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <p class="h-info"><span class="position">Listing</span> <span
                                    class="details">10 Properties</span></p>
                            <h3><a href="{{route('properties')}}">Mike Bochs</a></h3>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="agent">
                        <div class="img">
                            <img src="{{asset('assets/images/team-3.jpg')}}" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <p class="h-info"><span class="position">Listing</span> <span
                                    class="details">10 Properties</span></p>
                            <h3><a href="{{route('properties')}}">Jessica Moore</a></h3>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="agent">
                        <div class="img">
                            <img src="{{asset('assets/images/team-4.jpg')}}" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <p class="h-info"><span class="position">Listing</span> <span
                                    class="details">10 Properties</span></p>
                            <h3><a href="{{route('properties')}}">Sarah Geronimo</a></h3>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#"
                                                            class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
