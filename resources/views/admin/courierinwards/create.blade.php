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
                <h3 class="card-title">Add Courier Inward | Forward</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.courierinwards.store')}}">
       <div class="card-footer">
                  
                </div>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <p for="">Person Incharge Name</p>
                    <input type="text" name="name" required class="form-control"  placeholder="Person Incharge Name">
                  </div>
                  <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">Mobile Number</p>
                    <input type="text" name="phone" required class="form-control"  placeholder="Mobile Number">
                  </div>
                  <div class="col-md-4">
                    <p for="">Type of Courier</p>
                    <select type="text" name="couriertype" required class="form-control">
                    <option>Courier Inward</option>
                    <option>Courier Outward</option>
                    
                    </select>
                  </div>
                  <div class="col-md-4">
                    <p for="">Product</p>
                    <input type="text" name="product" required class="form-control"  placeholder="Product">
                  </div>
                  <div class="col-md-4">
                    <p for="">Capacity</p>
                    <input type="text" name="capacity" required class="form-control"  placeholder="Capacity">
                  </div>
                  <div class="col-md-4">
                    <p for="">Particulars</p>
                    <input type="text" name="particulars" required class="form-control"  placeholder="particulars">
                  </div>
                  <div class="col-md-4">
                    <p for="">Registered No</p>
                    <input type="text" name="registerno" required class="form-control"  placeholder="Registered No">
                  </div>
                  
                  <div class="col-md-4">
                    <p for="">Remark</p>
                    <input type="text" name="remark" required class="form-control"  placeholder="Remark">
                  </div>
                  <div class="col-md-4">
                    <p for="">Date</p>
                    <input type="date" name="receiveddate" required class="form-control"  placeholder="Receive Date">
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
