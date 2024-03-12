@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Terms and Conditions <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Terms and Conditions</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about-section">
        @php
            $privacyPolicy = \App\Models\TermAndCondition::find(1);
        @endphp
        <div class="px-4">
            {!! $privacyPolicy->content !!}
        </div>
    </section>




@endsection
