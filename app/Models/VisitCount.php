<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitCount extends Model
{
    use HasFactory;
    protected $table = 'visit_counts';

    protected $fillable = [
        'page', 'count'
    ];
}
