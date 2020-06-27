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
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>Edit Staff Attendance Report</strong></a></li>
                 
                 </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                    <center> <p>Fees Statement</p></center>
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
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
     <tr>
      <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.staffattendances.update', $staffattendance->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
      <td><input type="text" style="width:120px" name="staffno" readonly value="{{$staffattendance -> staffno}}"></td>
      <td><input type="text" style="width:140px" name="name" readonly value="{{$staffattendance -> name}}"></td>
      <td><input type="text" style="width:140px" name="phone" readonly value="{{$staffattendance -> phone}}"></td> 
      <td><input type="text" style="width:150px" name="email" readonly value="{{$staffattendance -> email}}"></td> 
      <td><input type="time" name="checkin" value="{{$staffattendance -> checkin}}" style="width:110px"></td>   
      <td><input type="time" name="checkout" value="{{$staffattendance -> checkout}}" style="width:110px"></td> 
       
      <td><button>Save</button></td>
      </form>
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
   
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
                    
                    <p><h6>&nbsp&nbsp<strong>FULL DAY</strong> PRESENT REPORT</h6></p>
                    <div style="overflow-x:auto;">
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <input id="myInput" type="text" placeholder="Search..">

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
                    <p></p>
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <h6>&nbsp&nbsp<strong>FULL DAY</strong> ABSENT REPORT</h6>
   
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
