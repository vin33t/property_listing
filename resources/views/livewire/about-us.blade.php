<div>
    @if($status)
        <div class="alert alert-success">
           Updated
        </div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data">



        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 20px; display: flex; flex-direction: column">
            <label for="heading" class="">Heading</label>

            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="text" wire:model="heading" class="mdc-text-field__input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 20px; display: flex; flex-direction: column">
            <label for="about" class="">About</label>

            <div class="mdc-text-field mdc-text-field--outlined">
                <textarea wire:model="about" id="editor" name="content" class="mdc-text-field__input" rows="10"></textarea>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading">
                    </div>
                    <div class="mdc-notched-outline__notch">
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 20px; display: flex; flex-direction: column">
            <label for="leftSideImage" class="">Left Side Image</label>

            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="file" wire:model="leftSideImage" class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>


        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 20px; display: flex; flex-direction: column">
            <label for="bottomImage" class="">Bottom Image</label>

            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="file" wire:model="bottomImage" class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 20px; display: flex; flex-direction: column">
            <label for="videoUrl" class="">Bottom Video Link</label>

            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="text" wire:model="videoUrl" class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <!-- Save button -->
        <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success" style="margin-top: 10px">Save</button>
    </form>


</div>
