@extends('form')
@section('title','Create a User')
@section('form')
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="form-group">
          <label for="name">Name</label>
          <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{
           old('name') }}" placeholder="Name">
          @if($errors->has('name'))
              <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
          @endif
      </div>
    </form>
  
@endsection