@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">institutions</h6>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">institutions</li>
            </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
             </div><!-- /.container-fluid -->
             </div>
                <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Edit Premise details</h3>
                </div> 
                <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.institutions.update',$institution->id)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                <p for="">Type of Premise</p>
                <input type="text" name="type" value="{{ $institution->type}}" class="form-control">
                </div>
                <div class="col-md-6">
                <p for="">Number of Premise</p>
                <input type="text" name="premise" value="{{ $institution->premise}}" class="form-control">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <p for="">Capacity of each Premise</p>
                <input type="text" name="capacity" value="{{ $institution->capacity}}" class="form-control">
                </div>
                <div class="col-md-6">
                <p for="">Available Resources</p>
                <input type="text" name="resources" value="{{ $institution->resources}}" class="form-control">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <p for="">Required Resources</p>
                <input type="text" name="required" value="{{ $institution->required}}" class="form-control">
                </div>
                <div class="col-md-6">
                <p for="">Premise's photo</p>
                <input type="file" name="image" class="form-control">
                <img src="{{ URL::to('/') }}/images/{{$institution -> image}}" class="img-thumbnail" width="75">
                <input type="hidden" name="hidden_image" value="{{ $institution->image}}"> 
                </div>
                </div>
                
                <!-- /.card-body -->
                <br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
              </div>
              </div>
              </div>

@endsection
