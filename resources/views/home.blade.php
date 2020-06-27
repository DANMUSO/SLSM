@extends('layouts.admin')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Admin Dashboard</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-info" style="width:100%">
               <a href="{{ route('admin.learners.index')}}">  <h6 style="color:white">Students Summary  &nbsp&nbsp&nbsp <span><i class="fa fa-users"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Total Students</th><td><?php 
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
        $formone = mysqli_num_rows($result); 
          
      
        // close the result. 
        mysqli_free_result($result); 
    } 
    $query = "SELECT * FROM formtwos"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $formtwo = mysqli_num_rows($result); 
          
     
        // close the result. 
        mysqli_free_result($result); 
    } 
    $query = "SELECT * FROM formthrees"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $formthree = mysqli_num_rows($result); 
       
        // close the result. 
        mysqli_free_result($result); 
    } 
    $query = "SELECT * FROM formfours"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $formfour = mysqli_num_rows($result); 
          
       
        // close the result. 
        mysqli_free_result($result); 
    } 
    $sum = $formone + $formtwo + $formthree + $formfour;
  echo $sum;
    // Connection close  
    mysqli_close($connection); 
?> </td>
                </tr> 
                <tr>
                <th>Present Students</th><td>
                <?php
                echo $sum;
                ?>
                </td>
                </tr>
                <tr>
                <th>Absent Students</th><td>
                <?php
                
                echo "0";
                
                ?>
                
                </td>
                </tr>
                </table></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-primary" style="width:100%">
              <a href="{{ route('admin.feesettings.index')}}"> <h6 style="color:white">
              Fees Summary &nbsp&nbsp&nbsp <span><i class="fa fa-dollar"
                 style="font-size:16px;color:white"></i></span></h6>
                
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Total Fees</th><td>1000,000 KES</td>
                </tr> 
                <tr>
                <th>Fees Collected</th><td>
                <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $formone = mysqli_query($con,"SELECT SUM(amount) FROM formonefees");
                      while ($formonefee=mysqli_fetch_assoc($formone))
                      {
                         $amount1=$formonefee['SUM(amount)'];
                       ?>
              
                       <?php }

                        $formtwo= mysqli_query($con,"SELECT SUM(amount) FROM formtwofees");
                        while ($formtwofee=mysqli_fetch_assoc($formtwo))
                        {
                           $amount2=$formtwofee['SUM(amount)'];
                         ?>
                       
                         <?php }

                        $formthree= mysqli_query($con,"SELECT SUM(amount) FROM formthreefees");
                        while ($formthreefee=mysqli_fetch_assoc($formthree))
                        {
                          $amount3=$formthreefee['SUM(amount)'];
                        ?>
                        
                        <?php }

                        $formfour= mysqli_query($con,"SELECT SUM(amount) FROM formfourfees");
                        while ($formfourfee=mysqli_fetch_assoc($formfour))
                        {
                          $amount4=$formfourfee['SUM(amount)'];
                        ?>
                        
                        <?php }
                        $totalsum = $amount1 + $amount2 + $amount3 + $amount4;
                        echo $totalsum.'  '. 'KES';
                      ?>
                </td>
                </tr>
                <tr>
                <th>Fees Pending</th><td>240,000 KES</td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-success" style="width:100%">
              <a href="{{ route('admin.staffs.index')}}"> <h6 style="color:white">
              Staffs Summary  &nbsp&nbsp&nbsp <span><i class="fa fa-users"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Total Employees</th><td>27</td>
                </tr> 
                <tr>
                <th>Present Employees</th><td>25</td>
                </tr>
                <tr>
                <th>Employees on Leave</th><td>2</td>
                </tr>
                </table></a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div></div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-danger" style="width:100%">
                <a href="{{ route('admin.performances.index')}}"><h6 style="color:white">School Performance Summary &nbsp&nbsp&nbsp<span><i class="fa fa-bar-chart"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>2020 Performance</th><td>76%</td>
                </tr> 
                <tr>
                <th>2019 Performance</th><td>73%</td>
                </tr>
                <tr>
                <th>2018 Performance</th><td>65%</td>
                </tr>
                </table>
                </a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-dark" style="width:100%">
                <a href="{{ route('admin.events.index')}}" style="color:white"><h6>Leaves Summary  &nbsp&nbsp&nbsp <span><i class="fa fa-user-secret"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Approved Leaves</th><td>21</td>
                </tr> 
                <tr>
                <th>Pending Leaves</th><td>2</td>
                </tr>
                <tr>
                <th>Reject Leaves</th><td>23</td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-success" style="width:100%">
               <a href="{{ route('admin.awards.index')}}"> <h6 style="color:white">Awards Summary &nbsp&nbsp&nbsp<i class="fas fa-trophy"></i></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Academic Awards</th><td>11</td>
                </tr> 
                <tr>
                <th>Non-Curriculun Awards</th><td>15</td>
                </tr>
                <tr>
                <th>Impact Award</th><td>3</td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-secondary" style="width:100%">
                <h6 style="color:white">Institute Summary  &nbsp&nbsp&nbsp <span><i class="fa fa-university"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Total Department</th><td>7</td>
                </tr> 
                <tr>
                <th>Total Classes</th><td>8</td>
                </tr>
                <tr>
                <th>Total Stream</th><td>16</td>
                </tr>
                </table>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-primary" style="width:100%">
               <a href=""> <h6 style="color:white">Security Summary  &nbsp&nbsp&nbsp <span><i class="fas fa-lock"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Total Security Officers</th><td>4</td>
                </tr> 
                <tr>
                <th>Total Visitors</th><td>67</td>
                </tr>
                <tr>
                <th>NO of Reported Cases<s/th><td>3</td>
                </tr>
                </table>
                </a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-warning" style="width:100%">
                <a href="{{ route('admin.fleets.index')}}"><h6 style="color:white">Fleet Summary  &nbsp&nbsp&nbsp <span><i class="fa fa-bus"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th>Total Vehicles</th><td>8</td>
                </tr> 
                <tr>
                <th>Total Bus</th><td>5</td>
                </tr>
                <tr>
                <th>Total Vans</th><td>3</td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    
    <!-- /.content -->
@endsection
