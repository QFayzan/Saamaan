@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All User Details </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="user-table">
                <thead class="thead-dark">
                <tr>
                    <th> Register ID</th>
                    <th> Name</th>
                    <th> Type</th>
                    <th> Joined on</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#user-table').dataTable({
            data: {!! $users !!},
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'type'},
                {data: 'created_at'},
            ],
            dom: 'Bfrtip',
            buttons: [
                'pdfHtml5'
            ]
        });
    </script>
@endpush