@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">School Fees Structure</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Fees Structure</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
      <!--/. container-fluid -->
    </section>
    
    <div class="row"><div class="col-md-6"> <h6>&nbsp&nbsp&nbsp &nbsp&nbspForm One Fees Structure</h6></div>
   </div>
 
     <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><strong>Form One Fees Setting</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"><strong>Form Two Fees Setting</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#parent" data-toggle="tab"><strong>Form Three Fees Setting</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><strong>Form Four Fees Setting</strong></a></li>
                  
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item"><a href="{{ route('admin.feesettings.create')}}" class="btn btn-primary nav-link" style="color:white">Fees Category</a></li>
                  
                 </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                    <table id="example" class="table table-striped table-bordered table-hover">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>ID</th>
                    <th>Fees Category</th>
                    <th>Form</th>
                    <th>Term</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($formone as $c)
                    <tr>
                    <td>{{ $c->id}}</td>
                  
                    <td>{{ $c->category}}</td>
                    <td>{{ $c->form}}</td> 
                    <td>{{ $c->term}}</td>
                    <td>{{ $c->amount}}</td>
                    <td>{{ $c->deadline}}</td>
                    <td>
                    
                    <a href="{{ route('admin.feesettings.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                    <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.feesettings.destroy', $c->id) }}">
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
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings WHERE form='Form One'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="4">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
                    </table>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <label>Form Two Fees Structure</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="table table-striped table-bordered table-hover">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>ID</th>
                    <th>Fees Category</th>
                    <th>Form</th>
                    <th>Term</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($formtwo as $c)
                    <tr>
                    <td>{{ $c->id}}</td>
                  
                    <td>{{ $c->category}}</td>
                    <td>{{ $c->form}}</td> 
                    <td>{{ $c->term}}</td>
                    <td>{{ $c->amount}}</td>
                    <td>{{ $c->deadline}}</td>
                    <td>
                    
                    <a href="{{ route('admin.feesettings.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                    <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.feesettings.destroy', $c->id) }}">
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
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings WHERE form='Form Two'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="4">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
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
                  <table id="example" class="table table-striped table-bordered table-hover">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>ID</th>
                    <th>Fees Category</th>
                    <th>Form</th>
                    <th>Term</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($formthree as $c)
                    <tr>
                    <td>{{ $c->id}}</td>
                  
                    <td>{{ $c->category}}</td>
                    <td>{{ $c->form}}</td> 
                    <td>{{ $c->term}}</td>
                    <td>{{ $c->amount}}</td>
                    <td>{{ $c->deadline}}</td>
                    <td>
                    
                    <a href="{{ route('admin.feesettings.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                    <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.feesettings.destroy', $c->id) }}">
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
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="4">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
                    </table>
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                    <label>Form Three Fees Structure</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="table table-striped table-bordered table-hover">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>ID</th>
                    <th>Fees Category</th>
                    <th>Form</th>
                    <th>Term</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($formthree as $c)
                    <tr>
                    <td>{{ $c->id}}</td>
                  
                    <td>{{ $c->category}}</td>
                    <td>{{ $c->form}}</td> 
                    <td>{{ $c->term}}</td>
                    <td>{{ $c->amount}}</td>
                    <td>{{ $c->deadline}}</td>
                    <td>
                    
                    <a href="{{ route('admin.feesettings.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                    <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.feesettings.destroy', $c->id) }}">
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
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings where form='Form fOUR'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="4">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
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
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  <label>Form Four Fees Structure</label>
                  <div class="row"><div class="col-md-6"><h6></h6></div>
                  <div class="col-md-4"></div></div>
    
                  
                      <div style="overflow-x:auto;">
                      <table id="example" class="table table-striped table-bordered table-hover">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>ID</th>
                    <th>Fees Category</th>
                    <th>Form</th>
                    <th>Term</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($formfour as $c)
                    <tr>
                    <td>{{ $c->id}}</td>
                  
                    <td>{{ $c->category}}</td>
                    <td>{{ $c->form}}</td> 
                    <td>{{ $c->term}}</td>
                    <td>{{ $c->amount}}</td>
                    <td>{{ $c->deadline}}</td>
                    <td>
                    
                    <a href="{{ route('admin.feesettings.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                    <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.feesettings.destroy', $c->id) }}">
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
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings WHERE form='Form Three'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="4">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
                    </table>
                     <script>

                    $('#example').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );
                     </script></div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
@endsection