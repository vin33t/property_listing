<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Landlord;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition(): array
    {
        $city = $this->faker->city();
        return [
            'available_from' => $this->faker->word(),
            'title' => $city,
            'description' => $this->faker->text(),
            'price' => $this->faker->word(),
            'location' => $city,
            'area' => $this->faker->randomNumber(),
            'rooms' => $this->faker->randomNumber('1'),
            'bathrooms' => $this->faker->randomNumber('1'),
            'type' => $this->faker->randomElement(['sale','rent','leasehold','A1','A3','A5','D1','B1','Studio','Flat','Maissonete']),
            'is_featured' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'year' => $this->faker->year(),
            'is_price_visible' => $this->faker->boolean(),
            'is_location_visible' => $this->faker->boolean(),
            'is_area_visible' => $this->faker->boolean(),
            'is_rooms_visible' => $this->faker->boolean(),
            'is_bathrooms_visible' => $this->faker->boolean(),
            'is_year_visible' => $this->faker->boolean(),
            'is_type_visible' => $this->faker->boolean(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'floor_plan' => $this->faker->image('public', 400, 300, null, false),
            'epc' => $this->faker->image('public', 400, 300, null, false),
            'landlord_id' => Landlord::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
            'category_id' => Category::inRandomOrder()->first(),
        ];
    }
}
