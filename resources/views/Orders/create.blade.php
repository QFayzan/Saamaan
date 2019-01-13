@extends('form')
@section('title','Place an Order')
@section('form')
    
    <form method="POST" action="{{ route('orders.create') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="Name" class="form-control {{ $errors->has('Name') ? "is-invalid" : "" }}" value="{{ old('Name') }}" placeholder="Name">
            @if($errors->has('Name'))
                <strong class="invalid-feedback">{{ $errors->first('Name') }}</strong>
            @endif
        </div>
    </form>

@endsection