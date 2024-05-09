<div>
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
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="template-demo">
            <div class="mdc-layout-grid__inner">


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Landlord</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="landlord_id" name="landlord_id" id="landlord_id"
                                class="mdc-text-field__input mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select Landlord --</option>
                            @foreach($landlords as $landlord)
                                <option value="{{$landlord->id}}">{{$landlord->name}}</option>
                            @endforeach

                        </select>
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Title</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input name="title" type="text" class="mdc-text-field__input" wire:model="title">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Available From </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input name="available_from" type="text" class="mdc-text-field__input"
                               wire:model="available_from">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Agent</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="user_id" name="user_id" id="user_id"
                                class="mdc-text-field__input mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select Agent --</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Select Category</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="category_id" name="category_id" id="category_id"
                                class="mdc-text-field__input mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Price</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="price" name="price" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Location</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="location" name="location" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Latitude</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="latitude" id="latitude" name="year" type="text"
                               class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">

                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Longitude</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="longitude" id="longitude" name="year" type="text"
                               class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Area</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="area" name="area" type="number" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Rooms</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="rooms" name="rooms" type="number" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Bathrooms</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="bathrooms" name="bathrooms" type="number" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Year</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="year" id="year" name="year" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Type</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="type" name="type" id="type" class="mdc-text-field__input">
                            <option value="">-- Select Type --</option>
                            <option value="sale">Sale</option>
                            <option value="rent">Rent</option>
                            <option value="leasehold">Leasehold</option>
                            <option value="A1">A1</option>
                            <option value="A3">A3</option>
                            <option value="A5">A5</option>
                            <option value="D1">D1</option>
                            <option value="B1">B1</option>
                            <option value="Studio">Studio</option>
                            <option value="Flat">Flat</option>
                            <option value="Maissonete">Maissonete</option>
                        </select>
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Is Featured</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="is_featured" name="is_featured" id="is_featured"
                                class="mdc-text-field__input">
                            <option value="">-- Select Featured --</option>
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


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Description</label>
                    <div class="mdc-text-field mdc-text-field--outlined">
                        <textarea wire:model="description" name="description" class="mdc-text-field__input"
                                  rows="10"></textarea>

                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                {{--            Visibility checkboxes--}}


                {{--            Visibility Checkboxes --}}


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Floor Plan</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input type="file" wire:model="floor_plan" name="floor_plan" class="mdc-text-field__input"
                               id="text-field-hero-input" required>
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">EPC</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input type="file" wire:model="epc" name="floor_plan" class="mdc-text-field__input"
                               id="text-field-hero-input" required>
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">

                    <label for="text-field-hero-input" class="">Images</label>

                    <livewire:dropzone
                        wire:model="media"
                        :rules="['image','mimes:png,jpeg','max:10420']"
                        :multiple="true"/>

                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    Fields Visibility

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_category_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Category</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_price_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-2"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-2">Price</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_location_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-3"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-3">Location</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_area_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-4"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-4">Area</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_rooms_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-5"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-5">Rooms</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_bathrooms_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-6"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-6">Bathrooms</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_year_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-7"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-7">Year</label>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop">
                        <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                                <input wire:model="is_type_visible" name="is_negotiable" type="checkbox"
                                       class="mdc-checkbox__native-control" id="checkbox-8"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-8">Type</label>
                        </div>
                    </div>

                </div>


                <br>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                        <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">
                            Submit
                        </button>

                    </div>
                </div>
            </div>
        </div>


    </form>

    <div id="map"></div>
    <div id="coordinates"></div>

</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script>
    var marker;

    // Initialize and add the map
    function initMap() {
        // Create the map
        var map = L.map('map').setView([51.505, -0.09], 13); // Initial center coordinates and zoom level

        // Add a tile layer (base map) to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker at the initial center of the map
        marker = L.marker([51.505, -0.09], {draggable: true}).addTo(map);

        // Display coordinates of the marker
        marker.on('dragend', function (e) {
            document.getElementById('coordinates').innerHTML = 'Latitude: ' + e.target.getLatLng().lat.toFixed(6) + '<br>Longitude: ' + e.target.getLatLng().lng.toFixed(6);
            document.getElementById('latitude').value = latlng.lat.toFixed(6);
            document.getElementById('longitude').value = latlng.lng.toFixed(6);
        });

        // Add a search box
        var searchControl = L.Control.geocoder({
            defaultMarkGeocode: false
        }).on('markgeocode', function (e) {
            var latlng = e.geocode.center;
            map.setView(latlng, 13); // Set the map view to the searched location with zoom level 13
            marker.setLatLng(latlng); // Move the marker to the searched location
            document.getElementById('coordinates').innerHTML = 'Latitude: ' + latlng.lat.toFixed(6) + '<br>Longitude: ' + latlng.lng.toFixed(6);

            // update value of latitude and longitude
            document.getElementById('latitude').value = latlng.lat.toFixed(6);
            document.getElementById('longitude').value = latlng.lng.toFixed(6);

        }).addTo(map);
    }


    // Call the initMap function when the document is ready
    document.addEventListener("DOMContentLoaded", function (event) {
        initMap();
    });
</script>


{{--    AIzaSyA1MwEdKCKMwP-jLQGNBDnmcJyNte9-gnA--}}
