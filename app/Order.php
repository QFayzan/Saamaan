<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    //
    protected $fillable = [
        'placed_by', 'picked_by', 'current_status','location'
    ];
    
    public function placedBy()
    {
        return $this->belongsTo(User::class,'placed_by');
    }
    
    public function pickedBy()
    {
        return $this->belongsTo(Driver::class,'picked_by');
    }
    
    public function details()
    {
        return $this->hasMany(Order_Detail::class);
    }
    
    public function getStatusAttribute()
    {
        return $this->current_status;
    }
    
    public function scopePickable($query)
    {
        return $query->where('current_status','waiting');
    }
    public function scopeCity($query,$DriverLocation)
    {
        return $query->where('location',$DriverLocation);
    }
    public function scopeCompleted($query)
    {
        return $query->where('current_status','completed');
    }
    
}
