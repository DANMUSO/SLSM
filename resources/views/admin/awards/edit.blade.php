@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Awards</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Awards</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit award details</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.awards.update',$award->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <p for="">Category</p>
                    <input type="text" name="category" value="{{ $award->category}}" required class="form-control" placeholder="Category">
                  </div>
                  <div class="col-md-6">
                  <p for="">Rewarded Date</p>
                    <input type="date" name="award_date" value="{{ $award->award_date}}" required class="form-control"  placeholder="Rewarded Date">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                   
                   
                    <p for="">Award's photo</p>
                    <input type="file" name="image" class="form-control"  placeholder="Student's passport photo">
                    <img src="{{ URL::to('/') }}/images/{{$award -> image}}" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $award->image}}"> 
                    </div>
                </div>
                
                <!-- /.card-body -->
                <br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              </div>
              </div>

@endsection
