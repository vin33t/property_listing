<?php

namespace Database\Factories;

use App\Models\HomeSlider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class HomeSliderFactory extends Factory
{
    protected $model = HomeSlider::class;

    public function definition(): array
    {
        return [
            'heading' => ucfirst($this->faker->city()),//
            'description' => $this->faker->text(),
            'image' => $this->faker->word(),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
