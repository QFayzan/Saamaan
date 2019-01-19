@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                {{--                {{ dd($orders) }}--}}
                @foreach($orders as $order)
                    
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3>Order Placed By {{ $order->placedBy->name }}</h3>
                            </div>
                            
                            <div class="card-body">
                                
                                <h3>Status : {{ $order->status }}</h3>
                                @foreach($order->details as $detail)
                                    <h4>Details </h4>
                                    <ul>
                                        <li><b>Name : </b>{{ $detail->Name }}</li>
                                        <li><b>Weight :</b> {{ $detail->Weight }}</li>
                                        <li><b>Quantity :</b> {{ $detail->Quantity }}</li>
                                        <li><b>Dimension :</b> {{ $detail->Dimension }}</li>
                                    </ul>
                                @endforeach
                            
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection