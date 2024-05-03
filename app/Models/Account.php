<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    protected $fillable = [
        'property_id',
        'type',
        'price',
        'commission',
        'client_name',
        'transaction_date',
    ];
    protected $casts = [
        'transaction_date' => 'date',
    ];

    protected function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
