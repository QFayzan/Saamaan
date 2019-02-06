<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
      'Registration_Number','Model Name','Capacity','Is_Available',
    ];
    
    
}
