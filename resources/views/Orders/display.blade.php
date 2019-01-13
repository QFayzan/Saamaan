@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Order Details</div>
                        
                        <div class="card-body">
                    {{--order details and id shown here--}}
                            <div><br>{{Current_Status}}</div>
                            <div><br></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection