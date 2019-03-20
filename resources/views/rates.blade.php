@extends('layouts.user')
@section('content')
    <main class="py-4">
        <div class="container">
            <h1 class="text-center">Rates</h1>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table table-light table-bordered" id="rates-table">
                            <thead class="thead-dark">
                            <tr>
                                <th>Type</th>
                                <th>Rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script>
        $('#rates-table').dataTable({
            data: {!! $categories !!},
            columns: [
                { data: 'name'},
                {
                    data: null,
                    render: function (data) {
                        return 'Rs : ' +data.price_rate + ' / Km + ' + data.basic_fee +' Base Price';
                    }
                }
            ]
        })
    </script>
@endpush