<?php

namespace App\Http\Controllers;
use App\Order;
use App\Order_Detail;
use Illuminate\Http\Request;

class Order_DetailsController extends Controller {
    
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
        $order_details = Order_Detail::all();
        
        return view("order_details", compact($order_details));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Order $order)
    {
        return view('order_details.create', compact('order'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
        $data = $this->validate($request, [
            "name"      => "required|string",
            "quantity"  => "required|numeric",
            "category" => "required|string",
        ]);
        $order->details()->create($data);
        flash("Details added successfully");
        
        return back();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order_Detail $order_Detail)
    {
        //
        return view('order_details.show', compact('order_Detail'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_Detail $order_Detail)
    {
        //
        return view('order_details.edit', compact('order_Detail'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_Detail $detail)
    {
        $data = $this->validate($request, [
            "name"      => "required|string",
            "quantity"  => "required|string",
            "weight"    => "required|numeric",
            "dimension" => "required|string",
        ]);
        $detail->update($data);
        flash('details updated');
        
        return back();
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_Detail $order_Detail)
    {
        //
        $order_Detail->delete();
        
        return redirect('/order_detail');
    }
}
