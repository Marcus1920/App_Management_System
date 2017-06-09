@extends('home');


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Roles</div>
                    <div class="panel-body">

                        <form action="Addroles" method="post">

                            {{csrf_field()}}

                                <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Roles</label>

                                    <div class="col-md-6">
                                    <input type="text" name="roles" class="form-control" placeholder="">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('roles') }}</strong>
                                            </span>

                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Permission</label>

                                    <div class="col-md-6">
                                <input type="text" name="permission" class="form-control" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>

                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection