@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All User Details </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th> Register ID</th>
                    <th> Name</th>
                    <th> Type</th>
                    <th> Joined on</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->type }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <div class="card-body">
                                <a href="{{route('admin.user.edit',auth()->id())}}" class="btn btn-primary" type="submit">
                                    Edit User Details
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection