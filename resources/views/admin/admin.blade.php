@extends('layouts.admin')
@section('nav-title','Admin Dashboard')
@section('content')
    <main class="py-4">

        <div class="col-10 mx-auto text-center mb-4">
            <div class="container-fluid mb-4">

                <a href="{{ route('admin.view.users') }}"
                   class="btn btn-block btn-info py-4 dashboard-btn">
                    View all Users
                </a>

            </div>

            <div class="container-fluid mb-4">

                <a href="{{ route('admin.view.current') }}"
                   class="btn btn-block btn-success py-4 dashboard-btn">
                    View All In-Progress Orders
                </a>

            </div>

            <div class="container-fluid mb-4">

                <a href="{{ route('admin.view.orders') }}"
                   class="btn btn-block btn-primary py-4 dashboard-btn">
                    Orders Archive
                </a>

            </div>

        </div>
{{--RIP our Promotion code--}}
        {{--<div class="container">--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-md-4">--}}
                    {{--<h1 class="text-center"> Drivers to be Verified </h1>--}}
                    {{--@foreach($drivers as $driver )--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                                {{--<h4>Promote to Driver</h4>--}}
                            {{--</div>--}}
                            {{--<div class="card-body">--}}
                                {{--<h5>User ID for the account:--}}
                                    {{--<small>{{ $driver->user_id }}</small>--}}
                                {{--</h5>--}}
                                {{--<h5>Name :--}}
                                    {{--<small>{{ $driver->name }}</small>--}}
                                {{--</h5>--}}
                                {{--<h5>CNIC :--}}
                                    {{--<small>{{ $driver->cnic }}</small>--}}
                                {{--</h5>--}}
                                {{--<h5>Phone :--}}
                                    {{--<small>{{ $driver->user->phone_number }}</small>--}}
                                {{--</h5>--}}
                                {{--<h5>Image : <img src="storage/{{ $driver->image  }}" height="100" width="100"></h5>--}}
                                {{--<div class="button-container">--}}
                                    {{--<form action="{{route('admin.promote',$driver->id)}}" method="post">--}}
                                        {{--@csrf--}}
                                        {{--<button type="submit" class="btn btn-primary">Promote</button>--}}
                                    {{--</form>--}}

                                    {{--<form action="{{ route('admin.refuse',$driver->id) }}" method="post">--}}
                                        {{--@csrf--}}
                                        {{--<button class="btn btn-danger" type="submit">Refuse</button>--}}
                                    {{--</form>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    </main>

@endsection