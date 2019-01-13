<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =[
        'Placed_by','Picked_by','Current_Status'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
