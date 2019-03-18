<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $fillable = [
      'name','quantity','category'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function category()
    {
        $name = $this->category;
        return Order_Category::findByName($name);
    }

}
