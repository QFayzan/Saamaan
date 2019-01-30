<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;
    //
    protected $fillable =[
        'Name','CNIC_Number','Phone_Number','Picture'
        ];
    protected $dates = ['deleted at: '];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function order()
    {
        return $this->hasOne(Order::class,'Picked_by');
    }
    
    public function getCnicAttribute()
    {
        return $this->CNIC_Number;
    }
    
    public function getPhoneAttribute()
    {
        return $this->Phone_Number;
    }
    
    public function scopeUnVerified($query)
    {
        return $query->where('verified',false);
    }
    
}
