<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    //
    protected $fillable = [
        'Placed_by', 'Picked_by', 'Current_Status','location'
    ];
    
    public function placedBy()
    {
        return $this->belongsTo(User::class,'Placed_by');
    }
    
    public function pickedBy()
    {
        return $this->belongsTo(Driver::class,'Picked_by');
    }
    
    public function details()
    {
        return $this->hasMany(Order_Detail::class);
    }
    
    public function getStatusAttribute()
    {
        return $this->Current_Status;
    }
    
    public function scopePickable($query)
    {
        return $query->where('Current_Status','waiting');
    }
    public function scopeCity($query,$DriverLocation)
    {
        return $query->where('location',$DriverLocation);
    }
    
    
}
