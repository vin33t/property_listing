@extends('backend.layout.root')
@section('content')

    <div class="page-wrapper mdc-toolbar-fixed-adjust">

        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">About Us</h6>
                        <livewire:about-us />
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


