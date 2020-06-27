@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Fees Settings</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Fees Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Fees Category into database</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.feesettings.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <p for="">Fees Category</p>
                    <select name="category" required class="form-control">
                    <option>Tuition Fees</option>
                    <option>Exam Fees</option>
                    <option>Transport Fees</option>
                    <option>Sport Fees</option>
                    <option>Health Fees</option>
                    <option>Scout Fees</option>
                    <option>Library Fees</option>
                    <option>Internet Fees</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <p for="">Form</p>
                    <select name="form" required class="form-control">
                    <option>Form One</option>
                    <option>Form Two</option>
                    <option>Form Three</option>
                    <option>Form Four</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <p for="">Term</p>
                    <select name="term" required class="form-control">
                    <option>Term One</option>
                    <option>Term Two</option>
                    <option>Term Three</option>
                    </select>
                    </div>
                  <div class="col-md-6">
                  <p for="">Amount</p>
                    <input type="text" name="amount" required class="form-control"  placeholder="Amount">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p for="">Deadline</p>
                    <input type="date" name="deadline" required class="form-control"  placeholder="Driver">
                    </div>
                    
                </div>
                
                <!-- /.card-body -->
                <br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
               </div>
               </div>
@endsection
