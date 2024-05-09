<section class="slider-hero">
    <div class="overlay"></div>
    <div class="hero-slider">
        @foreach($slides as $slide)
            <x-banner_slide
                image="{{asset($slide->image)}}"
                {{--                    image="{{asset('storage/'. $media?->path)}}"--}}
                title="{{$slide->heading}}"
                description="{{$slide->description}}"
                link="{{route('properties')}}">
            </x-banner_slide>

        @endforeach
    </div>
</section>
