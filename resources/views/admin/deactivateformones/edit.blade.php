@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">staffs</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">staffs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add staffs to database</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                  <p for="">First Name</p>
                    <input type="text" name="fname" required class="form-control"  value="">
                  </div>
                  <div class="col-md-6">
                  <p for="">Last Name</p>
                    <input type="text" name="lname" required class="form-control"  value="">
                    </div>
                </div>
                <div class="row">
                  
                  <div class="col-md-6">
                  <p for="">Mobile Number</p>
                    <input type="text" name="phone" required class="form-control"  value="">
                    </div>
                    <div class="col-md-6">
                    <p for="">Email</p>
                    <input type="text" name="email" required class="form-control"  value="">
                    </div>
                </div>
                <div class="row">
                  
                  <div class="col-md-6">
                    <p for="">Rank</p>
                    <input type="text" name="rank" required class="form-control"  value="">
                  </div>
                  <div class="col-md-6">
                    <p for="">Department</p>
                    <input type="text" name="department" required class="form-control"  value="">
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-md-6">
                    <p for="">Employment Mode</p>
                    <input type="text" name="mode" required class="form-control"  value="">
                    </div>
                    <div class="col-md-6">
                    <p for="">staff's Photo</p>
                    <input type="file" name="image" class="form-control">
                    <img src="" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $staff->image}}"> 
                    </div>
                </div>
               
                <!-- /.card-body -->
<br>
                <div class="card-footer">
                  <button type="submit" id="btnresult" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
