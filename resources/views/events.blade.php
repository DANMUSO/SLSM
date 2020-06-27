@extends('layouts.app')
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
                <form role="form" method="POST" action="{{ route('admin.events.store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <label for="">Employee Number</label>     <select name="staffno" class="select2_single form-control" style="width: 100%" required="required" tabindex="-1" >
                  <option value="0">Employee No</option>
                  <?php
                  $result= mysqli_query($con,"select * from staff") or die (mysqli_error());
                  while ($row= mysqli_fetch_array ($result) ){
                  $id=$row['id'];
                  ?>
                  <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
                  <?php } ?>
                  </select> </div>
                  <div class="col-md-4">
                  <label for="">Employee Name</label>
                  <input type="text" name="event_name" required class="form-control"  placeholder="Employee Name">
                  </div>
                  <div class="col-md-4">
                  <label for="">Type of Leave</label>
                  <select name="typeleave" required class="form-control"  placeholder="Type of the Leave">
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
                  <div class="col-md-3">
                  <label for="">Purpose of Leave</label>
                  <input type="text" name="purpose" required class="form-control"  placeholder="Purpose">
                  </div>
                  <div class="col-md-3">
                  <label for="">Status</label>

                  <select name="status" required class="form-control">
                  <option>Approved</option>
                  <option>pending</option>
                  <option>Rejected</option>
                  </select>
                  </div>
                  <div class="col-md-3">
                  <label for="">Start Date</label>
                  <input type="date" name="start_date" required class="form-control"  placeholder="Start Date">
                  </div>
                  <div class="col-md-3">
                  <label for="">End Date</label>
                  <input type="date" name="end_date" required class="form-control"  placeholder="End Date">
                  </div>
                  </div>
     
               
              
                
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
                </form>

                <div class="bs-example">
                <div class="accordion" id="accordionExample">
                <div class="card">
                
               
                </div>
                </div>
                </div>
              
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="panel panel-primary">
                   
                <div class="panel-body" >
                {!! $calendar_details->calendar() !!}
                </div>
                </div>
                </div>
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
                  <div class="col-md-12">
                  <div class="card">
                  <div class="card-header p-2">
                  <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link btn btn-success" style="color:white" href="#activity" data-toggle="tab"><strong>Approved Leaves</strong></a></li>
                 &nbsp&nbsp&nbsp <li class="nav-item"><a class="nav-link btn btn-primary" style="color:white" href="#timeline" data-toggle="tab"><strong>Pending Leaves</strong></a></li>
                 &nbsp&nbsp&nbsp<li class="nav-item"><a class="nav-link btn btn-danger" style="color:white" href="#settings" data-toggle="tab"><strong>Rejected leaves</strong></a></li>
                  </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                    
                      <!-- /.user-block -->
                      <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
                <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
        <th>Employee's Number</th>
        <th>Name</th>
        <th>Type of Leave</th>
        <th>Purpose of Leave</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($users as $c)
      <tr>
      <td>{{ $c->id}}</td>
                
                <td>{{ $c->event_name}}</td> 
                <td>{{ $c->typeleave}}</td>
                <td>{{ $c->purpose}}</td>
                <td>{{ $c->start_date}}</td> 
                <td>{{ $c->end_date}}</td>  
                <td>{{ $c->status}}</td>
                <td>
                <a href="{{ route('admin.events.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                <a href="{{ route('admin.events.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.events.destroy', $c->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
                <span class="btn btn-danger fa fa-trash-alt"></span>
                </a>                    
                </div>
                </form>
                  
                </td>
      </tr>
      @endforeach
   
            </tbody>
            </table>
            <script type="text/javascript">
              $(document).ready(function(){
            $('table').DataTable();
              });
              
              </script>
        
                </div>
                   <div class="row">
                   <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                 
                </ul>
                </div>
                <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                 
                 
                </ul>
                </div>
                </div>
               
                
                
                <div class="row">
                   <div class="col-md-3">
              
                </div>
                </div></div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                   
                    <div style="overflow-x:auto;">
                    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
        <th>Employee's Number</th>
        <th>Name</th>
        <th>Type of Leave</th>
        <th>Purpose of Leave</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($pending as $c)
      <tr>
      <td>{{ $c->id}}</td>
                
                <td>{{ $c->event_name}}</td> 
                <td>{{ $c->typeleave}}</td>
                <td>{{ $c->purpose}}</td>
                <td>{{ $c->start_date}}</td> 
                <td>{{ $c->end_date}}</td>  
                <td>{{ $c->status}}</td>
                <td>
                <a href="{{ route('admin.events.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                <a href="{{ route('admin.events.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.events.destroy', $c->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
                <span class="btn btn-danger fa fa-trash-alt"></span>
                </a>                    
                </div>
                </form>
                  
                </td>
      </tr>
      @endforeach
   
            </tbody>
            </table>
            <script type="text/javascript">
              $(document).ready(function(){
            $('table').DataTable();
              });
              
              </script>
                  </div>
                 
                  </div>

                  <div class="tab-pane" id="others">
                  
                   <hr>
                   <div class="row">
                 
                   <div class="col-md-12">
                   <center><label>School Uniform</label></center>
                   <hr>
                   </div>
                  
                   </div>
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                    <label>Next of Kin One</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
        <th>Employee's Number</th>
        <th>Name</th>
        <th>Type of Leave</th>
        <th>Purpose of Leave</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($rejected as $c)
      <tr>
      <td>{{ $c->id}}</td>
                
                <td>{{ $c->event_name}}</td> 
                <td>{{ $c->typeleave}}</td>
                <td>{{ $c->purpose}}</td>
                <td>{{ $c->start_date}}</td> 
                <td>{{ $c->end_date}}</td>  
                <td>{{ $c->status}}</td>
                <td>
                <a href="{{ route('admin.events.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                <a href="{{ route('admin.events.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.events.destroy', $c->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
                <span class="btn btn-danger fa fa-trash-alt"></span>
                </a>                    
                </div>
                </form>
                  
                </td>
      </tr>
      @endforeach
   
            </tbody>
            </table>
            <script type="text/javascript">
              $(document).ready(function(){
            $('table').DataTable();
              });
              
              </script>
                  </div>
                  <hr>
                  <label>Next of Kin Two</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
        <th>Employee's Number</th>
        <th>Name</th>
        <th>Type of Leave</th>
        <th>Purpose of Leave</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($rejected as $c)
      <tr>
      <td>{{ $c->id}}</td>
                
                <td>{{ $c->event_name}}</td> 
                <td>{{ $c->typeleave}}</td>
                <td>{{ $c->purpose}}</td>
                <td>{{ $c->start_date}}</td> 
                <td>{{ $c->end_date}}</td>  
                <td>{{ $c->status}}</td>
                <td>
                <a href="{{ route('admin.events.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                <a href="{{ route('admin.events.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.events.destroy', $c->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
                <span class="btn btn-danger fa fa-trash-alt"></span>
                </a>                    
                </div>
                </form>
                  
                </td>
      </tr>
      @endforeach
   
            </tbody>
            </table>
            <script type="text/javascript">
              $(document).ready(function(){
            $('table').DataTable();
              });
              
              </script>
                  </div>
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  <div class="row">
                  <div class="col-md-4"></div></div>
    
                  
                      <div style="overflow-x:auto;">
                      <table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
        <th>Employee's Number</th>
        <th>Name</th>
        <th>Type of Leave</th>
        <th>Purpose of Leave</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
   
    <tbody id="myTable">
    
    @foreach($rejected as $c)
      <tr>
      <td>{{ $c->id}}</td>
                
                <td>{{ $c->event_name}}</td> 
                <td>{{ $c->typeleave}}</td>
                <td>{{ $c->purpose}}</td>
                <td>{{ $c->start_date}}</td> 
                <td>{{ $c->end_date}}</td>  
                <td>{{ $c->status}}</td>
                <td>
                <a href="{{ route('admin.events.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                <a href="{{ route('admin.events.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.events.destroy', $c->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
                <span class="btn btn-danger fa fa-trash-alt"></span>
                </a>                    
                </div>
                </form>
                  
                </td>
      </tr>
      @endforeach
   
            </tbody>
            </table>
            <script type="text/javascript">
              $(document).ready(function(){
            $('table').DataTable();
              });
              
              </script></div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
                  </div>
                  </div>
                  </div>
@endsection