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
   $con = mysqli_connect("localhost","root","","eduerp");
   ?>
 
     <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp Recent fees payment transactions</h6></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.formonefees.create')}}" class="btn btn-primary">Make Payment</a></div></div>
    <div class="container">
                  <div class="row justify-content-center">
                  <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
                  <form role="form" method="POST" action="{{ route('admin.formonefees.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <p>Admission Number</p>     <select name="staffno" class="select2_single form-control" style="width: 100%" required="required" tabindex="-1" >
                                        <option value="0">Admission No</option>
                                        <?php
                                        $result= mysqli_query($con,"select * from formones") or die (mysqli_error());
                                        while ($row= mysqli_fetch_array ($result) ){
                                        $id=$row['id'];
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
                                        <?php } ?>
                                        </select> </div>
                                        <div class="col-md-6">
                    <p>Bank Name</p>
                    <input type="text" name="bank" required class="form-control"  placeholder="Name of Bank">
                  </div>
                </div>
     
                <div class="row">
                <div class="col-md-6">
                    <p>Amount</p>
                    <input type="text" name="amount" required class="form-control"  placeholder="Amount">
                    </div>
                    <div class="col-md-6">
                    <p>Receipt Number</p>
                    <input type="text" name="receipt" required class="form-control"  placeholder="Receipt Number">
                    </div>
                </div>
              
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
     </div></div></div>
     
@endsection