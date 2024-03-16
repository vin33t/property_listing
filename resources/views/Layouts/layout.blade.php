<!DOCTYPE html>
<html lang="en">
<head>
    <title>Real Estate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets1/images/logo.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets1/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
        @media (max-width: 1200px) {
            .appraisal_form {
                width: 60% !important;
            }
        }
        @media (max-width: 768px) {
            .appraisal_form {
                width: 80% !important;
            }
        }
        @media (max-width: 500px) {
            .appraisal_form {
                width: 90% !important;
            }
        }
    </style>

    @livewireStyles
</head>
<body>
            @include('Layouts.header')
               @yield('content')
            @include('Layouts.footer')


            <div id="appraisal_form" style=" position: fixed; top:0px; left: 0px; height: 100vh; width: 100%; z-index: 9999; display: none; justify-content: center; align-items: center; background-color: rgba(0,0,0,0.46)">
                <section class="ftco-section bg-light appraisal_form"  style="width: 30%; height: max-content; max-height: 80%; overflow-y: auto; padding: 1rem 0; margin: auto 0" >


                    <div class="container" style="position: relative">
                        <div class=" social-media mt-5" style="position: absolute; top:-50px; right:10px; width: max-content; height: max-content">
                            <ul class="ftco-footer-social list-unstyled mt-2">
                                <li><a href="javascript:void(0)"
                                       onclick="
                      appraisal_form = document.getElementById('appraisal_form');
                        appraisal_form.style.display = 'none';
                 "
                                    ><span class="fa fa-cross">X</span></a></li>
                            </ul>
                        </div>
                        <div class="row no-gutters justify-content-center">
                            <div class="col-md-12">
                                <div class="wrapper">
                                    <div class="row g-0">
                                        <div class="col-lg-12">
                                            <div class="contact-wrap w-100 p-md-5 p-4">
                                                <p class="mb-4">Please use to form below to send an enquiry and request a valuation</p>
                                                <form id="contactForm" name="contactForm" class="contactForm">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select class="form-control" name="title" id="title" style="padding: 5px; border-radius: 0px">
                                                                    <option value="">Select</option>
                                                                    <option value="Mr">Mr</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Miss">Miss</option>
                                                                    <option value="Dr">Dr</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="first_name" id="first_name"
                                                                       placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                                       placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="address_line_1" id="address_line_1"
                                                                       placeholder="Address Line 1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="address_line_2" id="address_line_2"
                                                                       placeholder="Address Line 2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="city" id="city"
                                                                       placeholder="City">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-4">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" name="post_code" id="post_code"
                                                                       placeholder="Post Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-6">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="email" id="email"
                                                                       placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" name="phone" id="phone"
                                                                       placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select class="form-control" name="valuation_for" id="valuation_for" style="padding: 5px; border-radius: 0px">
                                                                    <option value="">Valuation For</option>
                                                                    <option value="Option 1">Option 1</option>
                                                                    <option value="Option 2">Option 2</option>
                                                                    <option value="Option 3">Option 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select class="form-control" name="bedrooms" id="bedrooms" style="padding: 5px; border-radius: 0px">
                                                                    <option value="">Bedrooms</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select class="form-control" name="property_type" id="property_type" style="padding: 5px; border-radius: 0px">
                                                                    <option value="">Property Type</option>
                                                                    <option value="Commercial">Commercial</option>
                                                                    <option value="Residential">Residential</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                <textarea name="comments" class="form-control" id="comments" cols="30"
                                                          rows="4" placeholder="Request/ Comments"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" style="margin-top: 10px">
                                                            <p >I give consent to be contacted for the followings:</p>
                                                            <div class="form-group">
                                                                <input type="checkbox" class="form-check-input" name="property_alert" id="property_alert" value="1">
                                                                <label for="property_alert">Property Alert</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="checkbox" class="form-check-input" name="general_news" id="general_news" value="1">
                                                                <label for="general_news">General News</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="checkbox" class="form-check-input" name="marketing_offers" id="marketing_offers" value="1">
                                                                <label for="marketing_offers">Marketing and offers</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12" style="margin-top: 20px">
                                                            <div class="form-group">
                                                                <input type="submit" value="Submit" class="btn btn-primary">
                                                                <div class="submitting"></div>
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
                </section>

            </div>





    <script src="{{asset('assets1/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets1/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets1/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets1/js/aos.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('assets1/js/google-map.js')}}"></script>
    <script src="{{asset('assets1/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"85eff2b8b8fe9e38","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
            <x-toaster-hub />
            @livewireScripts
</body>
</html>
