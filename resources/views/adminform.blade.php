@extends('layouts.admin')
{{--This is main Template it contains a working layout that will display be used to mak rest of the CRUDs--}}
@section('content')
    <!-- ./wrapper -->
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">@yield('title')</div>
                        
                        <div class="card-body">
                            @yield('form')
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection