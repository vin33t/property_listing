<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'mobile',
        'commission_agreed',
        'notes',
        'attachments',
    ];

    protected $casts = [
        'attachments' => 'array',
    ];
}
