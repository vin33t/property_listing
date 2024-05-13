<?php

namespace App\Livewire;

use App\Models\Account;
use App\Models\Applicant;
use App\Models\Property;
use Livewire\Component;

class AccountForm extends Component
{
    public $property_id;
    public $type;
    public $price;
    public $commission;
    public $transaction_date;
    public $applicant_id;
    public $account;

    protected $rules = [
        'property_id' => 'required|exists:properties,id',
        'type' => 'required|in:rent,buy',
        'price' => 'required|numeric',
        'commission' => 'required|numeric',
        'transaction_date' => 'required|date',
        'applicant_id' => 'required',
    ];

    public function render()
    {
        $properties = Property::all();
        $applicants = Applicant::all();
        if($this->account){
            $this->property_id = $this->account->property_id;
            $this->type = $this->account->type;
            $this->price = $this->account->price;
            $this->commission = $this->account->commission;
            $this->transaction_date = $this->account->transaction_date->format('Y-m-d');
            $this->applicant_id = $this->account->tenant->applicant->id;
        }
        return view('livewire.account-form', compact('properties'))->with('applicants', $applicants);
    }

    public function submit()
    {
        $applicant = Applicant::find($this->applicant_id);
        $validatedData = $this->validate($this->rules);
        $property = Property::find($validatedData['property_id']);
        if ($this->account) {
            $account = Account::find($this->account->id);
            $account->update($validatedData);
            $this->reset();
            return redirect()->route('accounts.index');
        }
        $tenant = $property->tenants()->create([
            'applicant_id' => $validatedData['applicant_id'],
            'registered_on' => now(),
            'name' => $applicant->name,
            'email' => $applicant->email,
            'phone' => $applicant->phone,
            'alt_phone' => $applicant->alt_phone,
        ]);
        $property->accounts()->create($validatedData + ['tenant_id' => $tenant->id]);

        $this->reset();
        return redirect()->route('accounts.index');
    }
}
