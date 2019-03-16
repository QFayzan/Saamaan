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
            <label for="category">Category </label>
            <select name="category" id="category" class="form-control {{ $errors->has('dimension') ? "is-invalid"
                        : "" }}">
                <option value="glassware">Glassware</option>
                <option selected value="metals">Metals</option>
                <option value="parcel">Parcel</option>
                <option value="electronics">Electronics</option>
                <option value="furniture">Furniture</option>
                <option value="construction-materials">Construction Materials</option>
            </select>
            @if($errors->has('category'))
                <strong class="invalid-feedback">{{ $errors->first('category') }}</strong>
            @endif
        </div>
      
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection