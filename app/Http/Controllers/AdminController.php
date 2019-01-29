<?php

namespace App\Http\Controllers;

use App\Driver;

class AdminController extends Controller {
    
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        unlink('storage/' . $driver->Picture);
        $driver->delete();
        flash ("Driver rejected",'danger');
        return back();
    }
    
    public function editUser()
    {
        //Soft delete if and when do here
    }
    
    
}
