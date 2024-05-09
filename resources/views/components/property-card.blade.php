<div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="property-wrap">

        <a href="{{route('propertyDetails',$property)}}" class="img img-property"
           style="background-image: url({{$property->getMedia('images')->count() ? $property->getFirstMediaUrl('images') :asset('assets1/images/noImg.jpg')}});">
            <p class="price"><span class="orig-price">£{{$property->price}}</span></p>
        </a>
        <div class="text" style="min-height: 280px">
            <div class="list-team d-flex align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <div class="img"
                         style="background-image: url({{asset('assets1/images/person_1.jpg')}});"></div>
                    <h3 class="ml-2">{{$property->user->name}}</h3>
                </div>
                <span
                    class="text-right">{{$property->created_at->diffForHumans()}}</span>
            </div>
            <h3>
                <a href="{{route('propertyDetails', ['property' => $property])}}">{{$property->title}}</a>
            </h3>
            <span class="location"><i class="ion-ios-pin"></i> {{$property->location}}<span
                    class="sale">{{$property->type}}</span></span>
            <ul class="property_list mt-3 mb-0">
                @if($property->rooms)
                    <li><span class="flaticon-bed"></span>{{$property->rooms}}</li>
                @endif

                @if($property->rooms)
                    <li><span class="flaticon-bathtub"></span>{{$property->bathrooms}}</li>
                @endif

                <li><span class="flaticon-blueprint"></span>{{$property->area}} sqft</li>
            </ul>
        </div>
    </div>
</div>
