<div>
    <form wire:submit.prevent="submit" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="template-demo">
            <div class="mdc-layout-grid__inner">


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Client Name</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="client_name" name="clientName" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
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


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Property
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="property_id" name="is_featured" id="is_featured" class="mdc-text-field__input">
                            <option value="">-- Select
                                --</option>
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
                    <label for="text-field-hero-input" class="">  With Whom
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="with_whom" name="withWhom" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">  Appointment Date
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="appointment_date" name="withWhom" type="date" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">  Appointment Time
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="appointment_time" name="withWhom" type="time" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>



                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">  Remarks
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="remark" name="withWhom" type="text" placeholder="Remarks" class="mdc-text-field__input">
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
                        <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">{{ $appointment ? 'Update' : 'Create' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
