<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Order;
use App\User;

class AdminController extends Controller {
    
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function users()
    {
        $users = User::oldest()->get();
        return view('admin.users')->with(compact('users'));
    }
    
    public function current_orders()
    {
        $orders = Order::where ('Current_Status', 'inProcess')->latest()->get();
        return view('admin.current')->with(compact('orders'));
    }
    
    public function orders()
    {
        $orders = Order::oldest()->get();
        return view('admin.orders')->with(compact('orders'));
    
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
