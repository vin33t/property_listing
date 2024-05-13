<?php

namespace Database\Factories;

use App\Models\Applicant;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TenantFactory extends Factory
{
    protected $model = Tenant::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'registered_on' => $this->faker->word(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'alt_phone' => $this->faker->phoneNumber(),
            'others' => $this->faker->words(),

            'applicant_id' => Applicant::factory(),
        ];
    }
}
