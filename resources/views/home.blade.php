@extends('layouts.app')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/datatables.css') }}"/>

    <script type="text/javascript" src="{{ asset('datatables/datatables.js') }}"></script>

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <table id="table_id" class="display">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
@endsection
