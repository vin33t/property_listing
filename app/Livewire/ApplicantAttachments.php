<?php

namespace App\Livewire;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicantAttachments extends Component
{
    use LivewireAlert, WithFileUploads;

    public $applicant;
    public $attachments = [];

    protected $rules = [
        'attachments.*' => 'file',
    ];

    public function render()
    {
        return view('livewire.applicant-attachments');
    }

    public function uploadAttachment()
    {
        foreach ($this->attachments as $attachment) {
            $this->applicant->attachments()->create([
                'path' => Storage::putFile('applicant_attachments', new File($attachment['path'])),
                'model_type' => 'App\Models\Applicant',
                'model_id' => $this->applicant->id,
            ]);
        }
        $this->attachments = [];
        $this->emit('attachmentUploaded');
        $this->alert('success', 'Attachment uploaded successfully!');
    }

}
