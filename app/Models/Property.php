<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function media(){
        return $this->hasMany(Media::class, 'model_id');
    }

    public function landlord(){
        return $this->belongsTo(Landlord::class, 'landlord_id');
    }

    public function accounts(){
        return $this->hasMany(Account::class, 'property_id');
    }
}
