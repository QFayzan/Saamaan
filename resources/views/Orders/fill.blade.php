@extends('form')
@section('title','Place your Order\'s details')
@section('form')
    <form method="POST" action="{{ route('details.store',$order->id) }}">
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
            <input id="quantity" type="text" name="quantity" class="form-control {{ $errors->has('quantity') ? "is-invalid" : ""
             }}" value="{{ old('quantity') }}" placeholder="quantity">
            @if($errors->has('quantity'))
                <strong class="invalid-feedback">{{ $errors->first('quantity') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="weight">Weight of the order this must be in kilograms</label>
            <input id="weight" type="text" name="weight" class="form-control {{ $errors->has('weight') ? "is-invalid" : "" }}"
                   value="{{ old('weight') }}" placeholder="weight">
            @if($errors->has('weight in KG'))
                <strong class="invalid-feedback">{{ $errors->first('weight') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="dimension">Dimension </label>
            
            <select name="dimension" id="dimension" class="form-control {{ $errors->has('dimension') ? "is-invalid" : "" }}">
                <option value="small">Small</option>
                <option selected value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="loader">Huge</option>
            </select>
            @if($errors->has('dimension'))
                <strong class="invalid-feedback">{{ $errors->first('dimension') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection