@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="container-fluid">

            <div class="row justify-content-around mb-5">
                <div class="col-md-4">

                    <button type="button" class="btn btn-block py-4 dashboard-btn btn-primary" data-toggle="modal"
                            data-target="#exampleModal">Order Now
                    </button>

                </div>


                <div class="col-md-4">

                    <a href="{{route('orders.index')}}"
                       class="btn btn-primary py-4 dashboard-btn btn-block">
                        My Current Orders
                    </a>

                </div>
            </div>

            {{--    Options For Driver Only  --}}
            @if(auth()->user()->type == "driver" )

                <div class="row justify-content-around">

                    @if(auth()->user()->driver->verified)
                        <div class="col-md-4">

                            <a class="btn btn-primary btn-block py-4 dashboard-btn" href="{{route('orders.index')}}">
                                {{ auth()->user()->driver->order_picked ? "Show Current Order" : "Pick an Order"}}
                            </a>

                        </div>

                        <div class="col-md-4">

                            <a href="{{route('drivers.previous')}}" class="btn btn-primary btn-block py-4 dashboard-btn">
                                View Previous Order(s)
                            </a>

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
                                                    $errors->has('name') ? "is-invalid" : "" }}"
                                   value="{{ old('name') }}"
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
                            <label for="category">Category</label>
                            <select id="category" name="category"
                                    class="form-control {{ $errors->has('category') ? "is-invalid" : "" }}">
                                <option disabled selected>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <strong class="invalid-feedback">{{ $errors->first('category') }}</strong>
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
