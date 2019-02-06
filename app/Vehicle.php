<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    
    protected $fillable = [
        'registration_number',
        'model_name',
        'capacity',
        'type',
        'is_available',
        'owner_id'
    ];
    
    public function driver() {
        return $this->belongsTo(Driver::class,'owner_id');
    }
    
}
