@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Organization</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('organizations.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name"
                                       class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}"
                                       value="{{ old('name') }}" placeholder="Name">
                                @if($errors->has('name'))
                                    <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                                @endif
                            </div>

                           <div class="form-group">
                               <label for="address">Address</label>
                               <input id="address" type="text" name="address" class="form-control {{ $errors->has('address') ? "is-invalid" : "" }}" value="{{ old('address') }}" placeholder="Address">
                               @if($errors->has('address'))
                                   <strong class="invalid-feedback">{{ $errors->first('address') }}</strong>
                               @endif
                           </div>
                            
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input id="contact" type="text" name="contact" class="form-control {{ $errors->has('contact') ? "is-invalid" : "" }}" value="{{ old('contact') }}" placeholder="Contact">
                                @if($errors->has('contact'))
                                    <strong class="invalid-feedback">{{ $errors->first('contact') }}</strong>
                                @endif
                            </div>
                            
                           <div class="form-group">
                               <label for="registration">Registration</label>
                               <input id="registration" type="text" name="registration" class="form-control {{ $errors->has('registration') ? "is-invalid" : "" }}" value="{{ old('registration') }}" placeholder="Registration">
                               @if($errors->has('registration'))
                                   <strong class="invalid-feedback">{{ $errors->first('registration') }}</strong>
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