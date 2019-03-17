@extends('layouts.user')

@section('content')
    
    <div class="card">
        <div class="card-header">Show User Details</div>
        
        <div class="card-body col-7">
            <table class="table table-dark table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ auth()->user()->type }}</td>
                </tr>
                <tr>
                    <th>E-Mail</th>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ auth()->user()->address }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ auth()->user()->city }}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td> {{ auth()->user()->phone_number }}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection