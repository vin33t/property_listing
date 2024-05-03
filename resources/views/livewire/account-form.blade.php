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
    <form wire:submit.prevent="submit" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="template-demo">
            <div class="mdc-layout-grid__inner">


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Property</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="property_id" name="property_id" id="property_id" class="mdc-text-field__input mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select Property --</option>
                            @foreach($properties as $property)
                                <option value="{{$property->id}}">{{$property->title}}</option>
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

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Type(Rent/Buy)</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="type" class="mdc-text-field__input mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Select  --</option>
                             <option value="rent">Rent</option>
                            <option value="buy">Buy</option>

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
                    <label for="text-field-hero-input" class="">Price/ Rent</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="price" name="price" type="number" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Client Name</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="client_name" name="price" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>



                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Commission</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="commission" name="comission" type="number" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Sold/Rented On</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="transaction_date" name="transaction_date" type="date" class="mdc-text-field__input">
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
