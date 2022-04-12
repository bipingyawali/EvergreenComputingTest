@extends('layout.main')
@section('title','Customers')
@section('page_title', 'Customers')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Customers
                    <a class="btn btn-primary btn-sm text-white float-right" href="{{ route('customers.create') }}"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="card-body">
                    @include('flash::message')
                    <table id="userTable" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Company Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th width="7%">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        getData()

        function getData(){
            $('#userTable').DataTable({
                "processing": true,
                "serverSide": true,
                "destroy":true,
                "searching":true,
                "bLengthChange": true,
                "ajax": "{{ route('customers.ajax') }}",
                "columns": [
                    {data: 'DT_RowIndex',orderable: false, searchable: false},
                    {data: 'company_name', name: 'company_name'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'phone_number', name: 'phone_number'},
                    {data: 'action', name: 'action',orderable: false,searchable: false},
                ],
                buttons: ['copy', 'print'],
                order: [[0, 'desc']],
            });
        }
    </script>
@endpush
