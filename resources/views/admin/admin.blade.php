@extends('layouts.admin')
@section('nav-title','Admin Dashboard')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-4">
                        <h1 class="text-center"> Drivers to be Verified </h1>
                        @foreach($drivers as $driver )
                            <div class="card">
                                <div class="card-header">
                                    <h4>Promote to Driver</h4>
                                </div>
                                <div class="card-body">
                                    <h5>User ID for the account:<small>{{ $driver->user_id }}</small></h5>
                                    <h5>Name :  <small>{{ $driver->Name }}</small></h5>
                                    <h5>CNIC :  <small>{{ $driver->cnic }}</small></h5>
                                    <h5>Phone :  <small>{{ $driver->phone }}</small></h5>
                                    <h5>Image :  <img src="storage/{{ $driver->Picture  }}" height="100" width="100"></h5>
                                    <div class="button-container">
                                        <form action="{{route('admin.promote',$driver->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Promote</button>
                                        </form>
    
                                        <form action="{{ route('admin.refuse',$driver->id) }}" method="post">
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Refuse</button>
                                        </form>
                                    </div>
                                    
                                </div>
                        @endforeach
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">View All Drivers</div>
                    {{--<a href="{{route('orders.display')}}"></a>--}}
                    {{--<div class="card-body">--}}
                        {{--<a href="{{route('orders.index')}}"--}}
                           {{--class="btn btn-primary">--}}
                            {{--View Your Order--}}
                        {{--</a>to be implemented--}}
                    </div>
                </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Check ongoing transactions</div>
                    {{--<a href="{{route('orders.display')}}"></a>--}}
                    {{--<div class="card-body">--}}
                        {{--<a href="{{route('orders.index')}}"--}}
                           {{--class="btn btn-primary">--}}
                            {{--View Your Order--}}
                        {{--</a>to be implemented--}}
                    </div>
                </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">View all clients</div>
                    {{--<a href="{{route('orders.display')}}"></a>--}}
                    {{--<div class="card-body">--}}
                        {{--<a href="{{route('orders.index')}}"--}}
                           {{--class="btn btn-primary">--}}
                            {{--View Your Order--}}
                        {{--</a>to be implemented--}}
                    </div>
                </div>
            
            </div>
        </div>
        </div>
    </main>
@endsection