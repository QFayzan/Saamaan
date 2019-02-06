<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;
    //
    protected $fillable =[
        'name','cnic_number','phone_number','image'
        ];
    protected $dates = ['deleted at: '];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function order()
    {
        return $this->hasOne(Order::class,'picked_by');
    }
    
    public function getCnicAttribute()
    {
        return $this->cnic_number;
    }
    
    public function getPhoneAttribute()
    {
        return $this->phone_number;
    }
    
    public function scopeUnVerified($query)
    {
        return $query->where('verified',false);
    }
    
}
