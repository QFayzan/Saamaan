<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Saamaan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/purple_theme.min.css') }}">
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css"/>--}}
    
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
<script src="{{asset('datatables.min.js')}}"></script>
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>--}}
{{--<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>--}}
@include('alert')
@stack('js')
<script>
    sendEvent = function () {
        $('#apply-for-driver').trigger('next.m.2');
    }

</script>
</body>
</html>
