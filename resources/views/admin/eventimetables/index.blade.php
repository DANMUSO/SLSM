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
                  <li class="nav-item btn btn-info"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>School Events' Time table</strong></a></li>
                  
                 </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                <button><a href="{{ route('admin.eventimetables.create')}}" style="color:#fff">Add Event</a></button>
                  <div class="active tab-pane" id="activity">
                  <label>School Events' Time Table</label>
                    <div style="overflow-x:auto;">
                    <table class="a">
                     
                     <tr style="background-color:#33e6ff;">
                     <th>#ID</th>
                       <th>Date</th>
                       <th>Type of Event</th>
                       <th>Venue</th>
                       <th>Audiences</th>
                       <th>Guest</th>
                       <th>Duration</th>
                       <th>Action</th>
                     </tr>
                     @foreach($eventimetable as $timetable)
                     <tr>
                     <td>{{$timetable -> id}}</td><td>{{$timetable -> eventdaye}}</td><td>{{$timetable -> typevent}}</td><td>{{$timetable -> venue}}</td><td>{{$timetable -> audience}}</td><td>{{$timetable -> guest}}</td><td>{{$timetable -> duration}}</td>
                     <td>
                     <a href="{{ route('admin.eventimetables.edit', $timetable ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$timetable->id}}" method="POST" action="{{ route('admin.eventimetables.destroy', $timetable->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <div class="form-group">
                          <a href="javascript:void(0);" data-id="{{$timetable->id}}" class="_delete_data">
                              <span class="btn btn-danger fa fa-trash-alt"></span>
                          </a>                    
                      </div>
                      </form>
                     </td>
                     </tr>
                     @endforeach
                   </table>
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
                    <div class="tab-pane" id="timeline">
                    <label>FORM TWO TIME TABLE</label>
                    <div style="overflow-x:auto;">
                   
                  </div>
                 
                  </div>

                  <div class="tab-pane" id="others">
                  
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                  <label>FORM FOUR TIME TABLE</label>
                    <div style="overflow-x:auto;">
                    
                  </div>
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  
                  <div class="row">
                  <div class="col-md-4"></div></div>
                  <label>FORM THREE TIME TABLE</label>
                  
                      <div style="overflow-x:auto;">
                    
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
