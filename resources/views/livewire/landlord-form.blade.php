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
                        <textarea wire:model="address" name="address" class="mdc-text-field__input" rows="10"></textarea>
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
                        <select wire:model="commission_agreed" name="commission_agreed" id="is_featured" class="mdc-text-field__input">
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
                        <input type="file" multiple wire:model="attachments" name="attachments" class="mdc-text-field__input" id="image-input">
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
