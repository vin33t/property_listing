<?php

namespace App\Livewire;

use App\Models\Applicant;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicationForm extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $budget;
    public $area;
    public $attachments;
    public $notes;
    public $application;
    public $type = [];
    public $bedrooms = [];
    public $category = [];


    public $types = [
        'sale',
        'rent',
        'leasehold',
        'A1',
        'A3',
        'A5',
        'D1',
        'B1',
        'Studio',
        'Flat',
        'Maissonete',

    ];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'budget' => 'required|integer',
        'type' => 'required|array',
        'bedrooms' => 'required|array',
        'area' => 'required',
        'attachments.*' => 'file|max:1024',
        'notes' => 'nullable',
    ];

    public function render()
    {
        if ($this->application) {
            $this->name = $this->application->name;
            $this->email = $this->application->email;
            $this->phone = $this->application->phone;
            $this->budget = $this->application->budget;
            $this->bedrooms = $this->application->looking_for['bedrooms'];
            $this->type = $this->application->looking_for['property_type'];
            $this->category = $this->application->looking_for['category'];
            $this->area = $this->application->area;
            $this->notes = $this->application->notes;
        }
        return view('livewire.application-form')->with('application', $this->application)->with('categories', Category::all());
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $looking_for = [
            'property_type' => $this->type,
            'bedrooms' => $this->bedrooms,
            'category' => $this->category
        ];
        if ($this->application) {
            $this->application->update($validatedData + ['looking_for' => $looking_for]);
        } else {
            if ($this->attachments) {
                $validatedData['attachments'] = $this->attachments->store('attachments');
            }
            $this->application = Applicant::create($validatedData + ['looking_for' => $looking_for]);
        }
        session()->flash('message', 'Applicant created successfully.');

        return redirect()->route('applicants.index');
    }
}
