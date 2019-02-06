@extends( Auth::user()->type === 'Driver'  ?  'driver.layout' : 'user.layout' )

@section('content')
    <main class="py-4">
      
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
        
        
    </main>
@endsection