@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All In-Progress Transactions </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th> Order ID</th>
                    <th> Placed By (Client ID)</th>
                    <th> Picked By (Driver ID)</th>
                    <th> Created On</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->placed_by }}</td>
                        <td>{{ $order->picked_by }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection