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

                        <div class="form-group">
                            <label for="sel1">Select Purpose:</label>
                            <select class="form-control" id="purpose">

                                <?php
                                foreach($roles as $role){
                                    echo "<option value=\"$role\"> $role </option>";
                                }
                                ?>
                            </select>
                        </div>

                        <table class="table table-bordered" id="users-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Hostel</th>
                                <th>Dept</th>
                                <th>CareTaker</th>
                                <th>Gymkhana</th>
                                <th>Thesis</th>
                                <th>CC</th>
                                <th>Workshop</th>
                                <th>Warden</th>
                                <th>Library</th>
                                <th>Registrar</th>
                                <th>HOD</th>
                                <th>Account</th>
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
            var purpose = "{{$roles[0]}}";
            function getPurpose(){
                 console.log(purpose);
                return purpose;
            }
            function updateCols(){
                for ( var i=5 ; i<15 ; i++ ) {
                    table.column( i ).visible( false, false );
                }
                table.columns.adjust().draw( false );

                if(purpose == 'care_taker'){
                    table.column(5).visible( true, true );
                }
                if(purpose == 'gymkhana'){
                    table.column(6).visible( true, true );
                }
                if(purpose == 'superviser'){
                    table.column(7).visible( true, true );
                }
                if(purpose == 'online_no_dues_for_cc'){
                    table.column(8).visible( true, true );
                }
                if(purpose == 'deptno_due_and_workshop'){
                    table.column(9).visible( true, true );
                }
                if(purpose == 'warden'){
                    table.column(10).visible( true, true );
                }
                if(purpose == 'library'){
                    table.column(11).visible( true, true );
                }
                if(purpose == 'asst_registrar'){
                    table.column(12).visible( true, true );
                }
                if(purpose == 'hod'){
                    table.column(13).visible( true, true );
                }
                if(purpose == 'account'){
                    table.column(14).visible( true, true );
                }
            }

            var table = $('#users-table').DataTable({
                scrollX: true,
                processing: true,
                serverSide: true,
                ajax: {
                    "url": '{{ asset('datatables/getData') }}',
//                    "data": {'role' : getPurpose()},
                    "data": function(d){
                        d.role = getPurpose();
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email'},
                    { data: 'hostel', name: 'hostel' },
                    { data: 'dept', name: 'dept' },
                    { data: 'care_taker', name: 'care_taker' },
                    { data: 'gymkhana', name: 'gymkhana' },
                    { data: 'submit_thesis', name: 'submit_thesis' },
                    { data: 'online_no_dues_for_cc', name: 'online_no_dues_for_cc' },
                    { data: 'deptno_due_and_workshop', name: 'deptno_due_and_workshop' },
                    { data: 'warden', name: 'warden' },
                    { data: 'library', name: 'library' },
                    { data: 'asst_registrar', name: 'asst_registrar' },
                    { data: 'hod', name: 'hod' },
                    { data: 'account', name: 'account' },
                ],
                select: true,
            });

            updateCols();

            $('#purpose').on('change', function (e) {
                var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                purpose = valueSelected;
                console.log(purpose);
                table.ajax.reload();
                updateCols();
            });

        });

    </script>
@endsection
