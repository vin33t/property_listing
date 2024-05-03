<?php

namespace App\Livewire;

use App\Models\Account;
use App\Models\Property;
use Livewire\Component;

class AccountForm extends Component
{
    public $property_id;
    public $type;
    public $price;
    public $commission;
    public $transaction_date;
    public $client_name;
    public $account;

    protected $rules = [
        'property_id' => 'required|exists:properties,id',
        'type' => 'required|in:rent,buy',
        'price' => 'required|numeric',
        'commission' => 'required|numeric',
        'transaction_date' => 'required|date',
        'client_name' => 'required',
    ];

    public function render()
    {
        $properties = Property::all();
        if($this->account){
            $this->property_id = $this->account->property_id;
            $this->type = $this->account->type;
            $this->price = $this->account->price;
            $this->commission = $this->account->commission;
            $this->transaction_date = $this->account->transaction_date;
            $this->client_name = $this->account->client_name;
        }
        return view('livewire.account-form', compact('properties'));
    }

    public function submit()
    {
        $validatedData = $this->validate($this->rules);

        $property = Property::find($validatedData['property_id']);
        if ($this->account) {
            $account = Account::find($this->account->id);
            $account->update($validatedData);
            return redirect()->route('accounts.index');
        }
        $property->accounts()->create($validatedData);

        $this->reset();
        return redirect()->route('accounts.index');
    }
}
