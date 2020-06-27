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

   <br>
     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add student's fees transaction to database</h3>
              </div> 
              <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    
<table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
      <tr>
      <th>Photo</th>
      <th>Admission Number</th>
			<th>Mobile Number</th>
      <th>Date</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
        @foreach($formtwos as $c)
      <tr>
      <td><img src="{{ URL::to('/') }}/images/{{ $c -> image}}" class="img-thumbnail" width="70"></td>
      <td>{{ $c->id}}</td>
      <td>{{ $c->phone}}</td>
      <td>{{ $c->created_at}}</td>   
      <td>
      <a href="{{ route('admin.formtwofees.show', $c->id)}}" class="btn btn-success">Pay Fee</a>
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
              </div>
              

@endsection
