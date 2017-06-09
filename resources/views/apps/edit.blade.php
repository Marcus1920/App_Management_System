@extends('home')

@section('content')


		                <h1>
        Edit App
      </h1>
      
      
      <ol class="breadcrumb">
        <li><a href="../home"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="../getAll"><i class="fa fa-dashboard"></i> Apps </a></li>
	<li><a href="#"><i class="fa fa-dashboard"></i> Edit App</a></li>
      </ol>
    </section>
                 <div class="container">
                          <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                  <div class="panel panel-default">
                                      <div class="panel-heading panel-text">Edit {{ucfirst($iteration->name)}}</div>
                                      <div class="panel-body">
					  {!! Form::open(array('url'=>'storeIteration','method'=>'POST', 'files'=>true)) !!}
                                          <!-- <form class="form-horizontal" role="form" method="POST" files="true" action="storeIteration"> -->
                                              {{ csrf_field() }}

                                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="name" class="col-md-4 control-label">Name</label>

                                                  <div class="col-md-6">
                                                      <input id="name" type="text" class="form-control" name="name" value="{{$iteration->name}}" required autofocus>

                                                      @if ($errors->has('name'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('name') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>
					      
					      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="name" class="col-md-4 control-label">End Point (URL)</label>

                                                  <div class="col-md-6">
                                                      <input id="name" type="text" class="form-control" name="end_point" value="{{$iteration->settings->endpoint}}" required autofocus>

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
                                                      <input id="email" type="text" class="form-control" name="version" value="{{$iteration->version}}" required>

                                                      @if ($errors->has('email'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>
					      
					      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="name" class="col-md-4 control-label">Logo</label>

                                                  <div class="col-md-6">
                                                      <input id="name" type="text" class="form-control" name="logo" value="{{$iteration->settings->logo}}" required autofocus>

                                                      @if ($errors->has('name'))
                                                          <span class="help-block">
                                                          <strong>{{ $errors->first('name') }}</strong>
                                                      </span>
                                                      @endif
                                                  </div>
                                              </div>
					      
					      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="name" class="col-md-4 control-label">Background Image</label>

                                                  <div class="fileupload fileupload-new row" data-provides="fileupload">
							<div class="input-group col-md-6">
							
							    <div class="input-group-btn">
								<span class="btn btn-file btn-alt btn-sm">
								<span class="fileupload-new">Select file</span>
								<span class="fileupload-exists">Change</span>
								<input class="col-md-2 control-label" type="file" name="image" value="{{$iteration->settings->bg_image}}"/>
							    </span>
							    </div>

							    
							</div>
						  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-6 col-md-offset-4">
                                                      <button  type="submit" class="btn btn-primary">
                                                          Save
                                                      </button>
                                                  </div>
                                              </div>
                                         <!-- </form> -->
					  {!! Form::close() !!}
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

@endsection