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


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
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

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
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

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Phone</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="phone" name="phone" type="number" class="mdc-text-field__input">
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
                    <label for="text-field-hero-input" class="">Budget</label>

                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input wire:model="budget" name="budget" type="number" class="mdc-text-field__input">
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
                    <label for="text-field-hero-input" class="">Looking For
                    </label>
                    <div>
                        <div style="display: flex; flex-wrap: wrap; column-gap: 20px">
                            @foreach($categories as $category)
                                <div>
                                    <input type="checkbox" id="cat-{{ $category->id }}" wire:model="category"
                                           value="{{ $category->name }}">
                                    <label for="cat-{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div style="display: flex; flex-wrap: wrap; column-gap: 20px">
                            @for($option = 1; $option <= 5; $option++)
                                <div>
                                    <input type="checkbox" id="opt-{{ $option }}" wire:model="bedrooms"
                                           value="{{ $option }}">
                                    <label for="opt-{{ $option }}">{{ $option }} Bedroom</label>
                                </div>
                            @endfor
                        </div>


                        <div style="display: flex; flex-wrap: wrap; column-gap: 20px">
                            @foreach($types as $ty)
                                <div>
                                    <input type="checkbox" id="typ-{{ $ty }}" wire:model="type" value="{{ $ty }}">
                                    <label for="typ-{{ $ty }}">{{ $ty }}</label>
                                </div>
                            @endforeach
                        </div>

                    </div>


                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop"
                     style="display: flex; flex-direction: column">
                    <label for="text-field-hero-input" class="">Attachments</label>
                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input type="file" wire:model="attachments" multiple name="attachments[]"
                               class="mdc-text-field__input" id="image-input">
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
                    <label for="text-field-hero-input" class="">Communication (Notes)</label>
                    <div class="mdc-text-field mdc-text-field--outlined">
                        <textarea wire:model="notes" name="communication" class="mdc-text-field__input"
                                  rows="10"></textarea>
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
                        <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
