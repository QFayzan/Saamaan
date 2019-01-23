<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    
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
                "CNIC_Number" => ['required', 'string', 'regex:/^\d{5}-\d{7}-\d{1}$/i'],
                "Picture"=> 'required|mimes:png,jpg,jpeg|max:2048'
            ]);
            
            $data['Phone_Number'] = $user->Phone_Number;
            $data['Name'] = $user->name;
            //picture implementation here
            $data['Picture'] = now()->format('YmdU') . "." . $request->Picture->getClientOriginalExtension();
            $request->Picture->storeAs('public', $data['Picture']);
    
    
            $user->driver()->create($data);
            $user->Type = "Driver";
            $user->save();
            
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
            "CNIC_Number"  => "required|number",
            'Phone_Number' => "required|number"
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
        $driver->user->Type = 'Client';
        $driver->delete();
        return redirect('/admin');
    }
//    New methods to map according to design
    
    public function pickOrder(Order $order)
    {
        $driver = auth()->user()->driver;
        $order->Picked_by = $driver->id;
        $order->Current_Status = "inProcess";
        $order->save();
        
        $driver->order_picked = true;
        $driver->save();
        
        return redirect()->route('dashboard');
    }
    
    public function completedOrder(Order $order)
    {
        $driver = auth()->user()->driver;
        
        $order->Current_Status = "completed";
        $order->save();
        
        $driver->order_picked = false;
        $driver->save();
        
        return redirect()->route('dashboard');
    }
    
    
}
