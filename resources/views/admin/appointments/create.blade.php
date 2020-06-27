@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Students</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


   <?php
   $con = mysqli_connect("localhost","root","","serp");
   ?>
   <br>
     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Appointment</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.appointments.store')}}">
       <div class="card-footer">
                  
                </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                <div id="my_camera"></div>
                </div>
                <div class="col-md-4">
                
	<input type=button value="Take Snapshot" onClick="take_snapshot()">

	               </div>
                 <div class="col-md-4">
                 <div id="results"  ></div>
	                </div>
                  <div class="col-md-4">
                    <p for="">Visitor's Name</p>
                    <input type="text" name="name" required class="form-control"  placeholder="Visitor' Name">
                  </div>
                  <div class="col-md-4">
                    <p for="">Mobile Number</p>
                    <input type="text" name="phone" required class="form-control"  placeholder="Mobile Number">
                  </div>
                  <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">Person to See</p>
                    <input type="text" name="person" required class="form-control"  placeholder="person">
                  </div>
                  <div class="col-md-4">
                    <p for="">Purpose</p>
                    <input type="text" name="purpose" required class="form-control"  placeholder="Purpose">
                  </div>
                  <div class="col-md-4">
                    <p for="">Appointment Time</p>
                    <input type="time" name="atime" required class="form-control"  placeholder="Appointment Time">
                  </div>
                  <div class="col-md-4">
                    <p for="">Appointment Date</p>
                    <input type="date" name="adate" required class="form-control"  placeholder="Appointment Date">
                  </div>
                </div>
     
              
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
              </form>
              
 <!-- Webcam.min.js -->
 <script type="text/javascript" src="{{ asset('adminlte/webcamjs/webcam.min.js')}}"></script>

<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
  });
  Webcam.attach( '#my_camera' );
</script>
<!-- A button for taking snaps -->

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">

  function take_snapshot() {
    
    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
      // display results in page
      document.getElementById('results').innerHTML = 
        '<img src="'+data_uri+'"/>';
    } );
  }
</script>
 <!-- Webcam.min.js -->
 <script type="text/javascript" src="{{ asset('adminlte/webcamjs/webcam.min.js')}}"></script>

<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
  });
  Webcam.attach( '#my_camera' );
</script>
<!-- A button for taking snaps -->

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">

  function take_snapshot() {
    
    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
      // display results in page
      document.getElementById('results').innerHTML = 
        '<img src="'+data_uri+'"/>';
    } );
  }
</script>
 <!-- Webcam.min.js -->
 <script type="text/javascript" src="{{ asset('adminlte/webcamjs/webcam.min.js')}}"></script>

<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
  });
  Webcam.attach( '#my_camera' );
</script>
<!-- A button for taking snaps -->

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">

  function take_snapshot() {
    
    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
      // display results in page
      document.getElementById('results').innerHTML = 
        '<img src="'+data_uri+'"/>';
    } );
  }
</script>
              </div>
              </div>

@endsection
