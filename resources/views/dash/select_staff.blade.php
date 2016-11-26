@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/staff') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="type" class="col-md-4 control-label">Purpose:</label>

                                <div class="col-md-6">
                                    <label class="radio-inline"><input type="radio" name="type" value="staff">Staff</label>
                                    <label class="radio-inline"><input type="radio" name="type" value="student">Student</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
