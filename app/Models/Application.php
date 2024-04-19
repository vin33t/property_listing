<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name',
        'budget',
        'looking_for',
        'area',
        'attachments',
        'notes',
    ];

    protected $casts = [
        'attachments' => 'array',
    ];
}
