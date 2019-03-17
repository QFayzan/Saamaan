@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center"> All Organizations </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="category-table">
                <thead class="thead-dark">
                <tr>
                    <th> Registration ID</th>
                    <th> Name</th>
                    <th> Contact</th>
                    <th> Address</th>
                    <th> Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#category-table').dataTable({
            data: {!! $organizations !!},
            columns: [
                {data: 'registration'},
                {data: 'name'},
                {data: 'contact'},
                {data: 'address'},
                {
                    data: null,
                    render: function (data) {
                        return '<a class="btn btn-info" href="/organizations/' + data.id + '/edit/">' +
                            '<i class="fa fa-pencil-alt"></i> Edit</a>'
                    }
                },
            ],
            dom: 'Bfrtip',
            buttons: [
                'pdfHtml5'
            ]
        });
    </script>
@endpush