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
           <h6 style="color:white">Institution Premises and Resources
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
      <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp Institution Premises and Resources</h6></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.institutions.create')}}" class="btn btn-primary">Add premise</a></div></div>
    <div style="overflow-x:auto;">
                      <table id="example" class="table display nowrap">
                      <thead>
                      <tr>
                      <th>ID</th>
                      <th>Premise Photo</th>
                      <th>Capacity</th>
                      <th>Available Resources</th>
                      <th>Required Resources</th>
                      <th>Created Date</th>
                    
                      <th colspan="2">Action</th>
                  
                      </tr>
                      </thead>
                      <tbody id="myTable">
                     @foreach($institutions as $institution)
                     <tr>
                      <td>{{ $institution -> id}}</td>
                      <td><img src="{{ URL::to('/') }}/images/{{ $institution -> image}}" class="img-thumbnail" width="90"></td>
                      <td>{{ $institution -> premise}}</td>
                      <td>{{ $institution -> capacity}}</td>
                      <td>{{ $institution -> resources}}</td>
                      <td>{{ $institution -> required}}</td>
                      
                      <td>
                     <a href="" class="btn btn-success fa fa-eye"></a>
                     <a href="{{ route('admin.institutions.edit',$institution->id)}}" class="btn btn-primary fa fa-edit" ></a>
                     <form id="delete_from_{{$institution->id}}" method="POST" action="{{ route('admin.institutions.destroy', $institution->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <div class="form-group">
                          <a href="javascript:void(0);" data-id="{{$institution->id}}" class="_delete_data">
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