@extends('form')
@section('title','Change Password')
@section('form')
    
    <form method="POST" action="{{ route('user.changePass',auth()->id()) }}">
        @csrf
        @method('patch')
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Old :</label>
            <div class="col-sm-10">
            <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? "is-invalid" :
            "" }}" value="{{ old('password') }}" placeholder="Current Password">
            @if($errors->has('password'))
                <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
            @endif
            </div>
        </div>
        
        <div class="form-group row">
            <label for="new_password" class="col-sm-2 col-form-label">New :</label>
            <div class="col-sm-10">
            <input id="new_password" type="password" name="newPassword"
                   class="form-control {{ $errors->has('newPassword') ? "is-invalid" : "" }}"
                   placeholder="New Password">
            @if($errors->has('newPassword'))
                <strong class="invalid-feedback">{{ $errors->first('newPassword') }}</strong>
            @endif
            </div>
        </div>
        
        <div class="form-group row">
            <label for="new_password_confirm" class="col-sm-2 col-form-label">Confirm :</label>
            <div class="col-sm-10">
            <input id="new_password_confirm" type="password" name="newPassword_confirmation"
                   class="form-control {{ $errors->has('newPassword_confirmation') ? "is-invalid" : "" }}"
                   value="{{ old('newPassword_confirmation') }}"
                   placeholder="Confirm Password">
            @if($errors->has('newPassword_confirmation'))
                <strong class="invalid-feedback">{{ $errors->first('newPassword_confirmation') }}</strong>
            @endif
            </div>
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>

@endsection