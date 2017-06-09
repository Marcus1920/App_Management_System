@extends('home')

@section('content')
       <h1>
        Siyaleader Mobile Apps
      </h1>
      
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="#"><i class="fa fa-dashboard"></i> Apps </a></li>
      </ol>
    </section>
    
      
       <button onclick="location.href='add-iteration'" class="btn btn-primary" style="margin-left: 30px; margin-top: 20px;">
                Add New
       </button>
                                                  
   

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      
      <div class="row">
      @foreach($iterations as $iteration)
        <div onclick="location.href='getIteration/{{$iteration->id}}'"  class="col-md-4 col-sm-6 col-xs-12" style="cursor:pointer;">
          <div class="info-box">
		<div class="row">
	<div class="col-md-1" >
		
			<img src="/logos/{{$iteration->name}}/{{$iteration->settings->bg_image}}" class="pull-left" alt="User Image" style="width:80px; height: 80px; margin-right:10px; margin-left: 15px;margin-top:5px">
	    			
	</div>
	<div class="col-md-11">
	      <div class="info-box-content" style="margin-top: 5px;">
              <span class="info-box-text">APP NAME : {{$iteration->name}}</span>
              <span class="info-box-number">Version : {{$iteration->version}}</span>
	      <span class="info-box-number">Installs : {{$iteration->installs}}</span>
            </div>
	</div>
</div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
	@endforeach
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
        <!-- /.col -->
      </div>
@endsection


