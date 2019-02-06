@extends('layouts.user')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @if( $orders->count() )
                    @foreach($orders as $order)
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Order Placed By {{ $order->placedby->name }}</h3>
                                </div>
                                
                                <div class="card-body">
                                    
                                    <h3>
                                        Status : {{ $order->status }}
                                        <small class="badge badge-light">Items {{ $order->details->count() }}</small>
                                    </h3>
                                    
                                    @foreach($order->details as $detail)
                                        <h5>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#Edit-Modal{{ $detail->id }}">Item No #
                                                {{ $loop->iteration }}</button>
                                        </h5>
                                        <ul>
                                            <li><b>Name : </b>{{ $detail->name }}</li>
                                            <li><b>Weight :</b> {{ $detail->weight }}</li>
                                            <li><b>Quantity :</b> {{ $detail->quantity }}</li>
                                            <li><b>Dimension :</b> {{ $detail->dimension }}</li>
                                        </ul>
                                        @include("Orders.detailModel")
                                    @endforeach
                                    @if(auth()->user()->type == "Driver")
                                        @if( auth()->user()->driver->order_picked == false)
                                            <form action="{{ route('driver.pick.order', $order->id) }}" method="post">
                                                @csrf
                                                <hr>
                                                <button class="btn btn-success">Pick</button>
                                            </form>
                                        @else
                                            <form action="{{ route('driver.completed.order', $order->id) }}" method="post">
                                                @csrf
                                                <hr>
                                                <button class="btn btn-success">Completed</button>
                                            </form>
                                        
                                        @endif
                                    @endif
                                </div>
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#Modal{{ $order->id }}">Add More Items to the Order.
                                </button>
                               @include('Orders.editModel')
                            
                            </div>
                        </div>
                    @endforeach
                @else
                    Nothing to show yet
                @endif
            </div>
        </div>
    </main>
@endsection