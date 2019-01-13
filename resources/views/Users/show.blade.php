@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create Order</div>
                        
                        <div class="card-body">
                            <a href="{{ route("orders.store") }}"
                            class = "btn btn-primary"
                            >Order!!
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Check Order</div>
                    
                        <div class="card-body">
                            <button type="View Job" onclick="window.location='{{ url("orders/show") }}'">Button</button>
                
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </main>
@endsection