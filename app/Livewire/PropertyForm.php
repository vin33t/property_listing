<?php

namespace App\Livewire;

use App\Models\Landlord;
use Livewire\Component;
use App\Models\User;
use App\Models\Category;
use App\Models\Property;
use Livewire\WithFileUploads;

class PropertyForm extends Component
{
    use WithFileUploads;

    public $property = null;
    public $title;
    public $landlord_id;
    public $available_from;
    public $user_id;
    public $category_id;
    public $price;
    public $location;
    public $area;
    public $rooms;
    public $bathrooms;
    public $year;
    public $type = 'sale';
    public $is_featured = 0;
    public $media = [];
    public $description;
    public $is_price_visible = false;
    public $is_location_visible = false;
    public $is_area_visible = false;
    public $is_rooms_visible = false;
    public $is_bathrooms_visible = false;
    public $is_year_visible = false;
    public $is_type_visible = false;
    // epc
    public $epc;

    // latitude and longitude
    public $latitude;
    public $longitude;
    // floor plan
    public $floor_plan;



    public function mount($property = null)
    {
        $this->property = $property;

        if ($property) {
            $this->landlord_id = $property->landlord_id;
            $this->available_from = $property->available_from;
            $this->title = $property->title;
            $this->user_id = $property->user_id;
            $this->category_id = $property->category_id;
            $this->price = $property->price;
            $this->location = $property->location;
            $this->area = $property->area;
            $this->rooms = $property->rooms;
            $this->bathrooms = $property->bathrooms;
            $this->year = $property->year;
            $this->type = $property->type;
            $this->is_featured = $property->is_featured;
            $this->description = $property->description;
            $this->is_price_visible = (bool) $property->is_price_visible;
            $this->is_location_visible = (bool) $property->is_location_visible;
            $this->is_area_visible = (bool) $property->is_area_visible;
            $this->is_rooms_visible = (bool) $property->is_rooms_visible;
            $this->is_bathrooms_visible = (bool) $property->is_bathrooms_visible;
            $this->is_year_visible = (bool) $property->is_year_visible;
            $this->is_type_visible = (bool) $property->is_type_visible;

            // latitude and longitude
            $this->latitude = $property->latitude;
            $this->longitude = $property->longitude;


        }
    }

    public function render()
    {
        $users = User::all();
        $categories = Category::all();
        $landlords = Landlord::all();

        return view('livewire.property-form', compact('users', 'categories'))->with('landlords', $landlords);
    }

    public function submit()
    {

        $validatedData = $this->validate([
            'landlord_id' => 'required|exists:landlords,id',
            'available_from' => 'required',
            'title' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required',
            'location' => 'required|string',
            'area' => 'required|numeric',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
//            'floor_plan' => 'file', // Adjust max file size as needed
            'year' => 'required|string',
            'type' => 'required|string',
            'is_featured' => 'required|in:0,1',
            'description' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'is_price_visible' => 'boolean',
            'is_location_visible' => 'boolean',
            'is_area_visible' => 'boolean',
            'is_rooms_visible' => 'boolean',
            'is_bathrooms_visible' => 'boolean',
            'is_year_visible' => 'boolean',
            'is_type_visible' => 'boolean',
//            'epc'=>'file'
        ]);

        if($this->epc){
            $epc = $this->epc->store('public/');
        }
        if($this->floor_plan){
            $floor_plan = $this->floor_plan->store('public/');
        }
        $data = $validatedData;
        if ($this->property) {
            $this->property->update($data + ['floor_plan' => str_replace('public/', '', $floor_plan), 'epc' => str_replace('public/', '', $epc)]);
            foreach ($this->media as $file) {
                $this->property->addMedia($file['path'])
                    ->toMediaCollection('images');
            }
        } else {
            $property = Property::create($data + ['floor_plan' => str_replace('public/', '', $floor_plan), 'epc' => str_replace('public/', '', $epc)]);
            foreach ($this->media as $file) {
                $property->addMedia($file['path'])
                    ->toMediaCollection('images');
            }
        }

        session()->flash('success', 'Property created successfully.');

        return redirect()->to('property/');
    }
}
