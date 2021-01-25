@extends('layouts.navigation')


@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zaposlenici</div>
                    <div class="panel-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Ime</th>
                                    <th>Prezime</th>
                                    <th>Odijel</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {

            var table = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.employees') }}",
                columns: [
                    {data: 'ime'},
                    {data: 'prezime'},
                    {data: 'odijel'},
                ]
            });

            $('#datatable tbody').on('click', 'tr', function () {
                var data = table.row( this ).data();
                window.location = "/employees/show/" + data.id
            } );

        });
    </script>
@endsection