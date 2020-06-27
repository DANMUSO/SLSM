@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Examination</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Examination</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
 
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-primary" style="width:100%">
              <a href="{{ route('admin.formones.index')}}"> 
                <h6 style="color:white">Form One Students <strong><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
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
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </strong> </h6>
                
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Present </th><td> <?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
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
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr> 
                <tr>
                <th>Absent</th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formones where pa='present'"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr>
               
                </table></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-success" style="width:100%">
              <a href="{{ route('admin.formtwos.index')}}"> <h6 style="color:white">Form Two Students <strong>
              <?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formtwos"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </strong>
             </h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Present </th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formtwos"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr> 
                <tr>
                <th>Absent</th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formtwos where pa='absent'"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr>
               
                </table></a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-info" style="width:100%">
               <a href="">  <h6 style="color:white">Form Three Students <strong><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formthrees"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </strong>
              </h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Present</th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formthrees"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr> 
                <tr>
                <th>Absent</th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formthrees where pa='absent'"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr>
                
                </table></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-warning" style="width:100%">
               <a href="">  <h6 style="color:white">Form Four Students <strong><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formfours"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </strong>
              </h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Present</th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formfours"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr> 
                <tr>
                <th>Absent</th><td><?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "eduerp"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM formfours where pa='absent'"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
        printf(": " . $row); 
        // close the result. 
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr>
                
                </table></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->
        </div>
       

        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <div class="row"><div class="col-md-6"><h6>&nbsp&nbspList of Examinations</h6></div>
    <div class="col-md-4"><input id="myInput" type="text" placeholder="Search.."></div>
    <div class="col-md-2"><a href="" class="btn btn-primary">Make Exam</a></div></div>
    <div style="overflow-x:auto;">
      <table class="table table-striped">
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Admission Number</th>
      <th>Mobile Number</th>
      <th>Email</th>
      <th>Level</th>
      <th>Admission</th>
    
      <th>Action</th>
     
      </tr>
   
      <tr>
      <td></td>
      <td></td>
      <td></td> 
      <td></td> 
      <td></td> 
      <td></td>
      <td></td> 
      <td></td> 
      <td></td> 
      <td></td> 
      <td>
      <a href="" class="btn btn-success fa fa-eye"></a>
      <a href="" class="btn btn-primary fa fa-edit" ></a>
      <a href="" class="btn btn-danger fa fa-trash-alt"></a>
      
    </td>
      </tr>
     
     
      </table>
      </div>
    
@endsection