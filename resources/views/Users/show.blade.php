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
                               class="btn btn-primary"
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
                            <a href="{{route('orders.display')}}"
                               class="btn btn-primary"
                            >
                                View Your Order
                            </a>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Accept Order</div>
                        @if(auth()->user()->Type=='Driver')
                            
                            <div class="card-body">
                                <a
                                        {{--href="{{ route("#") }}"--}}
                                        class="btn btn-primary">
                                    Pick an Order
                                </a>
                            </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
