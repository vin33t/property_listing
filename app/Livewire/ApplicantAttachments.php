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

    protected $listeners = ['attachmentUploaded' => '$refresh','deleteAttachment'=>'$refresh'];

    public function render()
    {
        return view('livewire.applicant-attachments');
    }

    public function uploadAttachment()
    {
        foreach ($this->attachments as $attachment) {
            $this->applicant->addMedia($attachment['path'])
                ->toMediaCollection('attachments');
        }
        $this->attachments = [];
        $this->dispatch('attachmentUploaded');
        $this->alert('success', 'Attachment uploaded successfully!');
    }

    public function deleteAttachment($attachmentId)
    {
        $this->applicant->media()->find($attachmentId)->delete();
        $this->dispatch('deleteAttachment');
        $this->alert('success', 'Attachment deleted successfully!');
    }

}
