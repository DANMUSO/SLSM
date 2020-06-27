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
                <h3 class="card-title">Add Lesson</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.eventimetables.store')}}">
       <div class="card-footer">
                  
                </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <p for="">Date</p>
                    <input type="date" value="{{ $eventimetable -> date}}" name="eventdate" required class="form-control">
                  </div>
                  <div class="col-md-4">
                    <p for="">Type of Event</p>
                    <input type="text" value="{{ $eventimetable -> typevent}}" name="typevent" required class="form-control"  placeholder="Type of Event">
                  </div>
                  <div class="col-md-4">
                    <p for="">Venue</p>
                    <input type="text" name="venue" value="{{ $eventimetable -> venue}}"  required class="form-control"  placeholder="Venue">
                  </div>
                  <div class="col-md-4">
                    <p for="">Audiences</p>
                    <input type="text" name="audience" value="{{ $eventimetable -> audience}}"  required class="form-control"  placeholder="Audiences">
                  </div>
                  <div class="col-md-4">
                    <p for="">Guest</p>
                    <input type="text" name="guest"  value="{{ $eventimetable -> guest}}" required class="form-control"  placeholder="Guest">
                  </div>
                  <div class="col-md-4">
                    <p for="">Duration</p>
                    <input type="text" name="duration" value="{{ $eventimetable -> duration}}"  required class="form-control"  placeholder="Duration">
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
