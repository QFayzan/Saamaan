@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editing Details For User ID : {{$user->id }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.user.update',$user->id )}}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}"
                                       value="{{ old('name') ? old('name') : $user->name }}" placeholder="Name">
                                @if($errors->has('name'))
                                    <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">address</label>
                                <input id="name" type="text" name="address" class="form-control {{ $errors->has('address') ? "is-invalid" : "" }}"
                                       value="{{ old('address') ? old('address') : $user->address }}" placeholder="Address">
                                @if($errors->has('address'))
                                    <strong class="invalid-feedback">{{ $errors->first('address') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="city">city</label>
                                <input id="city" type="text" name="city" class="form-control {{ $errors->has('city') ? "is-invalid" : "" }}"
                                       value="{{ old('city') ? old('city') : $user->city }}" placeholder="city">
                                @if($errors->has('city'))
                                    <strong class="invalid-feedback">{{ $errors->first('city') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Phone Number</label>
                                <input id="name" type="text" name="phone_number" class="form-control {{ $errors->has
                                ('phone_number') ? "is-invalid" : "" }}"
                                       value="{{ old('phone_number') ? old('phone_number') :$user->phone_number }}"
                                       placeholder="03XX-XXXXXXX">
                                @if($errors->has('phone_number'))
                                    <strong class="invalid-feedback">{{ $errors->first('phone_number') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection