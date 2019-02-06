<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
      'registration_number','model_name','capacity','is_available',
    ];
    
    
}
