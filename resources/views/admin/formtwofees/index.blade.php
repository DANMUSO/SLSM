@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Form Two Fees Transactions</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Form Two Fees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-12">
          <div class="info-box mb-3">
            
          <div class="info-box-content">
            <div  class="btn btn-success" style="width:100%">
            <a href="{{ route('admin.formtwofees.index')}}"> <h6 style="color:white">Form Two Students
           </h6></a>
              </div>
              </span>
              <table class="table table-borderless" style="color:black">
              
              <tr>
              <th>Total Fees 250,000 KES</th>
              <th>     <a href="">Paid Fees 
              <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formtwofees");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      <?php echo $fee['SUM(amount)'].' '.'KES';?>
                       <?php }
                      ?>
              </a></th>
              <th>     <a href="">Pending Fees 60,000 KES</a></th>
              </tr> 
              
              </table>
            </div>
            
            <!-- /.info-box-content -->
          </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
       

        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    
    <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp Recent fees payment transactions</h6></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.formtwofees.create')}}" class="btn btn-primary">Make Payment</a></div></div>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <table id="example" class="table table-striped table-bordered table-hover">
     <thead style="background-color:#33e6ff;">
     <tr>
     <th>#ID</th>
     <th>Admission No</th>
     <th>Bank</th>
     <th>Receipt Number</th>
     <th>Date</th>
     <th>Amount</th>
     <th>Action</th>
     </tr>
     </thead>
     <tbody id="myTable">
     @foreach($formtwofees as $c)
     <tr>
    <td>{{ $c->id}}</td>
    <td>{{ $c->admissionno}}</td>
     <td>{{ $c->bank}}</td>
     <td>{{ $c->receiptno}}</td> 
     <td>{{ $c->created_at}}</td>
      
     <td>{{ $c->amount}}</td>    
     <td>
     <a href="{{ route('admin.formtwos.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
     <a href="{{ route('admin.formtwofees.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
     <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.formtwofees.destroy', $c->id) }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}

      <div class="form-group">
      <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
      <span class="btn btn-danger fa fa-trash-alt"></span>
      </a>                    
      </div>
      </form>
    
     </td>
     </tr>
     
     @endforeach
</tbody>
<?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formtwofees");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="4">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
     </table>
   
     </div></div></div>
     
@endsection