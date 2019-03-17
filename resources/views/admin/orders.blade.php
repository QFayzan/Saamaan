@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All Order Details </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="orders_table">
                <thead class="thead-dark">
                <tr>
                    <th> ID</th>
                    <th> Placed By (Client ID)</th>
                    <th> Picked By (Driver ID)</th>
                    <th> Created On</th>
                    <th> Status </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#orders_table').dataTable({
            data: {!! $orders !!},
            columns: [
                {data: 'id'},
                {data: 'placed_by'},
                {data: 'picked_by'},
                {data: 'created_at'},
                {data: 'current_status'},
            ],
            dom: 'Bfrtip',
            buttons: [
                'pdfHtml5'
            ]
        });
    </script>
@endpush