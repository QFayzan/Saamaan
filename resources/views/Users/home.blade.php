@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="container-fluid">
            
            <h2 class="text-center">Options</h2>
            <hr>
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Create Order</div>
                        <div class="card-body">
                            <form action="{{ route('orders.store') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Order Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Check My Orders</div>
                        <a href="{{route('orders.display')}}"></a>
                        <div class="card-body">
                            <a href="{{route('orders.index')}}"
                               class="btn btn-primary">
                                View Your Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            {{--    Options For Driver Only  --}}
            @if(auth()->user()->Type == "Driver" )
                <h2 class="text-center">Driver Options</h2>
                <hr>
                <div class="row justify-content-around">
                    
                    @if(auth()->user()->driver->verified)
                        <div class="col-md-4">
                            
                            <div class="card">
                                <div class="card-header">Accept Order</div>
                                
                                <div class="card-body">
                                    <a class="btn btn-primary" href="{{route('orders.index')}}">
                                        Pick an Order
                                    </a>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">View Previous Orders</div>
                                
                                <div class="card-body">
                                    <a href="{{route('orders.display')}}" class="btn btn-primary">
                                        View Your Previous Order(s)
                                    </a>
                                
                                </div>
                            </div>
                        </div>
                    @else
                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Note :</div>
                                
                                <div class="card-body">
                                    Wait for Verification Process
                                </div>
                            </div>
                        </div>
                    
                    @endif
                
                </div>
            @endif
        
        </div>
    </div>
@endsection
