<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    //
    protected $fillable = [
      'name','Quantity','Weight','dimension'
    ];
}
