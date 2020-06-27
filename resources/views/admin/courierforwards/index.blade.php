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
             
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                   <label>List of Courier-Forwards</label>
                    <div class="row"><div class="col-md-6"></div>
        <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.courierforwards.create')}}" class="btn btn-primary">Add Courier forward</a></div></div>
                    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
            <th>#ID</th>
            <th>Name</th>
			<th>Phone</th>
            <th>Email</th>
            <th>Received</th>
            <th>Registerd No</th>
            <th>Capacity</th>
            <th>particulars</th>
            <th>Remarks</th>
        <th>Action</th>
        </tr>
    </thead>
   
    <tbody id="myTable">
   
  
    
      @foreach($courierforwards as $courierforward)    
      <tr>       
      <td>{{$courierforward ->id}}</td>
      <td>{{$courierforward ->name}}</td>
      <td>{{$courierforward ->phone}}</td> 
      <td>{{$courierforward ->email}}</td>
      <td>{{$courierforward ->product}}</td>
      <td>{{$courierforward ->receiveddate}}</td>   
      <td>{{$courierforward ->registerno}}</td> 
      <td>{{$courierforward ->capacity}}</td> 
      <td>{{$courierforward ->particulars}}</td>
      <td>{{$courierforward ->remark}}</td>
      <td>
                     <a href="{{ route('admin.courierforwards.edit', $courierforward ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$courierforward->id}}" method="POST" action="{{ route('admin.courierforwards.destroy', $courierforward->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <div class="form-group">
                          <a href="javascript:void(0);" data-id="{{$courierforward->id}}" class="_delete_data">
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
