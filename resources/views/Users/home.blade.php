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
                            <label for="Name">Brief explanation of order</label>
                            <input id="Name" type="text" name="Name" class="form-control {{
                                                    $errors->has('Name') ? "is-invalid" : "" }}" value="{{ old('Name') }}"
                                   placeholder="Name">
                            @if($errors->has('Name'))
                                <strong class="invalid-feedback">{{ $errors->first('Name') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity or number of items in the order</label>
                            <input id="quantity" type="text" name="Quantity" class="form-control {{ $errors->has('Quantity') ? "is-invalid" : "" }}" value="{{ old('Quantity') }}" placeholder="Quantity">
                            @if($errors->has('Quantity'))
                                <strong class="invalid-feedback">{{ $errors->first('Quantity') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight of the order this must be in kilograms</label>
                            <input id="weight" type="text" name="Weight" class="form-control {{ $errors->has('Weight') ? "is-invalid" : "" }}" value="{{ old('Weight') }}" placeholder="Weight">
                            @if($errors->has('Weight in KG'))
                                <strong class="invalid-feedback">{{ $errors->first('Weight') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="dimension">Dimension in meters only </label>
                            <input id="dimension" type="text" name="Dimension" class="form-control {{ $errors->has('Dimension') ? "is-invalid"
            : "" }}" value="{{ old('Dimension') }}" placeholder="eg 1.25 1.10 means 1.25 meters by 1.10 meters">
                            @if($errors->has('Dimension'))
                                <strong class="invalid-feedback">{{ $errors->first('Dimension') }}</strong>
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
