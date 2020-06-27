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
                  <li class="nav-item btn btn-info"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>FORM ONE TIME TABLE</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#timeline" data-toggle="tab" style="color:white"><strong>FORM TWO TIME TABLE</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-success"><a class="nav-link" href="#settings" data-toggle="tab" style="color:white"><strong>FORM THREE TIME TABLE</strong></a></li>
                 
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-warning"><a class="nav-link" href="#parent" data-toggle="tab" style="color:white"><strong>FORM FOUR TIME TABLE</strong></a></li>
                  
                 </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                <button><a href="{{ route('admin.academictimetables.create')}}" style="color:#fff">Add Lesson</a></button>
                  <div class="active tab-pane" id="activity">
                  <label>FORM ONE TIME TABLE</label>
                    <div style="overflow-x:auto;">
                    <table class="a">
                     
                     <tr style="background-color:#33e6ff;">
                     <th>#ID</th>
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                       <th>Action</th>
                     </tr>
                     @foreach($formone as $timetable)
                     <tr>
                     <td>{{ $timetable -> id}}</td><th>{{ $timetable -> day}}</th><td>{{ $timetable -> lessontwo}}</td><td>{{ $timetable -> lessonthree}}</td><td>{{ $timetable -> lessonfive}}</td><td>{{ $timetable -> lessonsix}}</td><td>{{ $timetable -> lessoneight}}</td><td>{{ $timetable -> lessonnine}}</td><td>{{ $timetable -> lessoneleven}}</td><td>{{ $timetable -> lessontwelve}}</td><td>{{ $timetable -> lessonthirteen}}</td>
                     <td>
                     <a href="{{ route('admin.academictimetables.edit', $timetable ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$timetable->id}}" method="POST" action="{{ route('admin.academictimetables.destroy', $timetable->id) }}">
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
                    <table class="a">
                     
                     <tr style="background-color:#33e6ff;">
                     <th>#ID</th>
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                         <th>Action</th>
                     </tr>
                     @foreach($formtwo as $timetable)
                     <tr>
                     <td>{{ $timetable -> id}}</td><th>{{ $timetable -> day}}</th><td>{{ $timetable -> lessontwo}}</td><td>{{ $timetable -> lessonthree}}</td><td>{{ $timetable -> lessonfive}}</td><td>{{ $timetable -> lessonsix}}</td><td>{{ $timetable -> lessoneight}}</td><td>{{ $timetable -> lessonnine}}</td><td>{{ $timetable -> lessoneleven}}</td><td>{{ $timetable -> lessontwelve}}</td><td>{{ $timetable -> lessonthirteen}}</td>
                     <td>
                     <a href="{{ route('admin.academictimetables.edit', $timetable ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$timetable->id}}" method="POST" action="{{ route('admin.academictimetables.destroy', $timetable->id) }}">
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

                  <div class="tab-pane" id="others">
                  <table class="a">
                     
                     <tr style="background-color:#33e6ff;">
                     <th>#ID</th>
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                       <th>Action</th>
                     </tr>
                     @foreach($formone as $timetable)
                     <tr>
                     <td>{{ $timetable -> id}}</td><th>{{ $timetable -> day}}</th><td>{{ $timetable -> lessontwo}}</td><td>{{ $timetable -> lessonthree}}</td><td>{{ $timetable -> lessonfive}}</td><td>{{ $timetable -> lessonsix}}</td><td>{{ $timetable -> lessoneight}}</td><td>{{ $timetable -> lessonnine}}</td><td>{{ $timetable -> lessoneleven}}</td><td>{{ $timetable -> lessontwelve}}</td><td>{{ $timetable -> lessonthirteen}}</td>
                     <td>
                     <a href="{{ route('admin.academictimetables.edit', $timetable ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$timetable->id}}" method="POST" action="{{ route('admin.academictimetables.destroy', $timetable->id) }}">
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
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                  <label>FORM FOUR TIME TABLE</label>
                    <div style="overflow-x:auto;">
                    <table class="a">
                     
                     <tr style="background-color:#33e6ff;">
                     <th>#ID</th>
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                       <th>Action</th>
                     </tr>
                     @foreach($formfour as $timetable)
                     <tr>
                     <td>{{ $timetable -> id}}</td><th>{{ $timetable -> day}}</th><td>{{ $timetable -> lessontwo}}</td><td>{{ $timetable -> lessonthree}}</td><td>{{ $timetable -> lessonfive}}</td><td>{{ $timetable -> lessonsix}}</td><td>{{ $timetable -> lessoneight}}</td><td>{{ $timetable -> lessonnine}}</td><td>{{ $timetable -> lessoneleven}}</td><td>{{ $timetable -> lessontwelve}}</td><td>{{ $timetable -> lessonthirteen}}</td>
                     <td>
                     <a href="{{ route('admin.academictimetables.edit', $timetable ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$timetable->id}}" method="POST" action="{{ route('admin.academictimetables.destroy', $timetable->id) }}">
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
                  </div>
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  
                  <div class="row">
                  <div class="col-md-4"></div></div>
                  <label>FORM THREE TIME TABLE</label>
                  
                      <div style="overflow-x:auto;">
                      <table class="a">
                     
                     <tr style="background-color:#33e6ff;">
                     <th>#ID</th>
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                       <th>Action</th>
                     </tr>
                     @foreach($formthree as $timetable)
                     <tr>
                     <td>{{ $timetable -> id}}</td><th>{{ $timetable -> day}}</th><td>{{ $timetable -> lessontwo}}</td><td>{{ $timetable -> lessonthree}}</td><td>{{ $timetable -> lessonfive}}</td><td>{{ $timetable -> lessonsix}}</td><td>{{ $timetable -> lessoneight}}</td><td>{{ $timetable -> lessonnine}}</td><td>{{ $timetable -> lessoneleven}}</td><td>{{ $timetable -> lessontwelve}}</td><td>{{ $timetable -> lessonthirteen}}</td>
                     <td>
                     <a href="{{ route('admin.academictimetables.edit', $timetable ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$timetable->id}}" method="POST" action="{{ route('admin.academictimetables.destroy', $timetable->id) }}">
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
