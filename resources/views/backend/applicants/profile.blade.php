@extends('backend.layout.root')
@section('content')
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
{{--                            <div class="flex w-full justify-between p-4">--}}
{{--                                <span--}}
{{--                                    class="card-title pb-0">{{ $applicant->name }} - {{ $applicant->email }} - {{ $applicant->phone }}</span>--}}
{{--                                <a href="{{route('applicants.form')}}"--}}
{{--                                   class="mdc-button mdc-button--outlined outlined-button--success rounded-md">--}}
{{--                                    Add--}}
{{--                                </a>--}}
{{--                            </div>--}}

                            <div class="w-full p-4 bg-red-500 text-white font-bold text-lg flex justify-content-between align-items-center">
                                      <span class="card-title pb-0">{{ $applicant->name }} - {{ $applicant->email }} - {{ $applicant->phone }}</span>
                            </div>


                            <div class="tab-wrapper mt-4" x-data="{ activeTab: 3, tabContentsLoaded: [false, false, false, false, false, false] }">

                                <div class="grid grid-cols-6 bg-black text-white rounded-md">
                                    <div class="w-full py-3 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000"
                                         @click="activeTab = 0; tabContentsLoaded[0] = true"
                                         :class="{ 'bg-red-500': activeTab === 0 }"><span>Summary</span></div>
                                    <div class="w-full py-3 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000"
                                         @click="activeTab = 1; tabContentsLoaded[1] = true"
                                         :class="{ 'bg-red-500': activeTab === 1 }"><span>Communication</span></div>
                                    <div class="w-full py-3 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000"
                                         @click="activeTab = 2; tabContentsLoaded[2] = true"
                                         :class="{ 'bg-red-500': activeTab === 2 }"><span>Matching Properties</span></div>
                                    <div class="w-full py-3 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000"
                                         @click="activeTab = 3; tabContentsLoaded[3] = true"
                                         :class="{ 'bg-red-500': activeTab === 3 }"><span>Viewings</span></div>
                                    <div class="w-full py-3 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000"
                                         @click="activeTab = 4; tabContentsLoaded[4] = true"
                                         :class="{ 'bg-red-500': activeTab === 4 }"><span>Offers</span></div>
                                    <div class="w-full py-3 flex justify-content-center rounded-md hover:bg-red-400 font-semibold transition ease-in duration-2000"
                                         @click="activeTab = 5; tabContentsLoaded[5] = true"
                                         :class="{ 'bg-red-500': activeTab === 5 }"><span>Attachments</span></div>
                                </div>

                                <div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 0" x-cloak>
                                        <p>This is the example content of the first tab.</p>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 1" x-cloak>
                                        <p>The second tab’s example content.</p>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 2" x-cloak>
                                        <p>The content of the third tab.</p>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 3" x-cloak>
                                        <livewire:applicant-viewing :applicant="$applicant"/>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 4" x-cloak>
                                        <p>The content of the fifth tab.</p>
                                    </div>
                                    <div class="tab-panel" x-show.transition.in.opacity.duration.600="activeTab === 5" x-cloak>
                                        <p>The content of the sixth tab.</p>
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
