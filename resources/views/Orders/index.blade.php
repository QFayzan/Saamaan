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
                                    <h3>Order Placed By {{ $order->placedBy->name }}</h3>
                                </div>
                                
                                <div class="card-body">
                                    
                                    <h3>
                                        Status : {{ $order->status }}
                                        <small class="badge badge-light">Items {{ $order->details->count() }}</small>
                                    </h3>
                                    
                                    @foreach($order->details as $detail)
                                        <h5>Item No # {{ $loop->iteration }}</h5>
                                        <ul>
                                            <li><b>Name : </b>{{ $detail->Name }}</li>
                                            <li><b>Weight :</b> {{ $detail->Weight }}</li>
                                            <li><b>Quantity :</b> {{ $detail->Quantity }}</li>
                                            <li><b>Dimension :</b> {{ $detail->Dimension }}</li>
                                        </ul>
                                    @endforeach
                                    
                                    @if(auth()->user()->Type == "Driver")
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