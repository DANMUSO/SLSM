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
                <h3 class="card-title">Add staff institution into database</h3>
                 </div> 
                 <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.institutions.store')}}">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <div class="card-body">
                 <div class="row">
                 <div class="col-md-6">
                 <p for="">Type of Premise</p>
                 <input type="text" name="type" required class="form-control"  placeholder="Type Premise">
                 </div>
                 <div class="col-md-6">
                 <p for="">Number of Premises</p>
                 <input type="text" name="premise" required class="form-control"  placeholder="Number of Premises">
                 </div>
                 </div>
     
                 <div class="row">
                 <div class="col-md-6">
                 <p for="">Capacity of each Premise</p>
                 <input type="text" name="capacity" required class="form-control"  placeholder="Capacity of each Premises">
                 </div>
                 <div class="col-md-6">
                 <p for="">Available Resource</p>
                 <input type="text" name="resources" required class="form-control"  placeholder="Available Resources">
                 </div>
                 </div>
                 <div class="row"> <div class="col-md-6">
                 <p for="">Required Resources</p>
                 <input type="text" name="required" required class="form-control"  placeholder="Required Resources">
                 </div>
                 <div class="col-md-6">
                 <p for="">institution's Photo</p>
                 <input type="file" name="image" required class="form-control"  placeholder="staff's Photo">
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
