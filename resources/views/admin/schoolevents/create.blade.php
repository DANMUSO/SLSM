@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">School Events</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">School Events</li>
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
                <h3 class="card-title">Add School Event into database</h3>
                 </div> 
                 <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.schoolevents.store')}}">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <div class="card-body">
                 <div class="row">
                 <div class="col-md-3">
                 <p for="">Type of Event</p>
                 <select name="typevent" required class="form-control">
                 <option>Conferences</option>
                 <option>Contests</option>
                 <option>Drama Festivals</option>
                 <option>Graduation Ceremonies</option>
                 <option>High School Parties/Funkies</option>
                 <option>Music Festivals</option>
                 <option>Open Day</option>
                 <option>Parents Day</option>
                 <option>Speech Day</option>
                 <option>Sports Day</option>
                 <option>Symposium</option>
                 <option>Workshop</option>
                 <option>Mr and Miss</option>
                 <option>Freshers Night</option>
                 <option>Science Congress</option>
                 <option>Student Elections</option>
                 </select>
                 </div>
                 <div class="col-md-3">
                 <p for="">Venue</p>
                 <input type="text" name="venue" required class="form-control">
                 </div>
                 
                 <div class="col-md-3">
                 <p for="">Starting-Date</p>
                 <input type="date" name="startdate" required class="form-control"  placeholder="Starting Date">
                 </div>
                 <div class="col-md-3">
                 <p for="">Ending-Date</p>
                 <input type="date" name="endate" required class="form-control"  placeholder="Ending Date">
                 </div>
                 <div class="col-md-3">
                 <p for="">Participants</p>
                 <input type="text" name="participants" required class="form-control"  placeholder="Participants">
                 </div>
                 <div class="col-md-3">
                 <p for="">Number of Participants</p>
                 <input type="text" name="numberp" required class="form-control"  placeholder="Number of Participants">
                 </div>
                 <div class="col-md-3">
                 <p for="">Duration</p>
                 <input type="text" name="duration" required class="form-control"  placeholder="Duration">
                 </div>
                 <div class="col-md-3">
                 <p for="">Required Resources</p>
                 <textarea name="resources" required class="form-control">
                 </textarea>
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
