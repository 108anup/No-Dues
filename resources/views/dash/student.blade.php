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
                        <table class="table table-striped">
                            <tr>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                                <?php
                                foreach (array_keys($student["attributes"]) as $key => $value) {
                                    if($key>=8 && $key<=18){
                                        echo "<tr>";
//                                        echo "<td>$key</td>";
                                        echo "<td>$value</td>";
                                        echo '<td>'.$student["$value"],'</td>';
                                        echo "</tr>";
                                    }
                                }
                                ?>
                        </table>
                        Department Professors:
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            foreach ($dept_profs as $dp) {
                                echo "<tr>";
                                echo "<td>".$dp["name"]."</td>";
                                echo '<td>'.$dp["status"],'</td>';
                                echo "</tr>";
                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
