@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @foreach(auth()->user()->orders as $order)
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Details of oder with ID {{ $order->id }}.</div>

                            <div class="card-body">

                                @foreach($order->details as $detail)
                                    <h4>Detail with name {{ $detail->Name }}</h4>
                                    <div>

                                        <ul>
                                            <li><b>Weight :</b> {{ $detail->Weight }}</li>
                                        </ul>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection