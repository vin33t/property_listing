<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Landlord;
use App\Models\Property;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call(UserSeeder::class);

//        HomeSlider::factory()->count(5)->create()->each(function ($slider) {
//            $destinationPath = 'public/sliders';
//            $client = new Client();
//
//            $response = $client->get('https://source.unsplash.com/random');
//
//            $fileContent = $response->getBody()->getContents();
//
//            $tempFilePath = tempnam(sys_get_temp_dir(), 'uploaded_file');
//            file_put_contents($tempFilePath, $fileContent);
//
//            $fileName = Str::random(40) . '.jpg';
//
//            Storage::putFileAs($destinationPath, new File($tempFilePath), $fileName);
//
//            unlink($tempFilePath);
//            $originalProperties = $slider->getAttributes();
//            $originalProperties['image'] = Storage::url($destinationPath . '/' . $fileName);
//
//            $slider->fill($originalProperties);
//            $slider->save();
//        });
//
//
//        Category::factory()->count(6)->create()->each(function ($property) {
//            $imageUrl = 'https://source.unsplash.com/random';
//            $property->addMediaFromUrl($imageUrl)
//                ->toMediaCollection();
//        });
//
//        Landlord::factory()->count(25)->create();
//
//        Property::factory()->count(35)->create()->each(function ($property) {
//            $mediaCount = rand(5, 15);
//            for ($i = 0; $i < $mediaCount; $i++) {
//                $imageUrl = 'https://source.unsplash.com/random';
//                $property->addMediaFromUrl($imageUrl)
//                    ->toMediaCollection('images');
//            }
//        });


    }
}
