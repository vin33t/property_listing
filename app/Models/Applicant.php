<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Applicant extends Model implements HasMedia
{
    use GeneratesUuid, InteractsWithMedia;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'budget',
        'looking_for',
        'area',
        'attachments',
        'notes',
    ];

    protected $casts = [
        'attachments' => 'array',
        'looking_for' => 'array',
    ];

    public function recommendedProperties(): Collection
    {
        return Property::orWhereIn('type', $this->looking_for['property_type'])
            ->orWhereIn('category_id', $this->looking_for['category'])
            ->orWhere('area', $this->area)
            ->orWhere('price', '<=', $this->budget)
            ->get();
    }

    public function viewings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Viewing::class);
    }


    public function communicationNote()
    {
        return $this->hasMany(Notes::class, 'applicant_id');
    }


}
