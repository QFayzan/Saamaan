<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Saamaan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.nav')
    
    @yield('sidebar')
    <div class="content-wrapper">
        <main class="py-4">
            @yield('content')
        </main>
    
    </div>
    @include('layouts.footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/notify.min.js') }}"></script>
<script src="{{asset('js/multi-step-modal.js')}}"></script>
@include('alert')
<script>
    sendEvent = function () {
        $('#apply-for-driver').trigger('next.m.2');
    }

</script>
</body>
</html>
