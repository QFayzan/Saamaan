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
                            {{-- Style how ever you want--}}
                            <div>
                                {{-- orders list--}}
                                <ul>
                                    @foreach(auth()->user()->orders as $order)
                                        {{-- order should have name or some thing to display--}}
                                        <li><a href="{{ route('orders.display',$order->id) }}">{{ $order->name }}</a></li>
                                        <p>
                                            @foreach($order->Order_Detail as $detail)
                                                {{-- what ever you want to--}}
                                                {{ $detail->Weight }}
                                            @endforeach
                                        </p>
                                    @endforeach
                                </ul>
    
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection