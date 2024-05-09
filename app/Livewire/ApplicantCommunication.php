<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ApplicantCommunication extends Component
{
    use LivewireAlert;
    public $applicant;
    public $note = [
        'note' => '',
        'type' => 'email',
        'on' => '',
    ];
    public $notes;
    protected $listeners = ['noteAdded' => '$refresh'];
    protected $rules = [
        'note.note' => 'required',
        'note.type' => 'required',
        'note.on' => 'required|date|before_or_equal:today',
    ];

    protected $messages = [
        'note.note.required' => 'The note field is required.',
        'note.type.required' => 'The type field is required.',
        'note.on.required' => 'The date field is required.',
        'note.on.date' => 'The date field must be a valid date.',
        'note.on.before_or_equal' => 'Arre but ye din to aaya hi nhi abhi tk',
    ];
    public function mount()
    {
        $this->notes = $this->applicant->notes;
    }
    public function render()
    {
        return view('livewire.applicant-communication');
    }

    public function submitNote()
    {
        $this->validate();
        $this->applicant->communicationNote()->create($this->note);
        $this->note = [
            'note' => '',
            'type' => 'email',
            'on' => '',
            'user_id' => '',
        ];
        $this->alert('success', 'Note added successfully!');
        $this->dispatch('noteAdded');
    }
}
