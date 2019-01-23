<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (auth()->user()->Type)
        {
            case "Client":
                $orders = auth()->user()->orders;
                break;
            case "Driver":
                {
                    if (auth()->user()->driver->order_picked)
                    {
                        $order[0] = auth()->user()->driver->order;
                        $orders = collect( $order );
                        break;
                    }
                    $orders = Order::pickable()->get();
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
    public
    function store(Request $request)
    {
        $data = $this->validate($request,[
            "Name" => "required|string",
            "Quantity" => "required|numeric",
            "Weight" =>"required|numeric",
            "Dimension" =>"required|numeric",
        ]);
        $order = auth()->user()->orders()->create([
            'Current_Status' => "waiting",
        ]);
        $order->details()->create($data);
        return back();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show(Order $order)
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
    public
    function edit(Order $order)
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
    public
    function update(Request $request, Order $order)
    {
        //
        $data = $this->validate($request, [
            "Placed_by" => "required|string",
            "Picked_by" => "required|string",
            //"Current_Status"=> too advanced for now
        ]);
        $order->update($data);
        
        return redirect('/orders');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Order $order)
    {
        //
        $order->delete();
        
        return view('/Orders');
    }
}
