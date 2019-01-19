<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable =[
        'Name','CNIC_Number','Phone_Number',
        ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
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
