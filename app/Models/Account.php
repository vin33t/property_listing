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
        'tenant_id',
        'transaction_date',
    ];
    protected $casts = [
        'transaction_date' => 'date',
    ];

    protected function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

}
