<div class="w-full p-4">
    <div class="w-full grid grid-cols-2 gap-2 ">
        <div class="w-full">
            <div class="p-2 bg-red-500 text-white font-semibold ">
                <span>All Conversations</span>
            </div>
            <div class="border-[1px] border-gray-200 rounded-md w-full p-1">
                @foreach($applicant->communicationNote->sortBy('on')->reverse() as $note)
                    <div class="mb-2">
                        <div class="flex justify-content-between bg-gray-100 font-semibold text-sm py-1 px-3">
                            <div>
                               <i class="fa fa-clock text-red-500 mr-2"></i> {{ $note->on }} - <span class="text-red-500 text-xs">{{ ucfirst($note->type) }}</span>
                            </div>
                            <div class="text-green-500 font-normal">
                                {{ $note->on->diffForHumans() }}
                            </div>
                        </div>
                        <div class="w-full py-2 px-3 border-[1px] border-gray-100 border-t-[0px] text-sm italic">
                            {{ $note->note }}
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <div class="w-full">
            <div class="p-2 bg-red-500 text-white font-semibold ">
                <span>New Conversation</span>
            </div>
            <form wire:submit.prevent="submitNote">
                @csrf
                <div class="border-[1px] border-gray-200 shadow-lg shadow-gray-400 rounded-md w-full p-4">
                    <label for="" class="font-semibold text-sm text-black">Communication Using</label>
                    <input type="datetime-local" wire:model="note.on" class="border-[1px] border-gray-300 text-blue-600 w-full p-2 mb-3">
                    @if($errors->has('note.on'))
                        <span class="text-red-500">{{ $errors->first('note.on') }}</span>
                    @endif
                    <label for="" class="font-semibold text-sm text-black">Communication On</label>

                    <x-select :options="['email','sms','call']" wire:model="note.type"
                              class="border-[1px] border-gray-300 text-blue-600 w-full p-2 mb-3"></x-select>

                    @if($errors->has('note.type'))
                        <span class="text-red-500">{{ $errors->first('note.type') }}</span>
                    @endif

                    <label for=""  class="font-semibold text-sm text-black">Message</label>

                    <textarea wire:model="note.note" rows="5" placeholder="Type Your Message Here...."
                              class="border-[1px] border-gray-300 text-blue-600 w-full p-2 mb-3 "></textarea>
                    @if($errors->has('note.note'))
                        <span class="text-red-500">{{ $errors->first('note.note') }}</span>
                    @endif
                    <div class="w-full flex justify-content-end">
                        <button type="submit"
                                class="px-4 py-2 rounded-md text-white font-semibold text-white mt-4 bg-blue-600">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
