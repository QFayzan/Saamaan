<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
        $orders = Order::where ('current_status', 'inProcess')->latest()->get();
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
        $driver->user->type = "client";
        $driver->user->save();
        unlink('storage/' . $driver->image);
        $driver->delete();
        flash ("Driver rejected",'danger');
        return back();
    }
    
    public function updateUser(Request $request, User $user)
    {
        $data = $this->validate($request, [
            "name"         => "required|string",
            "address"      => "required|string",
            "city"         => "required|string",
            'phone_number' => ['required', 'string', 'regex:/^(03|\+923)[0-9]{2}?-[0-9]{7}$/i'],
        ]);
        $user->update($data);
        flash('details updated');
        return redirect( route('admin.view.users'));
    }
    
    public function editUser(User $user)
    {
      
        return view('admin.edit')->with(compact('user'));
    }
    
    
}
