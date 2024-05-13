<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'applicant_id',
        'registered_on',
        'name',
        'email',
        'phone',
        'alt_phone',
        'others',
    ];

    protected $casts = [
        'others' => 'array',
    ];

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

}
