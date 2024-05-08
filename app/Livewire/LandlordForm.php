<?php

namespace App\Livewire;

use App\Models\Landlord;
use Livewire\Component;
use Livewire\WithFileUploads;

class LandlordForm extends Component
{
    use WithFileUploads;

    public $landlord;
    public $name;
    public $email;
    public $address;
    public $mobile;
    public $commission_agreed;
    public $notes;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'mobile' => 'required',
        'commission_agreed' => 'required',
        'notes' => 'required',
    ];

    public function render()
    {
        if ($this->landlord) {
            $this->name = $this->landlord->name;
            $this->email = $this->landlord->email;
            $this->address = $this->landlord->address;
            $this->mobile = $this->landlord->mobile;
            $this->commission_agreed = $this->landlord->commission_agreed;
            $this->notes = $this->landlord->notes;
        }
        return view('livewire.landlord-form');
    }

    public function submit()
    {
        $validatedData = $this->validate();

        if ($this->landlord) {
            $this->landlord->update($validatedData);
        } else {
            Landlord::create($validatedData);
        }

        session()->flash('message', 'Landlord created successfully.');

        return redirect()->route('landlords.index');
    }
}
