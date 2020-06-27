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
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>Full Attendance Report</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#timeline" data-toggle="tab" style="color:white"><strong>Attendance Form</strong></a></li>
                 
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
      <th>#ID</th>
      <th>Staff Number</th>
	  <th>Name</th>
	  <th>Mobile Phone</th>
      <th>Email</th>
      <th>Check In</th>
      <th>Check Out</th>
      <th>Date</th>
      <th>Action</tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($staffattendance as $attendance)
      <tr>
      <td>{{ $attendance -> id}}</td>
      <td>{{ $attendance -> staffno}}</td>
      <td>{{ $attendance -> name}}</td> 
      <td>{{ $attendance -> phone}}</td>
      <td>{{ $attendance -> email}}</td>   
      <td>{{ $attendance -> checkin}}</td> 
      <td>{{ $attendance -> checkout}}</td> 
      <td>{{ $attendance -> created_at}}</td> 
      <td>
      <a href="{{ route('admin.staffattendances.show', $attendance->id)}}" class="btn btn-success fa fa-eye"></a>
      <a href="{{ route('admin.staffattendances.edit', $attendance->id)}}" class="btn btn-primary fa fa-edit" ></a>
      <form id="delete_from_{{$attendance->id}}" method="POST" action="{{ route('admin.staffattendances.destroy', $attendance->id) }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}

      <div class="form-group">
      <a href="javascript:void(0);" data-id="{{$attendance->id}}" class="_delete_data">
      <span class="btn btn-danger fa fa-trash-alt"></span>
      </a>                    
      </div>
      </form>
      </td>
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

  
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                    
                    <label><h6>&nbsp&nbsp<strong>FULL DAY</strong> PRESENT REPORT</h6></label>
                    <div style="overflow-x:auto;">
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <input id="myInput" type="text" placeholder="Search..">
<table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
            <th>Staff's Photo</th>
            <th>Staff Number</th>
			<th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th >Check In
            </th>
            <th >Check Out
            </th>
        <th>Action</th>
        </tr>
    </thead>
   
    <tbody id="myTable">
    
      @foreach($staffs as $staff)
  
      <tr>
      <form role="form" method="POST" action="{{ route('admin.staffattendances.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <td><img src="{{ URL::to('/') }}/images/{{ $staff -> image}}" class="img-thumbnail" width="70"></td>
      <td><input type="text" style="width:120px" name="staffno" readonly value="{{$staff -> id}}"></td>
      <td><input type="text" style="width:140px" name="name" readonly value="{{$staff -> fname}} &nbsp&nbsp {{$staff -> lname}}"></td>
      <td><input type="text" style="width:140px" name="phone" readonly value="{{$staff -> phone}}"></td> 
      <td><input type="text" style="width:150px" name="email" readonly value="{{$staff -> email}}"></td> 
      <td><input type="time" name="checkin" style="width:110px"></td>   
      <td><input type="time" name="checkout" style="width:110px"></td> 
       
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
                    <label></label>
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <h6>&nbsp&nbsp<strong>FULL DAY</strong> ABSENT REPORT</h6>
    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
      <th>#IDs</th>
      <th>Admission Number</th>
			<th>Name</th>
		  <th>Mobile Phone</th>
      <th>Email</th>
      <th>Morning Status</th>
      <th>Evening Status</th>
      <th>Date</th>
        </tr>
    </thead>
   
    <tbody id="myTable">
    
      <tr>
     
      <td></td>
      <td></td>
      <td></td> 
      <td></td>
      <td></td>   
      <td></td> 
      <td></td> 
      <td></td> 
      </tr>
     
    </tbody>
</table>
   </div></div></div>
   
      </script>
  <script type="text/javascript">
  $(document).ready(function(){
$('table').DataTable();
  });
  
  </script>
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  
                  <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp<strong>FULL DAY</strong> ABSENT REPORT</h6></div>
                  <div class="col-md-4"></div></div>
                  <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <input id="myInput" type="text" placeholder="Search..">
    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
      <th>#IDs</th>
      <th>Staff Number</th>
	  <th>Name</th>
	  <th>Mobile Phone</th>
      <th>Email</th>
      <th>Check In</th>
      <th>Check Out</th>
      <th>Date</th>
      <th>Action</tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($attendancestaff as $d)
      <tr>
      <td>{{ $d -> id}}</td>
      <td>{{ $d -> staffno}}</td>
      <td>{{ $d -> name}}</td> 
      <td>{{ $d -> phone}}</td>
      <td>{{ $d -> email}}</td>   
      <td>{{ $d -> checkin}}</td> 
      <td>{{ $d -> checkout}}</td> 
      <td>{{ $d -> created_at}}</td> 
      <td>
      <a href="{{ route('admin.staffattendances.show', $d->id)}}" class="btn btn-success fa fa-eye"></a>
      <a href="{{ route('admin.staffattendances.edit', $d->id)}}" class="btn btn-primary fa fa-edit" ></a>
      <form id="delete_from_{{$d->id}}" method="POST" action="{{ route('admin.staffattendances.destroy', $d->id) }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}

      <div class="form-group">
      <a href="javascript:void(0);" data-id="{{$d->id}}" class="_delete_data">
      <span class="btn btn-danger fa fa-trash-alt"></span>
      </a>                    
      </div>
      </form>
      </td>
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
