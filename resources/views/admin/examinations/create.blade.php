@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Examinations Summary</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Examinations Summary</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>

              <div class="card-header">
                <p class="card-title">Add Exam Calender into Database</p>
              </div> 
       <form role="form" method="POST" action="{{ route('admin.examinations.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Type of Examination</p>
                    <input type="text" name="exam" class="form-control" placeholder="Type of Examination">
                  </div>
                  <div class="col-md-4">
                  <p for="">Classes</p>
                    <input type="text" name="classes" class="form-control"  placeholder="Classes">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Supervisor(s)</p>
                    <input type="text" name="supervisor" class="form-control"  placeholder="Supervisor(s)">
                    </div>
                  <div class="col-md-4">
                  <p for="">Examination Venue</p>
                    <input type="text" name="venue" class="form-control"  placeholder="Examination Venue">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p for="">Starting Date</p>
                    <input type="date" name="sdate" class="form-control"  placeholder="Starting Date">
                    </div>
                  <div class="col-md-4">
                    <p for="">Ending Date</p>
                    <input type="date" name="edate" class="form-control"  placeholder="Ending Date">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@endsection
