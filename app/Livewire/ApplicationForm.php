<?php

namespace App\Livewire;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicationForm extends Component
{
    use WithFileUploads;

    public $name;
    public $budget;
    public $looking_for;
    public $area;
    public $attachments;
    public $notes;
    public $application;

    protected $rules=[
        'name' => 'required',
        'budget' => 'required|integer',
        'looking_for' => 'required',
        'area' => 'required',
        'attachments' => 'file|nullable|max:1024',
        'notes' => 'nullable',
    ];

    public function render()
    {
        if ($this->application) {
            $this->name = $this->application->name;
            $this->budget = $this->application->budget;
            $this->looking_for = $this->application->looking_for;
            $this->area = $this->application->area;
            $this->notes = $this->application->notes;
        }
        return view('livewire.application-form')->with('application', $this->application);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        if ($this->application) {
            $this->application->update($validatedData);
        } else {
            if ($this->attachments){
                $validatedData['attachments'] = $this->attachments->store('attachments');
            }
            $this->application = Application::create($validatedData);
        }
        session()->flash('message', 'Application created successfully.');

        return redirect()->route('applicants.index');
    }
}
