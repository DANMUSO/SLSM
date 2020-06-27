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
                <h3 class="card-title">Add staff award into database</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.awards.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <p for="">Staff number</p>     <select name="id" class="select2_single form-control" style="width: 100%" required="required" tabindex="-1" >
                                        <option value="0">Staff No</option>
                                        <?php
                                        $result= mysqli_query($con,"select * from staff") or die (mysqli_error());
                                        while ($row= mysqli_fetch_array ($result) ){
                                        $id=$row['id'];
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
                                        <?php } ?>
                                        </select> </div>
                                        <div class="col-md-6">
                    <p for="">Award Category</p>
                    <input type="text" name="category" required class="form-control"  placeholder="Award Category">
                  </div>
                </div>
     
                <div class="row">
                <div class="col-md-6">
                    <p for="">Rewarded Date</p>
                    <input type="date" name="award_date" required class="form-control"  placeholder="Rewarded date">
                    </div>
                    <div class="col-md-6">
                    <p for="">Award's Photo</p>
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
