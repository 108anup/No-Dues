@extends('layouts.app')
@section('scripts')


    {{--Online CDN--}}

    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>--}}

    {{--<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>--}}


    {{--Local Complete--}}

    <link rel="stylesheet" type="text/css" href="{{ asset('datatables_full/datatables.min.css') }}"/>
    <script type="text/javascript" src="{{ asset('datatables_full/datatables.min.js') }}"></script>

    {{--Local Incomplete--}}

    {{--<link rel="stylesheet" type="text/css" href="{{ asset('datatables/datatables.min.css') }}"/>--}}
    {{--<script type="text/javascript" src="{{ asset('js/jquery-2.3.3.min.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('datatables/datatables.min.js') }}"></script>--}}

    {{--Testing--}}

    {{--<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>--}}

    {{--<link rel="stylesheet" type="text/css" href="{{ asset('datatables/datatables.css') }}"/>--}}
    {{--<script type="text/javascript" src="{{ asset('datatables/datatables.js') }}"></script>--}}

    {{--<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>--}}
    {{--<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>--}}
    {{--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">--}}


@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <table class="table table-bordered" id="users-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Hostel</th>
                            <th>Dept</th>
                        </tr>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": '{{ asset('datatables/getData') }}',
                    "data": {'role' : 'hod'},
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email'},
                    { data: 'hostel', name: 'hostel' },
                    { data: 'dept', name: 'dept' },
                ]
            });
        });

    </script>
@endsection
