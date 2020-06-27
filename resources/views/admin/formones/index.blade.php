@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Form One Students</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Form One Students</li>
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
            <a href=""> <h6 style="color:white">Form One Students
           </h6>
              </div>
              </span>
              <table class="table table-borderless" style="color:black">
              
              <tr>
              <th>
              <?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "serp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formones"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf("Total Form Students : " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> 
              
              </td><th>     <a href="">
              
              <?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "serp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formones"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf("Present Students : " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> 
              </a></td><th>     <a href="">
              
              <?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "serp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formones where pa ='Daniel'"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf("Absent Students: " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> 
              </a></td>
              </tr> 
              
              </table></a>
              <a href="" class="btn btn-primary">Deactivate</a>
   
            </div>
            
            <!-- /.info-box-content -->
          </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
       

        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <div class="row"><div class="col-md-6">
   
    <h6>&nbsp&nbsp Recent fees payment transactions</h6></div>
    <div class="col-md-4"></div>
    <div class="col-md-2"><a href="{{ route('admin.formones.create')}}" class="btn btn-primary">Add Student</a></div></div>
    <div class="container">
    
    <div class="row justify-content-center">
    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
    
<table id="example" class="display nowrap">
    <thead style="background-color:#33e6ff;">
        <tr>
            <th>Photo</th>
            <th>Admission Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Mobile Number</th>
      <th>Date</th>
      <th>Action</th>
        </tr>
    </thead>
    <tbody id="myTable">
      
        @foreach($formones as $c)
      <tr>
      <td><img src="{{ URL::to('/') }}/images/{{ $c -> image}}" class="img-thumbnail" width="70"></td>
      <td>{{ $c->id}}</td>
     
      <td>{{ $c->fname}}</td> 
      <td>{{ $c->lname}}</td> 
    
      <td>{{ $c->phone}}</td>
      <td>{{ $c->created_at}}</td>   
      <td>
      <a href="{{ route('admin.formones.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
      <a href="{{ route('admin.formones.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
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
  
  @include('sweetalert::alert')
@endsection
