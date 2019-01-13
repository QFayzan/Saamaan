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
                            <a href="{{route('orders.show')}}"
                               class="btn btn-primary"
                            >
                                View Your Order
                            </a>

                        </div>
                    </div>
                </div>
            </div>


            {{-- Style how ever you want--}}


            <div>
                {{-- orders list--}}

                <ul>
                    @foreach(auth()->user()->orders as $order)
                        {{-- order should have name or some thing to display--}}
                        <li><a href="{{ route('details.show',$order->id) }}">{{ $order->name }}</a></li>
                        <p>
                            @foreach($order->details as $detail)
                                {{-- what ever you want to--}}
                                {{ $detail->Weight }}
                            @endforeach
                        </p>
                    @endforeach
                </ul>

            </div>


        </div>
    </main>
@endsection