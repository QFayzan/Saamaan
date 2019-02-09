{{--This shows previous orders delivered/completed by that driver id--}}
@extends('layouts.user')

@section('content')
    
    <h1 class="text-center">Orders Delivered by {{auth()->user()->driver->name}}</h1>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($orders as $order)
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">For Order ID {{ $order->id }}.</div>
                            <div class="card-body">
                                @foreach($order->details as $detail)
                                    <h4>Details {{ $detail->name }}</h4>
                                    <div><b>Weight :</b> {{ $detail->weight }}</div>
                                    <div><b>Quantity :</b> {{ $detail->quantity }}</div>
                                    <div><b>Dimension :</b> {{ $detail->dimension }}</div>
                                    <div><b>Delivered on :</b> {{ $detail->updated_at->diffForHumans() }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection