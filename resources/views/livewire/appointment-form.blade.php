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
    <form wire:submit.prevent="submit" method="post" enctype="multipart/form-data">
        @csrf
        <div class="template-demo">
            <div class="mdc-layout-grid__inner">


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <h6 class="card-title">Client Details</h6>
                </div>


                @if(!$appointment)
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop flex flex-col">

                        <div class="mdc-text-field mdc-text-field--outlined align-items-center gap-12">
                            <div>
                                <label for="client_selection" class="">Old Client</label>
                                <input type="radio" name="client_selection" wire:click="newClient" checked value="0"
                                       class="mdc-radio-field__input">
                            </div>
                            <div>
                                <label for="client_selection" class="">New Client</label>
                                <input type="radio" name="client_selection" wire:click="newClient" value="1"
                                       class="mdc-radio-field__input">
                            </div>
                        </div>
                    </div>
                @endif

                @if($new_client == 0)
                    <div class=" mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                         style="display: flex; flex-direction: column;">
                        <label for="text-field-hero-input" class="">Clients
                        </label>

                        <div class="mdc-text-field mdc-text-field--outlined">
                            <select wire:model="client_id" name="is_featured" id="is_featured"
                                    class="mdc-text-field__input">
                                <option value="">-- Select --</option>
                                @foreach($clients as $client)
                                    <option value="{{$client->client_name}}" {{ $appointment ?'selected' : '' }}>{{$client->client_name}}
                                        - {{ $client->client_email }}</option>
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
                @else
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                         style="display: flex; flex-direction: column">
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
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                         style="display: flex; flex-direction: column">
                        <label for="text-field-hero-input" class="">Email</label>

                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input wire:model="client_email" name="email" type="email" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>
                @endif


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <h6 class="card-title"> Meeting Details</h6>

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
                    <label for="text-field-hero-input" class="">Property
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="property_id" name="is_featured" id="is_featured"
                                class="mdc-text-field__input">
                            <option value="">-- Select
                                --
                            </option>
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

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class=""> With Whom
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


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class=""> Appointment Date and Time
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="appointment_date_time" name="withWhom" type="datetime-local"
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
                    <label for="text-field-hero-input" class=""> Remarks
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="remark" name="withWhom" type="text" placeholder="Remarks"
                               class="mdc-text-field__input">
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
                        <button type="submit"
                                class="mdc-button mdc-button--outlined outlined-button--success">{{ $appointment ? 'Update' : 'Create' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
