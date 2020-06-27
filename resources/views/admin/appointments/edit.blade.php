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
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.appointments.update', $appointment -> id)}}">
       <div class="card-footer">
                  
                </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
               
                  <div class="col-md-4">
                    <p for="">Visitor's Name</p>
                    <input type="text" name="name" required value="{{$appointment->name}}" class="form-control"  placeholder="Visitor' Name">
                  </div>
                  <div class="col-md-4">
                    <p for="">Mobile Number</p>
                    <input type="text" name="phone" required value="{{$appointment->phone}}" class="form-control"  placeholder="Mobile Number">
                  </div>
                  <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required value="{{$appointment->email}}" class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">Person to See</p>
                    <input type="text" name="person" required value="{{$appointment->person}}" class="form-control"  placeholder="person">
                  </div>
                  <div class="col-md-4">
                    <p for="">Purpose</p>
                    <input type="text" name="purpose" required value="{{$appointment->purpose}}" class="form-control"  placeholder="Purpose">
                  </div>
                  <div class="col-md-4">
                    <p for="">Appointment Time</p>
                    <input type="time" name="atime" required value="{{$appointment->atime}}" class="form-control"  placeholder="Appointment Time">
                  </div>
                  <div class="col-md-4">
                    <p for="">Appointment Date</p>
                    <input type="date" name="adate" required value="{{$appointment->adate}}" class="form-control"  placeholder="Appointment Date">
                  </div>
                </div>
     
              
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              </div>

@endsection
