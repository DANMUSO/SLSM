@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Examination</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Examination</li>
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
           <h6 style="color:white">School Examinations
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
      <div class="row"><div class="col-md-6"><h6>&nbsp&nbspList of Examinations</h6></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.examinations.create')}}" class="btn btn-primary">Add Exam</a></div></div>
    <div style="overflow-x:auto;">
                      <table id="example" class="table display nowrap">
                      <thead style="background-color:#33e6ff;">
                      <tr>
                      <th>ID</th>
                      <th>Type of Examination</th>
                      <th>Classes</th>
                      <th>Supervisor</th>
                      <th>Exam Venue</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th colspan="2">Action</th>
                  
                      </tr>
                      </thead>
                      <tbody id="myTable">
                     @foreach($examinations as $exam)
                     <tr>
                      <td>{{ $exam -> id}}</td>
                      <td>{{ $exam -> exam}}</td>
                      <td>{{ $exam -> classes}}</td>
                      <td>{{ $exam -> Supervisor}}</td>
                      <td>{{ $exam -> venue}}</td>
                      <td>{{ $exam -> sdate}}</td>
                      <td>{{ $exam -> edate}}</td>
                      <td>
                     <a href="{{ route('admin.examinations.edit', $exam ->id)}}" class="btn btn-primary fa fa-edit" >
                     </a>
                     <form id="delete_from_{{$exam->id}}" method="POST" action="{{ route('admin.examinations.destroy', $exam->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <div class="form-group">
                          <a href="javascript:void(0);" data-id="{{$exam->id}}" class="_delete_data">
                              <span class="btn btn-danger fa fa-trash-alt"></span>
                          </a>                    
                      </div>
                      </form>
                     </td>
                      </tr>
                      @endforeach
                      </tbody>
                      </table>
                   </div>
    </section>
   
                   
@endsection