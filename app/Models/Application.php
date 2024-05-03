<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Application extends Model
{
    protected $fillable = [
        'name',
        'email',
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


}
