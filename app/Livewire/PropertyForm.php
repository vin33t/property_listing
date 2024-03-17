<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Category;
use App\Models\Property;
use Livewire\WithFileUploads;

class PropertyForm extends Component
{
    use WithFileUploads;

    public $property;
    public $title;
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

    // latitude and longitude
    public $latitude;
    public $longitude;
    // floor plan
    public $floor_plan;



    public function mount(Property $property = null)
    {
        $this->property = $property;

        if ($property) {
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

        return view('livewire.property-form', compact('users', 'categories'));
    }

    public function submit()
    {

        $validatedData = $this->validate([
            'title' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'area' => 'required|numeric',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'floor_plan' => 'required|image|max:2048', // Adjust max file size as needed
            'year' => 'required|string',
            'type' => 'required|string',
            'is_featured' => 'required|boolean',
            'media.*' => 'image|max:2048', // Adjust max file size as needed
            'description' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'is_price_visible' => 'required|boolean',
            'is_location_visible' => 'required|boolean',
            'is_area_visible' => 'required|boolean',
            'is_rooms_visible' => 'required|boolean',
            'is_bathrooms_visible' => 'required|boolean',
            'is_year_visible' => 'required|boolean',
            'is_type_visible' => 'required|boolean',
        ]);

        if ($this->property) {
            $this->property->update($validatedData);
        } else {

            $floor_plan = $this->floor_plan->store('public/');
            $property = Property::create($validatedData + ['floor_plan' => str_replace('public/', '', $floor_plan)]);

            foreach ($this->media as $image) {
                $path = $image->store('public/');
                $property->media()->create([
                    'path' => str_replace('public/', '', $path),
                    'model_type' => 'App\Models\Property',

                ]);
            }
        }
        session()->flash('success', 'Property created successfully.');

        return redirect()->to('property/');
    }
}
