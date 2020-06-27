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
                <h3 class="card-title">Add student's fees transaction to database</h3>
              </div> 
       <form role="form" method="POST" action="{{ route('admin.formonefees.update',$formonefee->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                
                                        <div class="col-md-6">
                    <p for="">Bank Name</p>
                    <input type="text" name="bank" value="{{ $formonefee->bank}}" required class="form-control"  placeholder="Bank Name">
                    </div>
                     
                  <div class="col-md-6">
                    <p for="">Amount</p>
                    <input type="text" name="amount" value="{{ $formonefee->amount}}" required class="form-control"  placeholder="Amount">
                  </div>
                </div>
              
                <div class="row">
                 
                  <div class="col-md-6">
                    <p for="">Receipt Number</p>
                    <input type="text" name="receiptno" value="{{ $formonefee->receiptno}}" required class="form-control"  placeholder="Receipt Number">
                  </div>
                </div>
                <div class="row">
                 
                  
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              </div>
              </div>

@endsection
