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
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.academictimetables.store')}}">
       <div class="card-footer">
                  
                </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                 <div class="col-md-2">
                    <p for="">Level</p>
                   <select class="form-control" name="level">
                   <option>Form One</option>
                   <option>Form Two</option>
                   <option>Form Three</option>
                   <option>Form Four</option>
                   </select>
                  </div>
                  <div class="col-md-2">
                    <p for="">Day</p>
                   <select class="form-control" name="day">
                   <option>Monday</option>
                   <option>Tuesday</option>
                   <option>Wednesday</option>
                   <option>Thursday</option>
                   <option>Friday</option>
                   </select>
                  </div>
                  <div class="col-md-2">
                    <p for="">First Lesson</p>
                    <input type="text" name="lessontwo" required class="form-control"  placeholder="First Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Second Lesson</p>
                    <input type="text" name="lessonthree" required class="form-control"  placeholder="Second Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Third Lesson</p>
                    <input type="text" name="lessonfive" required class="form-control"  placeholder="Third Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Fourth Lesson</p>
                    <input type="text" name="lessonsix" required class="form-control"  placeholder="Fourth Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Fifth Lesson</p>
                    <input type="text" name="lessoneight" required class="form-control"  placeholder="Fifth Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Sixth Lesson</p>
                    <input type="text" name="lessonnine" required class="form-control"  placeholder="Sixth Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Seventh Lesson</p>
                    <input type="text" name="lessoneleven" required class="form-control"  placeholder="Seventh Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Eighth Lesson</p>
                    <input type="text" name="lessontwelve" required class="form-control"  placeholder="Eighth Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Nineth Lesson</p>
                    <input type="text" name="lessonthirteen" required class="form-control"  placeholder="Nineth Lesson">
                  </div>
                  <div class="col-md-2">
                    <p for="">Tenth Lesson</p>
                    <input type="text" name="lessonfourteen" required class="form-control"  placeholder="Tenth Lesson">
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
