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

                        <button id="customFlagbtn">Set Custom Flag</button>
                        <input id="customFlag" type="text" placeholder="Enter Flag" name="CustomFlag"/>

                        <table class="table table-bordered" id="students-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Hostel</th>
                                <th>Dept</th>
                                <th>CareTaker</th>
                                <th>Gymkhana</th>
                                <th>Superviser</th>
                                <th>CC</th>
                                <th>Workshop</th>
                                <th>Warden</th>
                                <th>Library</th>
                                <th>Registrar</th>
                                <th>HOD</th>
                                <th>Account</th>
                                <th>Department Prof</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Hostel</th>
                                <th>Dept</th>
                                <th>CareTaker</th>
                                <th>Gymkhana</th>
                                <th>Superviser</th>
                                <th>CC</th>
                                <th>Workshop</th>
                                <th>Warden</th>
                                <th>Library</th>
                                <th>Registrar</th>
                                <th>HOD</th>
                                <th>Account</th>
                                <th>Department Prof</th>
                            </tr>
                            </tfoot>
                        </table>

                        {{--<button id="ClearDues">Clear Dues</button>--}}


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
            var table;
            function getPurpose(){
                 console.log(purpose);
                return purpose;
            }
            function updateCols(){
                for ( var i=5 ; i<=15 ; i++ ) {
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
                if(purpose == 'prof'){
                    table.column(15).visible( true, true );
                }
            }

            function updateAjax(clear, ids){
                $.ajax({
                    url: 'submit',
                    data: {
                        purpose: purpose,
                        ids: ids,
                        status: clear,
                    }
                }).done(function (data) {
                    if (data == 1) {
                        table.ajax.reload();
                    }
                    else {
                        alert("There was some problem with submission. Please refresh and try again or contact the invigilator.")
                    }
                });
            }

            table = $('#students-table').DataTable({
                dom: 'Bfrtip',
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
                    { data: 'superviser', name: 'superviser' },
                    { data: 'online_no_dues_for_cc', name: 'online_no_dues_for_cc' },
                    { data: 'deptno_due_and_workshop', name: 'deptno_due_and_workshop' },
                    { data: 'warden', name: 'warden' },
                    { data: 'library', name: 'library' },
                    { data: 'asst_registrar', name: 'asst_registrar' },
                    { data: 'hod', name: 'hod' },
                    { data: 'account', name: 'account' },
                    { data: 'dept_prof', name: 'dept_prof' },
                ],
                select: true,
                buttons: [
                    {
                        text: 'Clear Dues',
                        action: function () {
                            //var rows = table.rows( { selected: true } );
                            var ids = $.map(table.rows('.selected').data(), function (item) {
                                return item.id;
                            });

                            console.log(ids);
                            updateAjax("Clear", ids);
                        }
                    },
                    {
                        text: 'UnClear Dues',
                        action: function () {
                            //var rows = table.rows( { selected: true } );
                            var ids = $.map(table.rows('.selected').data(), function (item) {
                                return item.id;
                            });

                            console.log(ids);
                            updateAjax("Due",ids);
                        }
                    },
                ],
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

            $('#customFlagbtn').click(function SetCustomFlag() {

                var flag = $('#customFlag').val();
                console.log(flag, "Flag");

                //var rows = table.rows( { selected: true } );
                var ids = $.map(table.rows('.selected').data(), function (item) {
                    return item.id;
                });

                console.log(ids);
                updateAjax(flag,ids);
            });
        });

    </script>
@endsection
