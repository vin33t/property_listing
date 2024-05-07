<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'client_name',
        'client_email',
    ];


    public function meeting()
    {
        return $this->hasMany(Meeting::class, 'appointment_id');
    }

    public function upcomingMeetings(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->meeting()->whereNull('feedback')->get();
    }

    public function pastMeetings(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->meeting()->whereNotNull('feedback')->get();
    }
}
