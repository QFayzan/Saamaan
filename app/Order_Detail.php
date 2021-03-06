<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
//    protected $table = 'order_details';
    protected $fillable = [
      'name','quantity','weight','dimension'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
