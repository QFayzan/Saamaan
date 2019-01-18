<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Saamaan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.nav')
    
    @yield('sidebar')
    
    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts.footer')
    
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
