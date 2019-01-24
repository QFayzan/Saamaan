<?php

namespace App\Http\Controllers;

use App\Driver;

class AdminController extends Controller
{
    
    public function promote(Driver $driver)
    {
        $driver->verified = true;
        $driver->save();
        flash("Driver promoted");
        
        return back();
    }
    
    public function refuse(Driver $driver)
    {
        $driver->user->Type = "Client";
        $driver->user->save();
//        unlink('storage/' . $driver->Picture);
        $driver->delete();
        flash("Driver rejected");
        
        return back();
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
