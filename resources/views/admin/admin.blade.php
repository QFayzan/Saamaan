@extends('layouts.admin')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1 class="text-center"> Drivers to be Verify </h1>
                        @foreach($drivers as $driver )
                            <div class="card">
                                <div class="card-header">
                                    <h4>Promote to Driver</h4>
                                </div>
                                <div class="card-body">
                                    <h5>Name :  <small>{{ $driver->Name }}</small></h5>
                                    <h5>CNIC :  <small>{{ $driver->cnic }}</small></h5>
                                    <h5>Phone :  <small>{{ $driver->phone }}</small></h5>
                                    <button class="btn btn-primary">Promote</button>
                                    <button class="btn btn-danger">Demote</button>
                                    <!-- TODO: make it work using bs-models -->
                                </div>
                        @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </main>
@endsection