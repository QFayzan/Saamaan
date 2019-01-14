@extends( Auth::user()->Type === 'Driver'  ?  'driver.layout' : 'user.layout1' )

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Accept an Order</div>
                        
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
                        <div class="card-header">View Previous Orders</div>
                        
                        <div class="card-body">
                            <a href="{{route('orders.display')}}"
                               class= "btn btn-primary"
                            >
                                View Your Previous Order(s)
                            </a>
                        
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </main>
@endsection