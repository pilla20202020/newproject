@extends('layouts.admin.admin')

@section('page-specific-styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TableTools.min.css') }}"/>
@endsection

@section('title', 'Brand')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-head d-flex">
                <header class="text-capitalize">Brand</header>
                <div class="tools ml-auto">
                    <a class="btn btn-primary ink-reaction" href="{{ route('brand.create') }}">
                        <i class="md md-add"></i>
                        Add
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="tableData" class="table renew-column hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>S.No.</th>
                        <th>Brand Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Visibility</th>
                        <th>Availability</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('page-specific-scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#tableData').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ route('brand.data') }}',
                columnDefs: [{
                    targets: -1,
                    className: 'text-right'
                }],
                "columns": [
                    { "data": "id",  'visible': false },
                    { "data": "DT_RowIndex",  orderable: false, searchable: false },
                    { "data": "name" },
                    { "data": "description" },
                    { "data": "image" },
                    { "data": "visibility" },
                    { "data": "availability" },
                    { "data": "status" },
                    { "data": "actions", orderable: false, searchable: false },
                ],
                order: [ [0, 'desc'] ]
            });
        } );
    </script>
@endsection


