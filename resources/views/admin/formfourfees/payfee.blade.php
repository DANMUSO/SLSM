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
<div class="card card-primary card-outline">
              <div class="card-body box-profile">
              <div class="row">
              
                <div class="text-center" class="col-md-2">
               
                <br>
                @foreach($details as $c)
             
                <div class="text-center">
                <img src="{{ URL::to('/') }}/images/{{ $c -> image}}" class="img-thumbnail" width="100">
                </div>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> Name: {{  $c->fname}} &nbsp{{  $c->lname}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong> Admission Numer: {{  $c->id}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>Mobile number: {{  $c->phone}}</strong> 
                  </li>
                  <li class="list-group-item">
                  <strong>Email: {{  $c->email}}</strong> 
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b></b></a>
              </div>
              
                @endforeach
                <div style="overflow-x:auto;" class="col-md-9">
                <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item btn btn-info"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>Fees Statement</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#timeline" data-toggle="tab" style="color:white"><strong>Bank Receipt</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-success"><a class="nav-link" href="#settings" data-toggle="tab" style="color:white"><strong>M-PESA</strong></a></li>
                 
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-warning"><a class="nav-link" href="#parent" data-toggle="tab" style="color:white"><strong>Airtel Money</strong></a></li>
                  
                 </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                    <center> <label>Fees Statement</label></center>
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    
   <table id="example" class="display nowrap">
   
    <thead style="background-color:#33e6ff;">
        <tr>
        <th>Student's No</th>
        <th>Ref No</th>
                      
        <th>Paid Amount</th>
        <th>Total Amount</th>
        <th>Balance</th>
        <th>Date</th>
      <th>Action</th>
        </tr>
    </thead>
    <tbody id="myTable">
      
    @foreach($amount as $c)
      <tr>
      <td>{{$c -> id}}</td>
                      
                      <td>{{$c -> receiptno}}</td>
                      <td>{{$c -> amount}}</td>
                      <td></td>
                      <td></td>
                      <td></td>  
      <td>
      <a href="" class="btn btn-success fa fa-eye"></a>
     
      <a href="" class="btn btn-primary fa fa-edit" ></a>
      <form id="" method="POST" action="">
     
      <div class="form-group">
      <a href="javascript:void(0);" data-id="" class="_delete_data">
      <span class="btn btn-danger fa fa-trash-alt"></span>
      </a>                    
      </div>
      </form>
      </td>
      </tr>
      @endforeach
    </tbody>
    
    <tr>
                   <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formfourfees WHERE id='43434455'");
                      while ($f=mysqli_fetch_assoc($sum))
                      {
                         $paidamount=$f['SUM(amount)'];
                       ?>
                      
                       
                     <td colspan="2">Total Amount</td>
                      <td><?php echo $f['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      
                       <?php }

                      ?>
                   <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings WHERE form='Form One'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       
                 
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                       <td><?php 
                       $balance = $amount-$paidamount;
                        echo $balance;
                       ?></td>
                      
                      
                       <?php }

                      ?>
                      </tr>
</table>
   </div></div></div>
   
      </script>
  <script type="text/javascript">
  $(document).ready(function(){
$('table').DataTable();
  });
  
  </script>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                    <label>Bank receipt</label>
                    <div style="overflow-x:auto;">
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.formfourfees.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Student Admission No</label>
                    <input type="text" value="{{ $c->id}}"  name="admissionno" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Receipt Number</label>
                    <input type="text" class="form-control" name="receiptno" id="exampleInputPassword1" placeholder="Receipt Number">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Name of the Bank</label>
                    <input type="text" class="form-control" name="bank" id="exampleInputPassword1" placeholder="Name of the Bank">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Paid Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Paid Amount">
                    </div>
                   
                    </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                    <script>

                    $('#example').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );
                  </script>
                  </div>
                 
                  </div>

                  <div class="tab-pane" id="others">
                  <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.formfourfees.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Student Admission No</label>
                    <input type="text" value="{{ $c->id}}"  name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Receipt Number</label>
                    <input type="text" class="form-control" name="receiptno" id="exampleInputPassword1" placeholder="Receipt Number">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Name of the Bank</label>
                    <input type="text" class="form-control" name="bank" id="exampleInputPassword1" placeholder="Name of the Bank">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Paid Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Paid Amount">
                    </div>
                   
                    </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                    <label>Airtel Money</label>
                    <div style="overflow-x:auto;">
                    <form enctype="multipart/form-data" role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    @foreach($details as $c)
                    <input type="text" class="form-control" value="{{ $c->phone}}" name="phone" id="exampleInputPassword1" placeholder="Receipt Number">
                     @endforeach
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Paid Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Paid Amount">
                    </div>
                   
                    </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                    </form>
                  </div>
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  
                  <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp<strong>M-PESA</strong> Payment Method</h6></div>
                  <div class="col-md-4"></div></div>
    
                  
                      <div style="overflow-x:auto;">
                      <form enctype="multipart/form-data" role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    @foreach($details as $c)
                    <input type="text" class="form-control" value="{{ $c->phone}}" name="phone" id="exampleInputPassword1" placeholder="Receipt Number">
                     @endforeach
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Paid Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Paid Amount">
                    </div>
                   
                    </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
                
               </div>
               </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <center><label>Fees Structure</label></center>
    <table class="table table-striped table-bordered table-hover">
     <thead style="background-color:#33e6ff;">
     <tr>
     
     <th>ID</th>
     <th>Fees Category</th>
     <th>Form</th>
     <th>Term</th>
     <th>Amount</th>
     <th>Deadline</th>
     </tr>
     </thead>
     <tbody id="myTable">
     @foreach($fees as $c)
     <tr>
    <td>{{ $c->id}}</td>
   
     <td>{{ $c->category}}</td>
     <td>{{ $c->form}}</td> 
     <td>{{ $c->term}}</td>
     <td>{{ $c->amount}}</td>
     <td>{{ $c->deadline}}</td>
   
     </tr>
     
     @endforeach
</tbody>
<?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings WHERE form='Form One'");
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
     </script>
  <script type="text/javascript">
  $(document).ready(function(){
$('table').DataTable();
  });
  
  </script>
     </div></div></div>
     
     </div>

@endsection
