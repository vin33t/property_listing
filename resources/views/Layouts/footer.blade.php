<section class="ftco-gallery">
    <div class="container-xl-fluid">
        <div class="row g-0">
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <a href="{{asset('assets1/images/gallery-1.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url({{asset('assets1/images/gallery-1.jpg')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <a href="{{asset('assets1/images/gallery-2.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url({{asset('assets1/images/gallery-2.jpg')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="{{asset('assets1/images/gallery-3.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url({{asset('assets1/images/gallery-3.jpg')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <a href="{{asset('assets1/images/gallery-4.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url({{asset('assets1/images/gallery-4.jpg')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                <a href="{{asset('assets1/images/gallery-5.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url({{asset('assets1/images/gallery-5.jpg')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <a href="{{asset('assets1/images/gallery-6.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url({{asset('assets1/images/gallery-6.jpg')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                </a>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer">
    <div class="container-xl">
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo d-flex">
                        <a class="navbar-brand align-items-center" href="{{route('home')}}">
                            <img src="{{asset('assets1/images/logo.jpg')}}" alt="" style="height: 50px; width: auto">

                            {{--                            <span class>Oakberry <small>Real Estate Agency</small></span>--}}
                        </a>
                    </h2>
                    <p>We find exclusive deals, lands, warehouses, investments and off market properties for our potential investors. </p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li><a href="https://www.instagram.com/karanjeeproperties?igshid=ZWQyN2ExYTkwZQ%3D%3D"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="https://api.whatsapp.com/message/5Q2RYDDS2NSCI1?autoload=1&amp;app_absent=0"><span class="fa fa-whatsapp"></span></a></li>
                        </ul>
                </div>
                @php
                    $visitCount = \App\Models\VisitCount::where('page', '/')->first();
                @endphp
                <p>Visits: {{ $visitCount ? $visitCount->count : 0 }}</p>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Offers</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('properties')}}"><span class="fa fa-chevron-right mr-2"></span>Properties</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                        <li><a href="{{route('about')}}"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                        <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('termsCondition')}}"><span class="fa fa-chevron-right mr-2"></span>Terms &amp; Conditions</a></li>
                        <li><a href="{{route('privacyPolicy')}}"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">UNIT 15, FIRST FLOOR, 65,THE BROADWAY, UB1 1JY</span></li>
                            <li><a href="tel://0208 574 6816"><span class="icon fa fa-phone"></span><span class="text">0208 574 6816</span></a></li>
{{--                            <li><a href="mail"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="630a0d050c231a0c1611070c0e020a0d4d000c0e">[email&#160;protected]</span></span></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-4 bg-darken">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true" style="color: #dc3545"></i> by <a href="https://himsoftsolution.com" target="_blank" rel="nofollow noopener">Him Soft Solution</a>
                </div>
            </div>
        </div>
    </div>
</footer>
