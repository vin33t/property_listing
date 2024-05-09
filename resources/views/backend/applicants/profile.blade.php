@extends('backend.layout.root')
@section('content')
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div
                                class="w-full p-4 bg-red-500 text-white font-bold text-lg flex justify-content-between align-items-center">
                                <span
                                    class="card-title pb-0">{{ $applicant->name }} - {{ $applicant->email }} - {{ $applicant->phone }}</span>
                            </div>


                            <div class="tab-wrapper border-t-[1px] border-white"
                                 x-data="{ activeTab: 1, tabContentsLoaded: [false, false, false, false, false, false] }">

                                <div class="grid grid-cols-6 bg-black text-white ">
                                    <div
                                        class="w-full py-2 flex justify-content-center rounded-r-md hover:bg-red-400 font-semibold transition ease-in duration-2000 cursor-pointer"
                                        @click="activeTab = 1; tabContentsLoaded[1] = true"
                                        :class="{ 'bg-red-500': activeTab === 1 }"><span>Communication</span></div>
                                    <div
                                        class="w-full py-2 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000 cursor-pointer"
                                        @click="activeTab = 2; tabContentsLoaded[2] = true"
                                        :class="{ 'bg-red-500': activeTab === 2 }"><span>Recommended Properties</span>
                                    </div>
                                    <div
                                        class="w-full py-2 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000 cursor-pointer"
                                        @click="activeTab = 3; tabContentsLoaded[3] = true"
                                        :class="{ 'bg-red-500': activeTab === 3 }"><span>Viewings</span></div>

                                    <div
                                        class="w-full py-2 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000 cursor-pointer"
                                        @click="activeTab = 4; tabContentsLoaded[4] = true"
                                        :class="{ 'bg-red-500': activeTab === 4 }"><span>Attachments</span></div>
                                </div>

                                <div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 0"
                                         x-cloak>
                                        <p>This is the example content of the first tab.</p>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 1"
                                         x-cloak>
                                        <livewire:applicant-communication :applicant="$applicant"/>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 2"
                                         x-cloak>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
                                            @foreach($applicant->recommendedProperties() as $property)
                                                <div class="w-full flex justify-content-between items-center rounded-md">
                                                    <div class="flex flex-col border-[1px] border-gray-200 p-2 shadow-lg shadow-gray-200 rounded-md">
                                                        <img src="{{ $property->images?->first()->path }}"
                                                             alt="property image"
                                                             class="w-full  object-cover rounded-md">
                                                        <div>

                                                            <a href="{{ route('propertyDetails', $property) }}">
                                                                <h2 class="text-lg font-semibold mt-4">{{ $property->title }}</h2>
                                                            </a>
                                                            <p class="text-gray-400"><span class="font-semibold text-black">Location:</span>   {{ $property->location }}</p>
                                                            <p class="text-gray-400"><span class="font-semibold text-black">Price:</span> {{ $property->price }}</p>
                                                            <p class="text-gray-400"><span class="font-semibold text-black">Category:</span> {{ $property->category->name }}</p>
                                                            <div class="flex gap-4">
                                                                <a href="{{ route('propertyDetails', $property) }}" class="px-4 py-2 rounded-md text-white font-semibold text-white mt-4 bg-blue-600">View Property</a>

                                                                <form action="{{ route('notification.notify',['applicant','applicant',$property->id]) }}" method="POST">
                                                                    @csrf
                                                                    <input type="text" name="property_id" style="display: none" value="{{$property->id}}">
                                                                    <input type="text" name="application_id" style="display: none" value="{{$applicant->id}}">

                                                                    <button type="submit" class="px-4 py-2 rounded-md text-white font-semibold text-white mt-4 bg-green-600">
                                                                        Send Offer
                                                                    </button>

                                                                </form>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 3"
                                         x-cloak>
                                        <livewire:applicant-viewing :applicant="$applicant"/>
                                    </div>

                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 4"
                                         x-cloak>
                                      <livewire:applicant-attachments :applicant="$applicant"/>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
