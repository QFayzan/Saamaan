@extends('form')
@section('title','Place an Order')
@section('form')
    
    <form method="POST" action="{{ route('orders.create') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{
             old('name') }}" placeholder="name">
            @if($errors->has('name'))
                <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
            @endif
        </div>
    </form>

@endsection