<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    //
    protected $fillable = [
      'Registration_Number','Model Name','Capacity','Is_Available',
    ];
}
