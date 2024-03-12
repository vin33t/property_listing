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
                            <h6 class="card-title">Slider</h6>
                            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="template-demo">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input name="name" class="mdc-text-field__input" id="text-field-hero-input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <textarea name="description" class="mdc-text-field__input" rows="10"></textarea>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="description-input" class="mdc-floating-label">Description</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <h6 class="card-title">Slides</h6>

                                    <div id="slideContainer">
                                        <div class="slide">
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input name="title[]" class="mdc-text-field__input" id="text-field-hero-input">
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="text-field-hero-input" class="mdc-floating-label">Slide Title</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input type="file" name="media[]" class="mdc-text-field__input" id="image-input">
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="image-input" class="mdc-floating-label">Image</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <textarea name="slide_description[]" class="mdc-text-field__input" rows="10"></textarea>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="description-input" class="mdc-floating-label">Description</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <a href="javascript:void(0)" class="mdc-button mdc-button--outlined outlined-button--success" onclick="addSlide()">Add Slide</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var count = 0;
        function addSlide(){
            count++;
            var slideContainer = document.getElementById('slideContainer');

            var newElement = document.createElement('div');
            newElement.id = count;

            newElement.classList.add('slide');
            newElement.innerHTML = `<div class="slide">
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input name="title[]" class="mdc-text-field__input" id="text-field-hero-input">
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="text-field-hero-input" class="mdc-floating-label">Slide Title</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input type="file" name="media[]" class="mdc-text-field__input" id="image-input">
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="image-input" class="mdc-floating-label">Image</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <textarea name="slide_description[]" class="mdc-text-field__input" rows="10"></textarea>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="description-input" class="mdc-floating-label">Description</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <a href="javascript:void(0)" class="mdc-button mdc-button--outlined outlined-button--danger" onclick="removeSlide('${count}')">Remove Slide</a>
                                                </div>
                                        </div>`;

            slideContainer.appendChild(newElement);
        }

        function removeSlide(count){

            var slide = document.getElementById(count);
            if (slide) { // Check if the element exists
                slide.remove(); // Remove the slide element
            } else {
                console.error("Slide with ID " + count + " does not exist."); // Log an error if the element doesn't exist
            }

        }

    </script>

@endsection
