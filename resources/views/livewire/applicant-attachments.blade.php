<div>
   <div>
       @foreach($applicant->attachments() as $attachment)
           <div class="w-full p-2 bg-white shadow-sm shadow-gray-400">
               <img src="{{ $attachment->path }}" alt="attachment" class="w-full h-64 object-cover">
           </div>
       @endforeach
   </div>
    <form wire:submit.prevent="uploadAttachment" class="w-full p-2 bg-white shadow-sm shadow-gray-400" enctype="multipart/form-data">
        <div class="w-full p-2 bg-gray-100 flex flex-col gap-2">

    <livewire:dropzone
        wire:model="attachments"
        :rules="['image','mimes:png,jpeg','max:10420']"
        :multiple="true"/>
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Upload</button>
    </form>
</div>
