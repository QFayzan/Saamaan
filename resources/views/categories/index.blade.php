@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All Categories </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table" id="category-table">
                <thead>
                <tr>
                    <th> Category ID</th>
                    <th> Name</th>
                    <th> Basic_fee</th>
                    <th> Price_rate</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#category-table').dataTable({
            data: {!! $order_category !!},
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'basic_fee'},
                {data: 'price_rate'},
            ],
            dom: 'Bfrtip',
            buttons: [
                'pdfHtml5'
            ]
        });
    </script>
@endpush