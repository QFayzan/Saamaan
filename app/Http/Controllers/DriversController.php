<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $drivers = Driver::all();
        
        return view("drivers", compact('drivers'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('drivers.create');
        //return response()->json([$drivers]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $credentials = [
            'email'    => $user->email,
            'password' => request('password')
        ];
        
        if (Auth::attempt($credentials))
        {
            $data = $this->validate($request, [
                "cnic_number" => ['required', 'string', 'regex:/^\d{5}-\d{7}-\d{1}$/i'],
                "image"=> 'required|mimes:png,jpg,jpeg|max:2048'
            ]);
            $data['name'] = $user->name;
            //picture implementation here
            $data['image'] = now()->format('YmdU') . "." . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public', $data['image']);
            
            $user->driver()->create($data);
            $user->type = "driver";
            $user->save();
            flash('Request Sent');
            return redirect()->route('dashboard');
        }
        
        return back()->withErrors([
            'password' => 'Invalid Password'
        ]);
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show(Driver $driver)
    {
        //
        return view('drivers.show', compact('driver'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit(driver $driver)
    {
        //
        return view('drivers.edit', compact('driver'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Driver $driver)
    {
        //
        $data = $this->validate($request, [
            "name"         => "required|string",
            "cnic_number"  => "required|number",
            'phone_number' => "required|number"
        ]);
        $driver->update($data);
        
        return redirect('/driver');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->user->type = 'client';
        $driver->delete();
        return redirect('/admin');
    }
//    New methods to map according to design
    
    public function pickOrder(Order $order)
    {
        $driver = auth()->user()->driver;
        $order->picked_by = $driver->id;
        $order->current_status = "inProcess";
        $order->save();
        
        $driver->order_picked = true;
        $driver->save();
        
        return redirect()->route('dashboard');
    }
    
    public function completedOrder(Order $order)
    {
        $driver = auth()->user()->driver;
        
        $order->current_status = "completed";
        $order->save();
        
        $driver->order_picked = false;
        $driver->save();
        
        return redirect()->route('dashboard');
    }
    
    
}
