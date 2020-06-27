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
                <h3 class="card-title">Update Enquiry</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.enquiries.update', $enquiry -> id)}}">
       <div class="card-footer">
       {{ method_field('PATCH')}}
                </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
               
                  <div class="col-md-4">
                    <p for="">Type of Enquiry</p>
                    <select type="text" name="enquirytype" required class="form-control">
                    <option>{{$enquiry->enquirytype}}</option>
                    <option>Call</option>
                    <option>Email</option>
                    <option>Physical Enquiry</option>
                    <select>
                  </div>
                  <div class="col-md-4">
                    <p for="">Enquiry</p>
                    <select type="text" name="enquiry" required class="form-control">
                    <option>{{$enquiry->enquiry}}</option>
                    <option>Other</option>
                    <option>Admission Enquiry</option>
                    <option>Syllabus</option>
                    <option>Medical Enquiry</option>
                    <select>
                  </div>
                  <div class="col-md-4">
                    <p for="">Type of Person</p>
                    <select type="text" name="person" required class="form-control">
                    <option>{{$enquiry->person}}</option>
                    <option>Student</option>
                    <option>Parent</option>
                    <option>Guardian</option>
                    <option>Other</option>
                    <select>
                  </div>
                  <div class="col-md-4">
                    <p for="">Client Name</p>
                    <input type="text" name="clientname" value="{{$enquiry->clientname}}" required class="form-control"  placeholder="Client Name">
                  </div>
                  <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required value="{{$enquiry->email}}" class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">Mobile Number</p>
                    <input type="text" name="phone" value="{{$enquiry->phone}}" required class="form-control"  placeholder="Mobile Number">
                  </div>
                  <div class="col-md-4">
                    <p for="">Purpose</p>
                    <input type="text" name="remark" {{$enquiry->remark}} required class="form-control"  placeholder="Purpose">
                  </div>
                  <div class="col-md-4">
                    <p for="">Appointment Time</p>
                    <input type="time" name="followtime" value="{{$enquiry->followtime}}" required class="form-control"  placeholder="Appointment Time">
                  </div>
                  <div class="col-md-4">
                    <p for="">Appointment Date</p>
                    <input type="date" name="followdate" value="{{$enquiry->followdate}}" required class="form-control"  placeholder="Appointment Date">
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
