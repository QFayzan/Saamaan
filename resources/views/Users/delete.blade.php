@extends('layouts.app')

@section('content')
    {{ $user->name }}
    
    <form action="/user/{{ $user->id}}" method="post">
        @csrf
        @method('delete')
        {{--<input type="text" name="name" value="{{$user->name}}">--}}
        <button type="submit">Delete</button>
    </form>
@endsection