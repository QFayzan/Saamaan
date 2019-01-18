@extends('form')
@section('title','Edit Your Details')
@section('form')
    
    <form method="POST" action="{{ route('user.update',auth()->id()) }}">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="Name" class="form-control {{ $errors->has('Name') ? "is-invalid" : "" }}"
                   value="{{ $user->name }}" placeholder="Name">
            @if($errors->has('Name'))
                <strong class="invalid-feedback">{{ $errors->first('Name') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="name">address</label>
            <input id="name" type="text" name="Address" class="form-control {{ $errors->has('Address') ? "is-invalid" : "" }}"
                   value="{{ $user->address }}" placeholder="Address">
            @if($errors->has('Address'))
                <strong class="invalid-feedback">{{ $errors->first('Address') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="name">city</label>
            <input id="name" type="text" name="city" class="form-control {{ $errors->has('city') ? "is-invalid" : "" }}"
                   value="{{ $user->city }}" placeholder="city">
            @if($errors->has('city'))
                <strong class="invalid-feedback">{{ $errors->first('city') }}</strong>
            @endif
        </div>
        <div class="form-group">
            <label for="name">Phone_Number</label>
            <input id="name" type="text" name="Phone_Number" class="form-control {{ $errors->has('Phone_Number') ? "is-invalid" : "" }}"
                   value="{{ $user->Phone_Number }}" placeholder="Phone_Number">
            @if($errors->has('Phone_Number'))
                <strong class="invalid-feedback">{{ $errors->first('Phone_Number') }}</strong>
            @endif
        </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
    </form>

@endsection