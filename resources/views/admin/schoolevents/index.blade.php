@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">School institutions</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">institution</li>
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
            <div  class="btn btn-primary" style="width:100%">
           <h6 style="color:white">List of School's Events
           </h6>
              </div>
            
            </div>
            
            <!-- /.info-box-content -->
          </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
       

        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
      <div class="row"><div class="col-md-6"><h6>&nbsp&nbspList of School's Events</h6></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.schoolevents.create')}}" class="btn btn-primary">Add Event</a></div></div>
    <div style="overflow-x:auto;">
                  
                      <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    
<table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
      <th>#ID</th>
      <th>Type of Events</th>
	  <th>Venue</th>
	  <th>Start-Date</th>
      <th>End-Date</th>
      <th>Participants</th>
      <th>Number of Participants</th>
      <th>Duration</th>
      <th>Resources</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody id="myTable">
      
        @foreach($events as $c)
      <tr>
      <td>{{ $c->id}}</td>
     
      <td>{{ $c->typevent}}</td> 
      <td>{{ $c->venue}}</td> 
    
      <td>{{ $c->startdate}}</td>
      <td>{{ $c->endate}}
      <td>{{$c->participants}}</td>
      <td>{{$c->numberp}}</td>
      <td>{{ $c->duration}}</td> 
      <td>{{ $c->resources}}</td>    
      <td>
      <a href="{{ route('admin.staffs.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
      <a href="{{ route('admin.schoolevents.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
      <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.staffs.destroy', $c->id) }}">
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
</table>
   </div></div></div>
      </script>
  <script type="text/javascript">
  $(document).ready(function(){
$('table').DataTable();
  });
  
  </script>
                   </div>
                   
    </section>
   
                   
@endsection