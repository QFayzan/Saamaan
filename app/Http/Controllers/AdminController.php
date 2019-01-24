<?php

namespace App\Http\Controllers;

use App\Driver;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    
    public function promote(Driver $driver)
    {
        $driver->verified = true;
        $driver->save();
        return back();
    }
    
    public function refuse(User $user)
    {
        dd($driver);
      
    }
    
    public function editUser()
    {
    
    }
    
    public function editDetail()
    {
    
    }
    
    public function edit()
    {
    
    }
    
}
