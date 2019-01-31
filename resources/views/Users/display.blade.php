@extends('layouts.user')

@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">Show User Details</div>
            
            <div class="card-body">
                <div><b>Username: </b>{{ auth()->user()->name }}</div>
                <div><b>You are a: </b> {{ auth()->user()->Type }}</div>
                <div><b>E-Mail: </b>{{ auth()->user()->email }}</div>
                <div><b>Address: </b>{{ auth()->user()->address }}</div>
                <div><b>City: </b>{{ auth()->user()->city }}</div>
                <div><b>Phone Number: </b>{{ auth()->user()->Phone_Number }}</div>
            </div>
            <div class="card-body">
                <a href="{{route('user.edit',auth()->id())}}" class="btn btn-primary" type="submit">
                    Edit your details
                </a>
            
            </div>
        </div>
    </div>
@endsection