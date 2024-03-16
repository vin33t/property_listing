<div>
    @if($status)
        <div class="alert alert-success">
           Updated
        </div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data">



        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 10px">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="text" wire:model="heading" class="mdc-text-field__input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="heading" class="mdc-floating-label">Heading</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-top: 10px">
            <div class="mdc-text-field mdc-text-field--outlined">
                <textarea wire:model="about" id="editor" name="content" class="mdc-text-field__input" rows="10"></textarea>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="about" class="mdc-floating-label">About</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="file" wire:model="leftSideImage" class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="leftSideImage" class="mdc-floating-label">Left Side Image</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>


        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="file" wire:model="bottomImage" class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="bottomImage" class="mdc-floating-label">Bottom Image</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="text" wire:model="videoUrl" class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="videoUrl" class="mdc-floating-label">Bottom Video Link</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <!-- Save button -->
        <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">Save</button>
    </form>


</div>
