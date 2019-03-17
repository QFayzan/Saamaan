@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All In-Progress Transactions </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="current_table">
                <thead class="thead-dark">
                <tr>
                    <th> Order ID</th>
                    <th> Placed By (Client ID)</th>
                    <th> Picked By (Driver ID)</th>
                    <th> Created On</th>
                </tr>
                </thead>
             
            </table>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#current_table').dataTable({
            data: {!!$orders !!},
            columns: [
                {data: 'id'},
                {data: 'placed_by'},
                {data: 'picked_by'},
                {data: 'created_at'},
            
            ],
            dom: 'Bfrtip',
            buttons: [
                'pdfHtml5'
            ]
        });
    </script>
@endpush