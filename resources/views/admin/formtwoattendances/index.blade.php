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
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>Call Register Form</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#timeline" data-toggle="tab" style="color:white"><strong>Full-Day Present Report </strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#settings" data-toggle="tab" style="color:white"><strong>Full-Day Absent Report</strong></a></li>
                 
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
      <form role="form" method="POST" action="{{ route('admin.formtwoattendances.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <td><img src="{{ URL::to('/') }}/images/{{ $student -> image}}" class="img-thumbnail" width="70"></td>
      <td><input type="text" style="width:80px" name="student_id" readonly value="{{$student -> id}}"></td>
      <td><input type="text" style="width:140px" name="name" readonly value="{{$student -> fname}} &nbsp&nbsp {{$student -> lname}}">
      <input type="hidden" style="width:140px" name="phone" readonly value="{{$student -> phone}}"></td> 
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
    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
      <th>#ID</th>
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
    
      @foreach($present as $presence)
  
      <tr>
     
      <td>{{$presence -> id}}</td>
      <td>{{$presence -> student_id}}</td>
      <td>{{$presence -> name}}</td> 
      <td>{{$presence -> phone}}</td>
      <td>{{$presence -> email}}</td>   
      <td>{{$presence -> morning}}</td> 
      <td>{{$presence -> evening}}</td> 
      <td>{{$presence -> created_at}}</td> 
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
      <th>#ID</th>
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
    
      @foreach($absent as $absence)
  
      <tr>
     
      <td>{{$absence -> id}}</td>
      <td>{{$absence -> student_id}}</td>
      <td>{{$absence -> name}}</td> 
      <td>{{$absence -> phone}}</td>
      <td>{{$absence -> email}}</td>   
      <td>{{$absence -> morning}}</td> 
      <td>{{$absence -> evening}}</td> 
      <td>{{$absence -> created_at}}</td> 
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
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  
                  <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp<strong>FULL DAY</strong> ABSENT REPORT</h6></div>
                  <div class="col-md-4"></div></div>
                  <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
      <th>#ID</th>
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
    
      @foreach($absent as $absence)
  
      <tr>
     
      <td>{{$absence -> id}}</td>
      <td>{{$absence -> student_id}}</td>
      <td>{{$absence -> name}}</td> 
      <td>{{$absence -> phone}}</td>
      <td>{{$absence -> email}}</td>   
      <td>{{$absence -> morning}}</td> 
      <td>{{$absence -> evening}}</td> 
      <td>{{$absence -> created_at}}</td> 
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
