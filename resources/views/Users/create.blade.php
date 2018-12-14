@extends('layouts.app')

@section('content')
    <div class="col-8 py-3 m-auto">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            {{--<input type="text" name="name">--}}
            {{--<input type="email" name="email">--}}
            {{--<input type="password" name="password">--}}
            {{--<button type="submit">--}}
            {{--Submit!!--}}
            {{--</button>--}}
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name :</label>
                <div class="col-sm-10">
                    <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" value="{{ old('name') }}" placeholder="Name">
                    @if($errors->has('name'))
                        <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email :</label>
                <div class="col-sm-10">
                    <input id="email" type="email" name="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}"
                           value="{{ old('email') }}" placeholder="Email">
                    @if($errors->has('email'))
                        <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? "is-invalid" :
             "" }}" value="{{ old('password') }}" placeholder="Password">
                    @if($errors->has('password'))
                        <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        
        </form>
    </div>
    
@endsection