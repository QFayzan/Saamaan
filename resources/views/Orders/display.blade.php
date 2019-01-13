@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Order Details</div>
                        
                        <div class="card-body">
                            <div><b>Username: </b>{{ auth()->user()->name }}  </div>
                            <div><b>E-Mail: </b>{{ auth()->user()->email }}  </div>
                            <div><b>Address: </b>{{ auth()->user()->address }}  </div>
                            <div><b>City: </b>{{ auth()->user()->city }} </div>
                            <div><b>Phone Number: </b>{{ auth()->user()->Phone_Number }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection