@extends('home')

@section('content')

		
		                <h1>
        Add New User
      </h1>
      
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administraction</a></li>
	<li><a href="#"><i class="fa fa-dashboard"></i> Add User </a></li>
      </ol>
    </section>
                      <div class="container">
                          <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">Register</div>
                                      <div class="panel-body">
                                          <form class="form-horizontal" role="form" method="POST" action="register">
                                              {{ csrf_field() }}

                                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="name" class="col-md-4 control-label">Name</label>

                                                  <div class="col-md-6">
                                                      <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                                      @if ($errors->has('name'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('name') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>


                                              <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                                  <label for="surname" class="col-md-4 control-label">Surname</label>

                                                  <div class="col-md-6">
                                                      <input id="surname" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                                      @if ($errors->has('surname'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('surname') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>


                                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                  <div class="col-md-6">
                                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                      @if ($errors->has('email'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
                                                  <label for="cell_number" class="col-md-4 control-label">Cell phone</label>

                                                  <div class="col-md-6">
                                                      <input id="cell_number" type="text" class="form-control" name="cell_number" value="{{ old('cell_number') }}" required>

                                                      @if ($errors->has('cell_number'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('cell_number') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                  <label for="password" class="col-md-4 control-label">Password</label>

                                                  <div class="col-md-6">
                                                      <input id="password" type="password" class="form-control" name="password" required>

                                                      @if ($errors->has('password'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('password') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                  <div class="col-md-6">
                                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-6 col-md-offset-4">
                                                      <button type="submit" class="btn btn-primary">
                                                          Register
                                                      </button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
@endsection


