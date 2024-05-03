<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'property_id',
        'client_name',
        'client_email',
        'location',
        'with_whom',
        'remark',
        'appointment_date',
        'appointment_time',
    ];

    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'timestamp',
    ];

    protected function property()
    {
        return $this->belongsTo(Property::class);
    }
}
