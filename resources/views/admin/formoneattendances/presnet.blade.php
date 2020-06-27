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
              
              
             
                <div style="overflow-x:auto;" class="col-md-12">
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
            <th>Studnet's Photo</th>
            <th>Admission Number</th>
			<th>Name</th>
			<th>Mobile Number</th>
		
            <th colspan="2">Morning
            <br>Present &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp Absent</th>
            <th colspan="2">Evening
            <br>
            Present &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp Absent</th>
        <th>Action</th>
        </tr>
    </thead>
   
    <tbody id="myTable">
    
      @foreach($students as $student)
  
      <tr>
      <form role="form" method="POST" action="{{ route('admin.formoneattendances.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <td><img src="{{ URL::to('/') }}/images/{{ $student -> image}}" class="img-thumbnail" width="70"></td>
      <td><input type="text" style="width:80px" name="student_id" readonly value="{{$student -> id}}"></td>
      <td><input type="text" style="width:140px" name="name" readonly value="{{$student -> fname}} &nbsp&nbsp {{$student -> lname}}"></td> 
      <td><input type="text" style="width:140px" name="phone" readonly value="{{$student -> phone}}"></td> 
      <td><input type="hidden"  name="email" readonly value="{{$student -> email}}">
      <input type="checkbox" name="morning" style="width:15px" value="Present"></td>
      <td><input type="checkbox" name="morning" style="width:15px" value="Absent"></td>   
      <td><input type="checkbox" name="evening" style="width:15px" value="Present"></td> 
      <td><input type="checkbox" name="evening" style="width:15px" value="Absent"></td> 
      <td><button>Save</button></td>
</form>
      </tr>
     
     @endforeach
   
    </tbody>
</table>
   </div></div></div>
   
      </script>
  <script type="text/javascript">
  $(document).ready(function(){
$('table').DataTable();
  });
  
  </script>

<table id="user_table" class="display nowrap">
   
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
   </table>
  
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
                    <form enctype="multipart/form-data" role="form" method="POST" action="">
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
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                    <label>Next of Kin One</label>
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
                    <input type="text" class="form-control" value="{{ $c->phone}}" name="mobile" id="exampleInputPassword1" placeholder="Receipt Number">
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
          
     
     </div>

@endsection
