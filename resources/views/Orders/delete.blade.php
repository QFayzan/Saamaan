<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Waqar">
    
    <link rel="icon" href="{{ asset("favicon.png") }}">
    <title>{{ config('app.name') }}</title>
    
    <link href="{{ asset("css/app.css") }}" media="all" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}" media="all" rel="stylesheet">
</head>
<body>
<div class="app" id="app">
    
    @include('layouts.nav')
    @yield('content')

</div>
<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("js/script.js") }}"></script>
</body>
</html>
