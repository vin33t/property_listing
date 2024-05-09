<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PropertyFormTest extends TestCase
{
//    use RefreshDatabase;

    /** @test */
    public function it_can_create_property()
    {
        $user = User::factory()->create();

        Livewire::test('property-form')
            ->set('title', 'Test Property')
            ->set('user_id', $user->id)
            ->set('location', 'Test Location')
            ->set('price', 100000)
            ->set('area', 100)
            ->set('rooms', 2)
            ->set('bathrooms', 2)
            ->set('year', '2022')
            ->set('type', 'sale')
            ->set('description', 'Test Description')
            ->set('latitude', '123.456')
            ->set('longitude', '456.789')
            ->call('submit');

        $this->assertDatabaseHas('properties', [
            'title' => 'Test Property',
            'location' => 'Test Location',
            'price' => 100000,
            'area' => 100,
            'rooms' => 2,
            'bathrooms' => 2,
            'year' => '2022',
            'type' => 'sale',
            'description' => 'Test Description',
            'latitude' => '123.456',
            'longitude' => '456.789',
        ]);
    }
}
