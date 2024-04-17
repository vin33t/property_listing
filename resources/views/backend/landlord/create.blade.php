@extends('backend.layout.root')
@section('content')
    <!-- Form Container -->
    <div class=" bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <ul class="mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-12">
                        <div class="mdc-card">
                            <h6 class="card-title">Create Landlord</h6>
                            <form action="{{ route('landlords.store') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="template-demo">
                                    <div class="mdc-layout-grid__inner">


                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Name</label>

                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input wire:model="name" name="name" type="text" class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Email</label>

                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input wire:model="email" name="email" type="email" class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Mobile</label>

                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input wire:model="mobile" name="mobile" type="number" class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Address</label>
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <textarea name="address" class="mdc-text-field__input" rows="10"></textarea>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Commission agreed
                                            </label>

                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <select wire:model="is_featured" name="is_featured" id="is_featured" class="mdc-text-field__input">
                                                    <option value="">-- Commission agreed
                                                     --</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Attachments</label>
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input type="file" multiple name="Attachmenets []" class="mdc-text-field__input" id="image-input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                                            <label for="text-field-hero-input" class="">Communication (Notes)</label>
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <textarea name="communication" class="mdc-text-field__input" rows="10"></textarea>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">Submit</button>
                                            </div>
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
@endsection
