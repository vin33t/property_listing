@extends('backend.layout.root')
@section('content')
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="flex w-full justify-between p-4">
                                <span class="card-title pb-0">Applicants</span>
                                <a href="{{route('applicants.form')}}"
                                   class="mdc-button mdc-button--outlined outlined-button--success rounded-md">
                                    Add New
                                </a>
                            </div>
                            <div class="w-full overflow-x-auto overflow-y-hidden px-16">
                                <livewire:applicant-table/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
