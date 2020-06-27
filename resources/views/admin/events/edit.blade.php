@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark"></h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>


                <?php
                $con = mysqli_connect("localhost","root","","serp");
                ?>
                <br>
                <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Schedule Employee Leave</h3>
                </div> 
                <form role="form" method="POST" action="{{ route('admin.events.update', $event->id)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                  <label for="">Staff Number</label>
                  <input type="text" name="staffno" required value="{{$event->staffno}}" class="form-control"  placeholder="Employee Name">
                  </div>
                  <div class="col-md-4">
                  <label for="">Employee Name</label>
                  <input type="text" name="event_name" required value="{{$event->event_name}}" class="form-control"  placeholder="Employee Name">
                  </div>
                  <div class="col-md-4">
                  <label for="">Type of Leave</label>
                  <select name="typeleave" required class="form-control"  placeholder="Type of the Leave">
                  <option>{{$event->purpose}}</option>
                  <option>Sick leave</option>
                  <option>Casual leave</option>
                  <option>Public holiday</option>
                  <option>Religious holidays</option>
                  <option>Maternity leave</option>
                  <option>Paternity leave</option>
                  <option>Bereavement leave</option>
                  <option>Sabbatical leave</option>
                  <option>Unpaid Leave (or leave without pay)</option>
                  <select>
                  </div>
                  <div class="col-md-4">
                  <label for="">Purpose of Leave</label>
                  <input type="text" name="purpose" value="{{$event->purpose}}" required class="form-control"  placeholder="Purpose">
                  </div>
                  <div class="col-md-4">
                  <label for="">Start Date</label>
                  <input type="date" name="start_date" value="{{$event->start_date}}" required class="form-control"  placeholder="Start Date">
                  </div>
                  <div class="col-md-4">
                  <label for="">End Date</label>
                  <input type="date" name="end_date" value="{{$event->end_date}}" required class="form-control"  placeholder="End Date">
                  </div>
                  <div class="col-md-4">
                  <label for="">Status</label>
                  <select name="status" required class="form-control"  placeholder="Type of the Leave">
                  <option>{{$event->status}}</option>
                  <option>Approved </option>
                  <option>Pending</option>
                  <option>Rejected</option>
                 <select>
                  </div>
                  </div>
     
               
              
                
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
                </form>

                </div>
                </div>
                <div class="container">
 
                <div class="panel panel-primary">
 
            
                 <div class="panel-body">    
 
                  {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
                  <div class="row">
                  <div class="col-xs-1 col-sm-1 col-md-1">
                  <div class="panel panel-primary">
                  <div class="panel-heading"></div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
@endsection