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
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Some general information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('orders.create') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Brief explanation of order</label>
                                                <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{ old('name') }}" placeholder="Name">
                                                @if($errors->has('name'))
                                                    <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
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
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>