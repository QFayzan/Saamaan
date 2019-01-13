
@extends('layouts.user')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Show User Details</div>
                        
                        <div class="card-body">
                           {{  Auth::user()->Type}}
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection