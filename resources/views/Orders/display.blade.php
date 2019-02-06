@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @foreach(auth()->user()->orders as $order)
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Details of order with ID {{ $order->id }}.</div>
                            <div class="card-body">
                                @foreach($order->details as $detail)
                                    <h4>Details {{ $detail->name }}</h4>
                                    <div><b>Weight :</b> {{ $detail->weight }}</div>
                                    <div><b>Quantity :</b> {{ $detail->quantity }}</div>
                                    <div><b>Dimension :</b> {{ $detail->dimension }}</div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection