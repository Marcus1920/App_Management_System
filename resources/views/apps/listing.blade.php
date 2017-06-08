@extends('home')

@section('content')
                      <h1>
        Siyaleader Mobile Apps
      </h1>
      
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administraction</a></li>
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">APP NAME : {{$iteration->name}}</span>
              <span class="info-box-number">Version : {{$iteration->version}}</span>
	      <span class="info-box-number">Installs : {{$iteration->installs}}</span>
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


