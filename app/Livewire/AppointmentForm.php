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

    public $new_client = 0;
    public $property_id;
    public $client_name;
    public $client_email;
    public $location;
    public $with_whom;
    public $remark;
    public $appointment_date_time;
    public $appointment;

    protected $rules = [
        'property_id' => 'required|exists:properties,id',
        'client_name' => 'required',
        'client_email' => 'required',
        'location' => 'nullable',
        'with_whom' => 'required',
        'remark' => 'nullable',
        'appointment_date_time' => 'required|date_format:Y-m-d\TH:i',
    ];

    public function render()
    {
        $properties = Property::all();
        $clients = Appointment::all();
        if ($this->appointment) {
            $this->property_id = $this->appointment->property_id;
            $this->client_name = $this->appointment->client_name;
            $this->client_email = $this->appointment->client_email;
            $this->location = $this->appointment->location;
            $this->with_whom = $this->appointment->with_whom;
            $this->remark = $this->appointment->remark;
            $this->appointment_date_time = Carbon::parse($this->appointment->appointment_date_time)->format('Y-m-d');
        }
        return view('livewire.appointment-form')->with('properties', $properties)->with('appointment', $this->appointment)->with('clients', $clients);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        if ($this->appointment) {
            $appointment = $this->appointment->update($validatedData->only(['client_name', 'client_email']));
//            $appointment->meeting->update($validatedData->except(['client_name', 'client_email']));
        } else {
            $appointment = Appointment::create($validatedData->only(['client_name', 'client_email']));
            $appointment->meeting()->create($validatedData->except(['client_name', 'client_email']));
        }

        session()->flash('message', 'Appointment created successfully.');

        return redirect()->route('appointment.index');
    }
}
