<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'property_id',
        'client_name',
        'client_email',
        'remark',
    ];


    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
}
