@extends('home')

@section('content')

		                <h1>
        Add App
      </h1>
      
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administraction</a></li>
	<li><a href="getAll"><i class="fa fa-dashboard"></i> Apps </a></li>
	<li><a href="#"><i class="fa fa-dashboard"></i> Add App</a></li>
      </ol>
    </section>
    
                 <div class="container">
                          <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">Add A New Mobile App</div>
                                      <div class="panel-body">
                                          <form class="form-horizontal" role="form" method="POST" action="storeIteration">
                                              {{ csrf_field() }}

                                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="name" class="col-md-4 control-label">Name</label>

                                                  <div class="col-md-6">
                                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('first_name') }}" required autofocus>

                                                      @if ($errors->has('name'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('name') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>


                                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                  <label for="email" class="col-md-4 control-label">Version</label>

                                                  <div class="col-md-6">
                                                      <input id="email" type="text" class="form-control" name="version" value="{{ old('email') }}" required>

                                                      @if ($errors->has('email'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-6 col-md-offset-4">
                                                      <button type="submit" class="btn btn-primary">
                                                          Add
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


