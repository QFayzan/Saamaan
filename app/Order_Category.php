<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Category extends Model
{
    protected $fillable = [
        'name',
        'price_rate',
        'basic_fee',
    ];

    public static function getOrderCategory($id)
    {
        return self::where('id', $id)->first();
    }

    public static function findByName($name)
    {
        return self::where('name', $name)->first();
    }

    public static function addUpdateOrderCategory($request, $category = null)
    {
        $result = false;
        if ($category == null) {
            $category = new self;
        }
        if ($category) {
            $category->name = $request['name'];
            $category->price_rate = $request['price_rate'];
            $category->basic_fee = $request['basic_fee'];
            $result = $category->save();
        }

        return $result;
    }

    public function getPriceAttribute()
    {
        $price = $this->price_rate * 5 + $this->basic_fee;

        return $price;
    }
}
