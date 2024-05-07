<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meeting extends Model
{
    use GeneratesUuid;

    protected $fillable = [
        'appointment_id',
        'property_id',
        'location',
        'with_whom',
        'date',
        'feedback',
        'remark',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    protected function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }


    protected function property()
    {
        return $this->belongsTo(Property::class);
    }
}
