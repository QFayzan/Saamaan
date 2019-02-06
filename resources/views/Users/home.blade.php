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
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">Order Now
                            </button>
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
            @if(auth()->user()->type == "Driver" )
                <h2 class="text-center">Driver Options</h2>
                <hr>
                <div class="row justify-content-around">
                    
                    @if(auth()->user()->driver->verified)
                        <div class="col-md-4">
                            
                            <div class="card">
                                <div class="card-header">Accept Order</div>
                                
                                <div class="card-body">
                                    <a class="btn btn-primary" href="{{route('orders.index')}}">
                                        {{ auth()->user()->driver->order_picked ? "Show Current Order" : "Pick an Order"}}
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
     {{--Modal to create order--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="POST" action="{{ route('orders.store') }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Some general information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Brief explanation of order</label>
                            <input id="name" type="text" name="name" class="form-control {{
                                                    $errors->has('name') ? "is-invalid" : "" }}" value="{{ old('name') }}"
                                   placeholder="Name">
                            @if($errors->has('name'))
                                <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity or number of items in the order</label>
                            <input id="quantity" type="text" name="quantity" class="form-control {{ $errors->has('quantity') ?
                            "is-invalid" : "" }}" value="{{ old('quantity') }}" placeholder="Quantity">
                            @if($errors->has('quantity'))
                                <strong class="invalid-feedback">{{ $errors->first('quantity') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight of the order this must be in kilograms</label>
                            <input id="weight" type="text" name="weight" class="form-control {{ $errors->has('weight') ?
                            "is-invalid" : "" }}" value="{{ old('weight') }}" placeholder="weight">
                            @if($errors->has('weight in KG'))
                                <strong class="invalid-feedback">{{ $errors->first('weight') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="dimension">Dimension </label>
                            <select name="dimension" id="dimension" class="form-control {{ $errors->has('dimension') ?
                            "is-invalid" : "" }}">
                                <option value="small">Small</option>
                                <option selected value="medium">Medium</option>
                                <option value="large">Large</option>
                                <option value="loader">Huge</option>
                            </select>
                            @if($errors->has('dimension'))
                                <strong class="invalid-feedback">{{ $errors->first('dimension') }}</strong>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
