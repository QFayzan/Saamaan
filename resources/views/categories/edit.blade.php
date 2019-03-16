@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Category</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $order_category->id)}}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name"
                                       class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}"
                                       value="{{ $order_category->name }}" placeholder="Name">
                                @if($errors->has('name'))
                                    <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label for="price_rate">Price_rate</label>
                                <input id="price_rate" type="text" name="price_rate"
                                       class="form-control {{ $errors->has('price_rate') ? "is-invalid" : "" }}"
                                       value="{{ $order_category->price_rate }}" placeholder="Price_rate">
                                @if($errors->has('price_rate'))
                                    <strong class="invalid-feedback">{{ $errors->first('price_rate') }}</strong>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label for="basic_fee">Basic_fee</label>
                                <input id="basic_fee" type="text" name="basic_fee"
                                       class="form-control {{ $errors->has('basic_fee') ? "is-invalid" : "" }}"
                                       value="{{ $order_category->basic_fee }}" placeholder="Basic_fee">
                                @if($errors->has('basic_fee'))
                                    <strong class="invalid-feedback">{{ $errors->first('basic_fee') }}</strong>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection