<div>
    <form wire:submit.prevent="submit" method="post" enctype="multipart/form-data" >
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
                    <label for="text-field-hero-input" class="">Budget</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="budget" name="budget" type="text" class="mdc-text-field__input">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Looking For
                    </label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <select wire:model="looking_for" name="is_featured" id="is_featured" class="mdc-text-field__input">
                            <option value="">-- Select
                                --</option>
                            <option value="House">House</option>
                            <option value="Commercial">Commercial</option>
                            <option value="HMO">HMO</option>
                            <option value="Off Licence">Off Licence</option>
                            <option value="Pound Plus">Pound Plus</option>
                            <option value="Empty">Empty</option>
                            <option value="Studio">Studio</option>
                            <option value="1 Bedroom">1 Bedroom</option>
                            <option value="2 Bedroom">2 Bedroom</option>
                            <option value="3 Bedroom">3 Bedroom</option>
                            <option value="4 Bedroom">4 Bedroom</option>
                            <option value="5 Bedroom">5 Bedroom</option>
                            <option value="6 Bedroom">6 Bedroom</option>
                            <option value="Flat">Flat</option>
                            <option value="Maissonete">Maissonete</option>
                            <option value="Warehouse">Warehouse</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="A1">A1</option>
                            <option value="A3">A3</option>
                            <option value="A5">A5</option>
                            <option value="Land">Land</option>
                            <option value="D1">D1</option>
                            <option value="B1">B1</option>
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
                    <label for="text-field-hero-input" class="">Area</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="area" name="area" type="text" class="mdc-text-field__input">
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
                        <input type="file" wire:model="attachments" multiple name="attachments[]" class="mdc-text-field__input" id="image-input">
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
                        <textarea wire:model="notes" name="communication" class="mdc-text-field__input" rows="10"></textarea>
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
