<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
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
        switch (auth()->user()->type)
        {
            case "client":
                $orders = auth()->user()->orders;
                break;
            case "driver":
                {
                    if (auth()->user()->driver->order_picked)
                    {
                        $order = Order::find(auth()->user()->driver->order_picked);
                        
                            $orders = collect( compact('order') );
                        break;
                    }
                    $DriverLocation=auth()->user()->city;
                    
                    $orders = Order::pickable()->city($DriverLocation)->get();
                    break;
                }
            default:
                return back();
        }
        
        return view('Orders.index', compact('orders'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        //
        return view('Orders.create');
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            "name" => "required|string",
            "quantity" => "required|numeric",
            "weight" =>"required|numeric",
            "category" =>"required|string",
        ]);
        $order = auth()->user()->orders()->create([
            'current_status' => "waiting",
            'location'=>auth()->user()->city,
        ]);
        $order->details()->create($data);
        flash('Order has been created!!');
        return back();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        return view('orders.display', compact('order'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        return view('orders.edit', compact('order'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        $data = $this->validate($request, [
            "placed_by" => "required|string",
            "picked_by" => "required|string",
            //"Current_Status"=> too advanced for now
        ]);
        $order->update($data);
        flash('order updated');
        return redirect('/orders');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();
        flash('Order deleted');
        return view('/Orders');
    }
}
