<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Property extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
        'title',
        'landlord_id',
        'available_from',
        'user_id',
        'category_id',
        'price',
        'location',
        'area',
        'rooms',
        'bathrooms',
        'year',
        'type',
        'is_featured',
        'description',
        'is_price_visible',
        'is_location_visible',
        'is_area_visible',
        'is_rooms_visible',
        'is_bathrooms_visible',
        'is_year_visible',
        'is_type_visible',
        'epc',
        'latitude',
        'longitude',
        'floor_plan',
        'slug'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function landlord(){
        return $this->belongsTo(Landlord::class, 'landlord_id');
    }

    public function accounts(){
        return $this->hasMany(Account::class, 'property_id');
    }

}
