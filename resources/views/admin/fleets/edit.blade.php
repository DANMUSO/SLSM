@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Fleets</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Fleets</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Fleets to database</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.fleets.update',$fleet->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <p for="">Type of Vehicle</p>
                    <input type="text" name="bus_name" value="{{ $fleet->bus_name}}" required class="form-control" placeholder="Type of Vehicle">
                  </div>
                  <div class="col-md-6">
                  <p for="">Number Plate</p>
                    <input type="text" name="no_plate" value="{{ $fleet->no_plate}}" required class="form-control"  placeholder="Number Plate">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <p for="">Assigned Route</p>
                    <input type="text" name="assigned_route" value="{{ $fleet->assigned_route}}" required class="form-control"  placeholder="Assigned Route">
                    </div>
                  <div class="col-md-6">
                  <p for="">Capacity</p>
                    <input type="text" name="capacity" value="{{ $fleet->capacity}}" required class="form-control"  placeholder="Capacity">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p for="">Driver</p>
                    <input type="text" name="driver" value="{{ $fleet->driver}}" required class="form-control"  placeholder="Driver">
                    </div>
                    <div class="col-md-6">
                    <p for="">Vehicle's photo</p>
                    <input type="file" name="image" class="form-control"  placeholder="Student's passport photo">
                    <img src="{{ URL::to('/') }}/images/{{$fleet -> image}}" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $fleet->image}}"> 
                    </div>
                </div>
                
                <!-- /.card-body -->
                <br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
