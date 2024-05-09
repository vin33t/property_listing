<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notes extends Model
{
    protected $fillable = [
        'note',
        'type',
        'on',
    ];

    protected $casts = [
        'on' => 'datetime',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($note) {
            $note->user_id = auth()->id();
        });
    }
    protected function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
