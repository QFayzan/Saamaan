<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
//    protected $table = 'order_details';
    protected $fillable = [
      'name','Quantity','Weight','Dimension'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
