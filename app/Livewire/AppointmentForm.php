<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\Property;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AppointmentForm extends Component
{
    use WithFileUploads;

    public $property_id;
    public $client_name;
    public $location;
    public $with_whom;
    public $remark;
    public $appointment_date;
    public $appointment_time;
    public $appointment;

    protected $rules = [
        'property_id' => 'required|exists:properties,id',
        'client_name' => 'required',
        'location' => 'nullable',
        'with_whom' => 'required',
        'remark' => 'nullable',
        'appointment_date' => 'required|date',
        'appointment_time' => 'nullable',
    ];

    public function render()
    {
        $properties = Property::all();
        if ($this->appointment) {
            $this->property_id = $this->appointment->property_id;
            $this->client_name = $this->appointment->client_name;
            $this->location = $this->appointment->location;
            $this->with_whom = $this->appointment->with_whom;
            $this->remark = $this->appointment->remark;
            $this->appointment_date = Carbon::parse($this->appointment->appointment_date)->format('Y-m-d');
            $this->appointment_time = Carbon::parse($this->appointment->appointment_time)->format('H:i');
        }
        return view('livewire.appointment-form')->with('properties', $properties)->with('appointment', $this->appointment);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        if ($this->appointment) {
            $this->appointment->update($validatedData);
        } else {
            Appointment::create($validatedData);
        }
        session()->flash('message', 'Appointment created successfully.');

        return redirect()->route('appointment.index');
    }
}
