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
    public $type;
    public $meeting;


    public function render()
    {


        $properties = Property::all();
        $clients = ($this->appointment ? Appointment::where('id', $this->appointment->id)->get() : Appointment::all());
        if ($this->appointment) {
            $this->client_name = $this->appointment->client_name;
            $this->client_email = $this->appointment->client_email;
        }
        if($this->meeting){
            $this->property_id = $this->meeting->property_id;
            $this->location = $this->meeting->location;
            $this->with_whom = $this->meeting->with_whom;
            $this->remark = $this->meeting->remark;
            $this->appointment_date_time = Carbon::parse($this->meeting->date)->format('Y-m-d\TH:i');
        }

        return view('livewire.appointment-form')->with('properties', $properties)->with('appointment', $this->appointment)->with('clients', $clients);
    }

    public function newClient()
    {
        $this->new_client = !$this->new_client;
    }

    public function submit()
    {
        if ($this->type == 'newMeeting' || $this->type == 'editMeeting'){
            $rules = [
                'property_id' => 'required|exists:properties,id',
                'location' => 'nullable',
                'with_whom' => 'required',
                'remark' => 'nullable',
                'appointment_date_time' => 'required|date_format:Y-m-d\TH:i',
            ];
        } else {
            $rules = [
                'property_id' => 'required|exists:properties,id',
                'client_name' => 'required_if:new_client,1',
                'client_email' => 'required_if:new_client,1|email|unique:appointments,client_email',
                'location' => 'nullable',
                'with_whom' => 'required',
                'remark' => 'nullable',
                'appointment_date_time' => 'required|date_format:Y-m-d\TH:i',
            ];
        }


        $validatedData = $this->validate($rules);

        if ($this->type == 'newMeeting') {
            $this->appointment->meeting()->create([
                'property_id' => $validatedData['property_id'],
                'location' => $validatedData['location'],
                'with_whom' => $validatedData['with_whom'],
                'remark' => $validatedData['remark'],
                'date' => $validatedData['appointment_date_time'],
            ]);
            session()->flash('message', 'Meeting created successfully.');
            return redirect()->route('appointment.index');
        } elseif ($this->type == 'editMeeting') {
            $this->meeting->update([
                'property_id' => $validatedData['property_id'],
                'location' => $validatedData['location'],
                'with_whom' => $validatedData['with_whom'],
                'remark' => $validatedData['remark'],
                'date' => $validatedData['appointment_date_time'],
            ]);
            session()->flash('message', 'Meeting updated successfully.');
            return redirect()->route('appointment.index');
        }

        if ($this->appointment) {
            $appointment = $this->appointment->update([
                'client_name' => $validatedData['client_name'],
                'client_email' => $validatedData['client_email'],
            ]);
        } else {
            $appointment = Appointment::create([
                'client_name' => $validatedData['client_name'],
                'client_email' => $validatedData['client_email'],
            ]);
            $appointment->meeting()->create([
                'property_id' => $validatedData['property_id'],
                'location' => $validatedData['location'],
                'with_whom' => $validatedData['with_whom'],
                'remark' => $validatedData['remark'],
                'date' => $validatedData['appointment_date_time'],
            ]);
        }

        session()->flash('message', 'Appointment created successfully.');

        return redirect()->route('appointment.index');
    }
}
