<div class="grid grid-cols-3 gap-4 p-2">
    <div class="w-full">
        <div class="p-2 bg-red-500 text-white font-semibold ">
            <span>Upload Attachments</span>
        </div>
        <div>
            <form wire:submit.prevent="uploadAttachment" class="w-full p-2 bg-white shadow-sm shadow-gray-400"
                  enctype="multipart/form-data">
                <div class="w-full p-2 bg-gray-100 flex flex-col gap-2">

                    <livewire:dropzone
                        wire:model="attachments"
                        :rules="['image','mimes:png,jpeg','max:10420']"
                        :multiple="true"/>
                </div>

                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Upload</button>
            </form>
        </div>
    </div>

    <div class="w-full col-span-2">
        <div class="p-2 bg-red-500 text-white font-semibold flex justify-content-between ">
            <span>Total</span>
            <span>{{ $applicant->getMedia('attachments')->count() }} Attachments</span>
        </div>


     <div class="w-full p-2 border-[1px] border-gray-200 shadow-lg shadow-gray-400 grid grid-cols-4 gap-2">
         @forelse($applicant->getMedia('attachments') as $attachment)
             <div class="w-full p-2 shadow-lg shadow-gray-400 rounded-md relative">
                 <img src="{{ $attachment->getFullUrl() }}" alt="attachment" class="w-full h-52 object-cover rounded-md">
                 <button wire:click="deleteAttachment({{ $attachment->id }})"
                         class="py-1 px-2 rounded-md bg-red-500 text-white mt-2">
                      <i class="fa fa-trash"></i>
                 </button>
             </div>
         @empty
             <div class="w-full col-span-4 p-2 shadow-lg shadow-gray-400 rounded-md relative">
                 No Attachments
             </div>
         @endforelse
     </div>

    </div>
</div>
