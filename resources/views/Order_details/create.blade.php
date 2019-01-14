@extends('form')
@section('title','Place your Order\'s details')
@section('form')
    <form method="POST" action="{{ route('details.store',$order->id) }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="Name" class="form-control {{ $errors->has('Name') ? "is-invalid" : "" }}" value="{{ old('Name') }}" placeholder="Name">
            @if($errors->has('Name'))
                <strong class="invalid-feedback">{{ $errors->first('Name') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input id="quantity" type="text" name="Quantity" class="form-control {{ $errors->has('Quantity') ? "is-invalid" : "" }}" value="{{ old('Quantity') }}" placeholder="Quantity">
            @if($errors->has('Quantity'))
                <strong class="invalid-feedback">{{ $errors->first('Quantity') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input id="weight" type="text" name="Weight" class="form-control {{ $errors->has('Weight') ? "is-invalid" : "" }}" value="{{ old('Weight') }}" placeholder="Weight">
            @if($errors->has('Weight'))
                <strong class="invalid-feedback">{{ $errors->first('Weight') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="dimension">Dimension</label>
            <input id="dimension" type="text" name="Dimension" class="form-control {{ $errors->has('Dimension') ? "is-invalid" : "" }}" value="{{ old('Dimension') }}" placeholder="Dimension">
            @if($errors->has('Dimension'))
                <strong class="invalid-feedback">{{ $errors->first('Dimension') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection