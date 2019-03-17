@extends('layouts.user')

@section('content')
    
    <div class="card">
        <div class="card-header">Show User Details</div>
        
        <div class="card-body">
            <table class="dark">
                <tr>Name: {{ auth()->user()->name }}</tr>
                <tr>Role: {{ auth()->user()->type }} </tr>
                <tr>E-Mail: {{ auth()->user()->email }}  </tr>
                <tr>Address: {{ auth()->user()->address }} </tr>
                <tr>City: {{ auth()->user()->city }} </tr>
                <tr>Phone Number: {{ auth()->user()->phone_number }}</tr>
            
            </table>
        </div>
    </div>

@endsection