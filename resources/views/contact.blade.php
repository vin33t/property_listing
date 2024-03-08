

@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Contact <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>Contact us</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Address:</span>UNIT 15, FIRST FLOOR, 65, THE BROADWAY, UB1 1JY </p>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="col-md-4">--}}
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
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Phone:</span> <a href="tel://0208 574 6816">0208 574 6816</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                          rows="4" placeholder="Create a message here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w-100 social-media mt-5">
                                        <h3>Follow us here</h3>
                                        <ul class="ftco-footer-social list-unstyled mt-2">
                                            <li><a href="https://www.instagram.com/karanjeeproperties?igshid=ZWQyN2ExYTkwZQ%3D%3D"><span class="fa fa-instagram"></span></a></li>
                                            <li><a href="https://api.whatsapp.com/message/5Q2RYDDS2NSCI1?autoload=1&amp;app_absent=0"><span class="fa fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620.7754906465435!2d-0.38075973030017435!3d51.511345348238386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876738d3b0d2a99%3A0xb326a37e3783de10!2sKaranjee%20Properties!5e0!3m2!1sen!2sin!4v1709725495987!5m2!1sen!2sin" style="border:0; height:100%; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
