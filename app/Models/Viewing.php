<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viewing extends Model
{
    protected $fillable = [
        'applicant_id',
        'property_id',
        'organiser',
        'date',
        'meet_at',
        'confirm_with',
        'reminder_alert',
        'completed'
    ];

    protected $casts = [
        'confirm_with' => 'array',
        'reminder_alert' => 'array',
        'date' => 'datetime'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
