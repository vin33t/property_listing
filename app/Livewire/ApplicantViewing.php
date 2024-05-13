<?php

namespace App\Livewire;

use App\Models\Property;
use App\Models\Viewing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ApplicantViewing extends Component
{
    use LivewireAlert;
    public $applicant;
    public $properties;
    public $viewings;
    public $viewing = null;
    public $editMode = false;
    public $viewingForm = [
        'organiser' => '',
        'property_id' => '',
        'date' => '',
        'meet_at' => '',
        'confirm_with' => [
            'landlord' => false,
            'applicant'=> false,
        ],
        'reminder_alert' => [
            'via_email' => false,
            'via_sms' => false,
            'reminder_before' => '',
            'reminder_receiver' => [
                'landlord' => false,
                'applicant' => false,
            ],
        ]
    ];

    // listen for edit event
    protected $listeners = ['editViewing'];

    public function editViewing($viewingId)
    {
        $this->edit($viewingId);
    }

    protected $rules = [
        'viewingForm.organiser' => 'required|in:landlord,agent',
        'viewingForm.property_id' => 'required|exists:properties,id',
        'viewingForm.date' => 'required|after:today',
        'viewingForm.meet_at' => 'required|string',
        'viewingForm.confirm_with.landlord' => 'boolean',
        'viewingForm.confirm_with.applicant' => 'boolean',
        'viewingForm.reminder_alert.via_email' => 'boolean',
        'viewingForm.reminder_alert.reminder_before' => 'required|in:5,10,15,20',
        'viewingForm.reminder_alert.reminder_receiver.landlord' => 'boolean',
        'viewingForm.reminder_alert.reminder_receiver.applicant' => 'boolean',
    ];

    protected $messages = [
        'viewingForm.organiser.required' => 'Please select the organiser.',
        'viewingForm.property_id.required' => 'Please select a property.',
        'viewingForm.property_id.exists' => 'The selected property does not exist.',
        'viewingForm.date.required' => 'Please select a viewing date.',
        'viewingForm.date.after' => 'The viewing date must be after today.',
        'viewingForm.meet_at.required' => 'Please specify where to meet.',
        'viewingForm.reminder_alert.reminder_before.required' => 'Please select when to send the reminder.',
    ];

    public function mount($applicant)
    {
        $this->applicant = $applicant;
        $this->properties = Property::all();
        $this->viewings = $applicant->viewings;
    }

    public function render()
    {
        return view('livewire.applicant-viewing');
    }

    public function submit()
    {
        $this->validate();
        if ($this->editMode) {
            $this->viewing->update($this->viewingForm);
            $this->alert('success', 'Viewing Updated', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->reset('viewingForm');
            $this->editMode = false;
            $this->dispatch('viewingUpdated');
            return;
        }
        Viewing::create([
            'applicant_id' => $this->applicant->id,
            'property_id' => $this->viewingForm['property_id'],
            'organiser' => $this->viewingForm['organiser'],
            'date' => $this->viewingForm['date'],
            'meet_at' => $this->viewingForm['meet_at'],
            'confirm_with' => $this->viewingForm['confirm_with'],
            'reminder_alert' => $this->viewingForm['reminder_alert'],
            'status' => 'unconfirmed',
        ]);
        $this->dispatch('viewingUpdated');

        $this->reset('viewingForm');
        $this->alert('success', 'Viewing Created', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->dispatch('viewingUpdated');
    }

    public function edit($viewingId)
    {
        $this->editMode = true;
        $this->viewing = Viewing::findOrFail($viewingId);
        $this->viewingForm = $this->viewing->toArray();
        $viewingDate = date('Y-m-d\TH:i', strtotime($this->viewing->date));
        $this->viewingForm['date'] = $viewingDate;
    }

    public function clearForm()
    {
        $this->reset('viewingForm');
        $this->editMode = false;

    }

}
